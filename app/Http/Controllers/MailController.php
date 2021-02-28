<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
        $from = $request->name;
        $from_email = $request->email;
        $message = $request->message;
        $captcha = $request->input('g-recaptcha-response');

      	if(!isset($captcha)){
            return 'fail';
        }

        $name_app = config("app.name");
        $emails_group = array('yond1994@gmail.com');
        $title = 'Ey contacto Heavydeveloper';
        Mail::send('vendor.mail.new.template', [
            'from'=>$from  ,
            'message_to' => $message,
            'from_email' => $from_email
     ],
            function ($m) use (
                $name_app,
                $emails_group,
                $title) {

            $m->from('no-reply@heavydeveloper.me', $name_app);
            $m->to($emails_group)->subject($title);
        });
        /*---REPLAY-----*/
        Mail::send('vendor.mail.new.replay', [
            'from'=>$from  ,
            'message_to' => $message,
            'from_email' => $from_email
        ],
            function ($m) use (
                $name_app,
                $emails_group,
                $from_email,
                $title) {

                $m->from('no-reply@heavydeveloper.me', $name_app);
                $m->to($from_email)->subject($title);
            });
        return 'success';


    }
}
