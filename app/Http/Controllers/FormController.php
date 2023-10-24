<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\jenis_barang;
use App\Models\kondisi_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    public function add(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=> 'required',
            'jenis'=> 'required',
            'kondisi'=> 'required',
            'keterangan'=> 'required',
            'kecacatan'=> 'nullable',
            'jumlah' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $imgName = "";
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->extension();
            $imgName = date('Y-m-d-H-i-s') . "." . $extension;
            $request->file('image')->storeAs(
                'public/images',
                $imgName
            );
        }
        $request['image'] = $imgName;

        Form::create([
            'name'=> $request->name,
            'jenis'=> $request->jenis,
            'kondisi'=> $request->kondisi,
            'keterangan'=> $request->keterangan,
            'kecacatan' => $request->kecacatan,
            'jumlah' => $request->jumlah,
            'image'=> $imgName,
        ]);
        
        return Redirect::route('form')->with('status', 'Product added');
    }

    public function get(){
        return view ('get_product')->with([
            'products' => Form::all()
        ]);
    }

    public function form(){
        return view ('form')->with([
            'kondisi' => kondisi_barang::all(),
            'jenis'=> jenis_barang::all()
        ]);
    }

    public function edit($id){
        $form = Form::find($id);
        return view ('edit', ["product"=> $form]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'jenis'=> 'required',
            'kondisi'=> 'required',
            'keterangan'=> 'required',
            'kecacatan'=> 'nullable',
            'jumlah' => 'required|numeric'
        ]);

        $product = Form::find($id);
        $product -> update( $request->all() );
        return redirect('/getProduct');
    }

    public function delete($id){
        $product = Form::find($id);
        return view('delete', ['product'=> $product]);
    }

    public function destroy($id)
    {
        $product = Form::find($id);
        $product->delete();
        return redirect('/getProduct');
    }
}
