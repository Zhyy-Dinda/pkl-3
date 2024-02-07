<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaControlle extends Controller
{
    public function index()
    {
        $data = berita::latest("created_at", "desc")->Paginate(5);
        return view("admin.berita", ["data" => $data]);
    }

    public function create()
    {
        return view("admin.berita.create");
    }


    // 
    public function store(Request $request)
    {
        // validasi form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:5',
            'info' => 'required|min:5',
            'content' => 'required|min:20',
        ]);

        // updload image
        $image = $request->file('image');
        $image->storeAs('public/berita', $image->hashName());

        // create berita
        berita::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'info'      => $request->info,
            'content'   => $request->content,
        ]);
        return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Di simpan']);
    }



    public function edit(berita $data)
    {
        return view('admin.berita.edit', compact('data'));
    }


    public function update(Request $request, berita $data)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'info'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/berita/', $image->hashName());

            //delete old image
            Storage::delete('public/berita/' . $data->image);

            //update post with new image
            $data->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'info'      => $request->info,
                'content'   => $request->content
            ]);
        } else {

            //update post without image
            $data->update([
                'title'     => $request->title,
                'info'     => $request->info,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
