<?php

namespace App\Http\Controllers;

use App\db_attach;
use App\db_attached_has;
use App\db_categorie_has;
use App\db_categories;
use App\db_setting;
use App\db_works;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = db_works::orderBy('id','desc')->get();
        return view('work.list',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = db_categories::orderBy('id','desc')->get();
        return view('work.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $url = $request->url;
        $categorie = $request->categorie;

        $values = array(
            'name' => $title,
            'description' => $description,
            'link' => $url,
            'created_at' => Carbon::now(),
        );

        $id=db_works::insertGetId($values);

        db_categorie_has::insert(['categories_id'=>$categorie,'works_id'=>$id]);

        return redirect('/admin/work/'.$id.'/image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = db_works::find($id);
        return view('work.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = db_works::find($id);
        if(db_categorie_has::where('works_id',$id)->exists()){
            $tmp = db_categorie_has::where('works_id',$id)->first();
            $data->categorie = db_categories::where('id',$tmp->categories_id)->first()->id;
        }
        $categories = db_categories::orderBy('id','desc')->get();
        return view('work.edit',['data'=>$data,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $request->title;
        $description = $request->description;
        $categorie = $request->categorie;

        db_categorie_has::where('works_id',$id)->delete();

        if(isset($categorie)){
            db_categorie_has::where('works_id',$id)->insert(
                ['works_id'=>$id,'categories_id'=>$categorie]
            );
        }

        $values = array(
            'name' => $title,
            'description' => $description,
        );

        db_works::where('id',$id)->update($values);

        return redirect('/admin/work/'.$id.'/image');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $att = db_attached_has::where('works_id',$id)->get();
        db_attached_has::where('works_id',$id)->delete();
        foreach ($att as $a){
            db_attach::where('id',$a->attached_id)->delete();
        }

        db_works::where('id',$id)->delete();
        return redirect('/admin/work');
    }

    public function images($id){

        $gallery = db_attached_has::where('works_id',$id)->get();

        return view('work.image',['id'=>$id,'gallery'=>$gallery]);
    }

    public function front_get($id){
        $work = db_works::find($id);
        $tmp_img = db_attached_has::where('works_id',$id)->get();
        $images = array();
        foreach ($tmp_img as $img){
            $images[]=db_attach::find($img->attached_id);
        }
        $work->images = $images;
        $setting = db_setting::all();
        $work->setting = $setting;
        return view('front.portfolio',$work);
    }
}
