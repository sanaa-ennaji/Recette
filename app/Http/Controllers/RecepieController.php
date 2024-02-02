<?php

namespace App\Http\Controllers;

use App\Models\Recepie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecepieController extends Controller
{
    public function createrecepie(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'ingridient' => 'required',
            'instructions' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->validate([
            'title' => 'required',
            'ingridient' => 'required',
            'instructions' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data['title'] = strip_tags($data['title']);
        $data['ingridient'] = strip_tags($data['ingridient']);
        $data['instructions'] = strip_tags($data['instructions']);
        $data['user_id'] = auth()->id();

        // Handle image upload
        $data['image_path'] = $request->file('image_path')->store('public/images');
        dd($data);
        Recepie::create($data);
       
        return redirect('/user');
    }
    
}


