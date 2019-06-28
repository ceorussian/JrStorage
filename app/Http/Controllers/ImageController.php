<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function image(Request $request){
    	$file = $request->image;
       $namefile = $file->getClientOriginalName();

    	\Storage::put('uploads', $file);
    	return 1;
    }
}
