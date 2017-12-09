<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
// use App\Libraries\Mailer;
use Wa;
use Validator;
use URL;

class PackagesController extends BaseController
{
    public function before(){
        $packages = Wa::model('package')->where('is_active',1)->orderBy('sequence')->paginate(9);
        view()->share([
            'models'     => $packages,
            'categories' => Wa::model('category')->where('is_active',1)->orderBy('sequence')->get(),
            'locations'  => Wa::model('location')->where('is_active',1)->orderBy('sequence')->get(),
        ]);
        parent::before();
    }
}
