<?php


namespace App\Http\Controllers;

use App\Models\Recepie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RecepieController extends Controller
{
    public function createrecepie(Request $request)
    {
         Validator::make($request->all(), [
            'title' => 'required',
            'ingridient' => 'required',
            'instructions' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $data = [
            'title' => strip_tags($request->input('title')),
            'ingridient' => strip_tags($request->input('ingridient')),
            'instructions' => strip_tags($request->input('instructions')),
            'user_id' => auth()->id(),
        ];

        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $imageName = time() . '.' . $file->extension();
            $file->storeAs('public/images', $imageName);
            $data['image_path'] = $imageName;
        }

        Recepie::create($data);
        return redirect('/user');
    }

    public function showEdit(Recepie $recepie){
        if (auth()->user()->id !== $recepie['user_id'] ){
            return('/rece');
         }
            return   view('edit-recepie' , ['recepie' => $recepie]);
         }
    
    public function updatedRecepies(Recepie $recepie , Request $request){
       if (auth()->user()->id !== $recepie['user_id'] ){
       return('/user');
    }

     $data = $request->validate([
        'title' => 'required',
        'ingridient' => 'required', 
        'instructions' => 'required', 
        'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
     ]);

     $data = [
        'title' => strip_tags($request->input('title')),
        'ingridient' => strip_tags($request->input('ingridient')),
        'instructions' => strip_tags($request->input('instructions')),
        'user_id' => auth()->id(),
      ];

      if ($request->hasFile('image_path')) {
        $file = $request->file('image_path');
        $imageName = time() . '.' . $file->extension();
        $file->storeAs('public/images', $imageName);
        $data['image_path'] = $imageName;
    }

    $recepie->update($data);
    return redirect('/user');

    }
   
    public function deleteRecepie(Recepie $recepie){
        if (auth()->user()->id == $recepie['user_id'] ){
          $recepie->delete();
         } 
         return redirect('/user');
    }
      
public function search(Request $request)
{
    $query = $request->input('query');

    $recepies = Recepie::where('title', 'like', '%' . $query . '%')
        ->orWhere('ingridient', 'like', '%' . $query . '%')
        ->get();

    return view('recepies', ['recepies' => $recepies, 'query' => $query]);
}


}

