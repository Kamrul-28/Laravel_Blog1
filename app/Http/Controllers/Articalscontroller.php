<?php

namespace App\Http\Controllers;
use App\artical;

use Illuminate\Http\Request;

class Articalscontroller extends Controller
{
    public function show($id)
    {
        $articals=artical::all();
        return view('articals.show',
        ['articals'=>$articals]
    
    
    );
        
    }

    public function create()
    {
        return view('articals.create');
    }


    public function store()
    {
        $articals = new artical();

        $articals->title=request('title');
        $articals->excerpt=request('excerpt');
        $articals->body=request('body');

        $articals->save();

        return redirect('/');
       
    }
}
