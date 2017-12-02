<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
// use App\Libraries\Mailer;
use Wa;
use Validator;
use URL;

class ContactController extends BaseController
{
    public function actionPostSubmit(Request $request){
        // $this->mail = new Mailer;
        $inputs = $request->all();

        $validate = Validator::make($inputs, [
            'fname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if($validate){
            try{
                $model = Wa::model('contact');
                $model->first_name = $inputs['fname'];
                $model->last_name  = $inputs['lname'];
                $model->email      = $inputs['email'];
                $model->phone      = $inputs['phone'];
                $model->message    = $inputs['message'];
                $model->create_on  = date('Y-m-d');
                $model->save();

                //send email
                // $this->mail->actionMail($model,'contact');

                return redirect()->back()->with('success', 'Berhasil input data!');
            }catch(\Exception $e){
                return redirect()->back()->with('error', $e->getMessage())->withInput();
            }

        }else{
            return redirect()->back()->with('error', 'Please complete following form!')->withInput();
        }
    }
}
