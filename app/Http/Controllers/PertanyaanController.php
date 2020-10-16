<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){

//        dd($request->all());
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"] ,
                "isi" => $request["isi"] ,
//                "profil_id" => $request["profil"]
            ]
        );

        return redirect('/pertanyaan/create');
    }

    public function index(){
        $post = DB::table("pertanyaan")->get();
//        dd($post);

        return view('index',compact('post'));
    }

    public function show($id){

        $post = DB::table("pertanyaan")->where('id',$id)->first();

//        dd($post);
//        echo $id;
        return view('show',compact('post'));

    }

    public function edit($id){

        $post = DB::table("pertanyaan")->where('id',$id)->first();

//        dd($post);
//        echo $id;
        return view('edit',compact('post'));

    }

    public function update($id,Request $request){
        $query = DB::table('pertanyaan')
            ->where('id',$id)
            ->update([
               'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);

        return redirect('/pertanyaan/');
    }

    public function delete($id){
        $query = DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect('/pertanyaan');
    }
}
