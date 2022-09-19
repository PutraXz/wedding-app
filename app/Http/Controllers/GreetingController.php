<?php

namespace App\Http\Controllers;
use App\Models\Greeting;
use Illuminate\Http\Request;
use App\Models\Post;
class GreetingController extends Controller
{

    public function create(){
        return view('greetings');
    }

    public function store(Request $request){
        Greeting::insert([
            'name_url' => $request->post('name_url'),
            'from' => request('from'),
            'type' => request('type'),
        ]);

        return redirect()->back();
    }
}
