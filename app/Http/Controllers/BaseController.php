<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Image;
class BaseController extends Controller
{
    /**
     * handle upload file image
    * @param  mixed $request
    * @param  string $name
    * @return string file name & directory
    */
    public function handleUploadFoto($request,$name,$destinationPath,$title, $resize = [])
    {
        $input = $request->all();
        $rules = array(
            $name => 'max:3000',
        );

        $validation = \Validator::make($input, $rules);

        if ($validation->fails()) {
            return false;
        }

        $extension       = $request->file($name)->getClientOriginalExtension();
        $originalName    = $request->file($name)->getClientOriginalName();
        $fileName        = $title.'.' . $extension;
        $upload          = $request->file($name)->move($destinationPath, $fileName);

        $imagePath = $destinationPath.'/'.$fileName;
        if(count($resize) > 0)
        {
            $img = Image::make($imagePath);
            $img->resize($resize[0], $resize[1]);
            $img->save($imagePath);
        }

        return $imagePath;
    }


}
