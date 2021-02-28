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
use App\db_dowloand;

class dowloandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = db_dowloand::orderBy('id','desc')->get();
        return view('download.list',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = db_categories::orderBy('id','desc')->get();
        return view('download.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $link = $request->link;
        $bd= $request->bd;
        $gif = $request->gif;
        $video = $request->video;
        $categorie = $request->categorie;

        $values = array(
            'name' => $name,
            'description' => $description,
            'link' => $link,
            'bd'=>$bd,
            'gif'=>$gif,
            'video' => $video,
            'created_at' => Carbon::now(),
        );

        $id=db_dowloand::insertGetId($values);

        db_categorie_has::insert(['categories_id'=>$categorie,'descargas_id'=>$id,'works_id'=>$id]);

        return redirect('/admin/download/'.$id.'/image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = db_dowloand::find($id);
        return view('download.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = db_dowloand::find($id);
        if(db_categorie_has::where('descargas_id',$id)->exists()){
            $tmp = db_categorie_has::where('descargas_id',$id)->first();
            $data->categorie = db_categories::where('id',$tmp->categories_id)->first()->id;
        }
        $categories = db_categories::orderBy('id','desc')->get();
        return view('download.edit',['data'=>$data,'categories'=>$categories]);
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
        $name = $request->name;
        $description = $request->description;
        $categorie = $request->categorie;
        $link = $request->link;
        $bd = $request->bd;
        $gif=$request->gif;
        $video = $request->video;


        db_categorie_has::where('descargas_id',$id)->delete();

        if(isset($categorie)){
            db_categorie_has::where('descargas_id',$id)->insert(
                ['descargas_id'=>$id,'categories_id'=>$categorie]
            );
        }

        $values = array(
            'name' => $name,
            'description' => $description,
            'video' => $video,
            'bd' => $bd,
            'gif' => $gif,
            'link' => $link,
        );

        db_dowloand::where('id',$id)->update($values);

        return redirect('/admin/download/'.$id.'/image');
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

        db_dowloand::where('id',$id)->delete();
        return redirect('/admin/download');
    }

    public function images($id){

        $gallery = db_attached_has::where('descargas_id',$id)->get();

        return view('download.image',['id'=>$id,'gallery'=>$gallery]);
    }

    public function front_get($id){
        $work = db_dowloand::find($id);
        $tmp_img = db_attached_has::where('works_id',$id)->get();
        $images = array();
        foreach ($tmp_img as $img){
            $images[]=db_attach::find($img->attached_id);
        }
        $work->images = $images;
        $setting = db_setting::all();
        $work->setting = $setting;
        return view('front.descargas',$work);
    }
}
