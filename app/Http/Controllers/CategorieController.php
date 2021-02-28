<?php

namespace App\Http\Controllers;

use App\db_categories;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = db_categories::orderBy('id','desc')->get();
        return view('categorie.list',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie.create');
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

        $values = array(
            'name' => $title,
            'description' => $description,
            'created_at' => Carbon::now(),
        );

        db_categories::insert($values);

        return redirect('/admin/categorie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = db_categories::find($id);
        return view('categorie.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = db_categories::find($id);
        return view('categorie.edit',$data);
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

        $values = array(
            'name' => $title,
            'description' => $description,
        );

        db_categories::where('id',$id)->update($values);

        return redirect('/admin/categorie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        db_categories::where('id',$id)->delete();
        return redirect('/admin/categorie');

    }
}
