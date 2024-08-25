<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function store(Request $request){
        $image = $request->file('file');
        $nameImage = Str::uuid() . "." . $image->getClientOriginalExtension();
        return response()->json(['image' => $image->getClientOriginalExtension()]);
    }
}
