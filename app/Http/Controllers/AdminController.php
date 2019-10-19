<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Validator;
use File;

class AdminController extends Controller
{

    // untuk mengambil dan menampilkan data movie
    public function index()
    {
        $movie = Movie::all();
        return view('admin.index',compact('movie'));
    }

    // menampilkan halaman membuat movie
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        // memvalidasi inputan admin
        $validator = Validator::make($data, [
            'title' => 'required',
            'release' => 'date',
            'image' => 'required',
            'director' => 'required',
            'synopsis' => 'required',
        ]);

        // jika inputan tidak sesuai
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        // meyinpan data gambar ke dalam foler image
        $image = $request->image;
        $image_name = time()."_".$image->getClientOriginalName();
        $path = "/image/".$image_name;
        $data['image'] = $path;
        $image->move('image/',$image_name);

        // menyimpan data movie
        Movie::create($data);

        // notif bahwa penyimpanan berhasil
        $notif = [
            'alert-type' => "success",
            'message' => "input success"
        ];

        return back()->with($notif);

    }

    // pergi ke halaman edit data movie
    public function edit($id)
    {
        // mengambil data movie
        $movie = Movie::findorfail($id);

        return view('admin.edit',compact('movie'));
    }

    // mengupdate data movie
    public function update(Request $request, $id)
    {
        
        $data = $request->all();
        
        // memvalidasi inputan admin
        $validator = Validator::make($data, [
            'title' => 'required',
            'release' => 'date',
            'director' => 'required',
            'synopsis' => 'required',
        ]);

        // jika inputan tidak sesuai
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        // kondisi jika gambar di update
        if ($request->image) {
            $image = $request->image;
            $image_name = time()."_".$image->getClientOriginalName();
            $path = "/image/".$image_name;
            $data['image'] = $path;
            $image->move('image/',$image_name);
        }

        // mengupdate data movie
        $movie = Movie::findorfail($id);
        $movie->fill($data)->save();

        // notif bahwa mengupdate berhasil
        $notif = [
            'alert-type' => "success",
            'message' => "update success"
        ];

        return back()->with($notif);
    }

    // menghapus data movie
    public function destroy($id)
    {
        // mencari data yang akan di hapus
        $movie = Movie::findorfail($id);

        // menghapus data movie
        $movie->delete();

        // notif bahwa menghapus data berhasil
        $notif = [
            'alert-type' => "success",
            'message' => "delete success"
        ];

        return redirect('/admin')->with($notif);
    }
}
