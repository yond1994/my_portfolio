<?php

namespace App\Http\Controllers;

use App\db_attach;
use App\db_attached_has;
use App\db_categorie_has;
use App\db_categories;
use App\db_dowloand;
use App\db_setting;
use App\db_works;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $works=db_works::orderBy('id','desc')->get();
        foreach ($works as $work){
            $work->feature_img = null;
            $tmp = db_categorie_has::where('works_id',$work->id)->first();
            $work->category = db_categories::where('id',$tmp->categories_id)->first()->name;
            $work->category_id = db_categories::where('id',$tmp->categories_id)->first()->id;
            if(db_attached_has::where('works_id',$work->id)->exists()){
                $tmp_img = db_attached_has::where('works_id',$work->id)->first();
                $tmp_img = db_attach::where('id',$tmp_img->attached_id)->first();
                $work->feature_img  =  $tmp_img;
            }

        }
        $des=db_dowloand::orderBy('id','desc')->get();
        foreach ($des as $work){
            $work->feature_img = null;
            $tmp = db_categorie_has::where('works_id',$work->id)->first();
            $work->category = db_categories::where('id',$tmp->categories_id)->first()->name;
            $work->category_id = db_categories::where('id',$tmp->categories_id)->first()->id;
            if(db_attached_has::where('works_id',$work->id)->exists()){
                $tmp_img = db_attached_has::where('works_id',$work->id)->first();
                $tmp_img = db_attach::where('id',$tmp_img->attached_id)->first();
                $work->feature_img  =  $tmp_img;
            }

        }
        $categories = db_categories::orderBy('id','desc')->get();
        $setting = db_setting::all();

        return view('front.home',['works'=>$works,'categories'=>$categories,'setting'=>$setting,'des'=>$des]);
    }
}
