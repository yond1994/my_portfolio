<?php

namespace App\Http\Controllers;

use App\db_attach;
use App\db_attached_has;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class MediaController extends Controller
{
    public function upload(Request $request,$id=null){
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);
        $values = array(
            'name' => $imageName,
            'created_at' => Carbon::now(),
            'path' => 'upload/'.$imageName,
        );

        $id_attached=db_attach::insertGetId($values);

        db_attached_has::insert(['attached_id'=>$id_attached,'works_id'=>$id]);

        return response()->json(['id'=>$id]);
    }

    public function optimize($id=null,$w=300,$h=300,$p=null){
        $path = public_path();
        $file = '/assets/images/not_image.jpg';

        if(db_attach::where('id',$id)->exists()){
            $img = db_attach::where('id',$id)->first();
            $file = $img->path;
        }

        $img = Image::make($path.'/'.$file);
        if($p=='resize'){
            $img->resize($w, $h);
        }else{
            $img->fit($w, $h);
        }
        return $img->response('png');

    }

    public function delete($id=null,$id_work=null){
        if(db_attach::where('id',$id)->exists()){
            $data = db_attach::where('id',$id)->first();
            $path = public_path();
            if(file_exists($path.'/'.$data->path)){
                unlink($path.'/'.$data->path);
            }

        }
            db_attached_has::where('attached_id',$id)->delete();
            db_attach::where('id',$id)->delete();
        return redirect('admin/work/'.$id_work.'/image');

    }

}
