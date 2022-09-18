<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Multipleuploads;
use Illuminate\Http\Request;

class MultipleuploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name_urls = Post::all();
        return view('multipleuploads', compact('name_urls'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasfile('filename')) {
            $files = [];
            foreach ($request->file('filename') as $file) {
                if ($file->isValid()) {
                    $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                    $file->move(public_path('images/data-images'), $filename);
                    $files[] = [
                        'filename' => $file,
                        'name_url' => $request->post('name_url'),
                        'filename' => $filename,
                    ];
                }
            }
            Multipleuploads::insert($files);
            echo'Success';
        }else{
            echo'Gagal';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Multipleuploads  $multipleuploads
     * @return \Illuminate\Http\Response
     */
    public function show(Multipleuploads $multipleuploads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Multipleuploads  $multipleuploads
     * @return \Illuminate\Http\Response
     */
    public function edit(Multipleuploads $multipleuploads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Multipleuploads  $multipleuploads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Multipleuploads $multipleuploads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Multipleuploads  $multipleuploads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multipleuploads $multipleuploads)
    {
        //
    }
}
