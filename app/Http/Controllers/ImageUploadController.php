<?php

namespace App\Http\Controllers;

use JD\Cloudder\Facades\Cloudder;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function home()
   {
       return view('home');
   }
}
