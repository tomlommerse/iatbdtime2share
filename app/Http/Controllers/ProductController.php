<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index(){
        return view('product.index',[
            'product' => \App\Models\Product::all()
        ]);
    }

    public function show($id){
        return view('product.show',[
            'product' => \App\Models\Product::find($id)
        ]);
    }

    public function account(){
        return view('account.account',[
            'product' => \App\Models\Product::all()
        ]);
    }

    public function create(Request $request){
        return view('product.create', [
            'Cat' => \App\Models\Cat::all(),
        ]);
}

//uploaden nieuw product
    public function store(Request $request, \App\Models\Product $product){

        // dd($request->img);
        $owner_id = Auth::id();
        $product->product = $request->input('name');
        $product->catname = $request->input('cat');
        $product->description = $request->input('desc');
        $product->image = $request->file('img')->store('img', 'public');
        $product->image = 'storage/' . $product->image;
        $product->return_date = $request->input('return_date');
        $product->owner_id = $owner_id;


        // try{
            $product->save();
            return redirect('/');
        // }
        // catch(Exception $e){
        //     return redirect('/product/create');
        // }
        
    }

    public function lend(Request $request, $id){
        $product = \App\Models\Product::findOrFail($id);
        $product->status = 'lent';
        $product->borrower_id = auth()->id();
        $product->save();
    
        return redirect("/")->with('success', 'Product has been lent.');
    }

    public function return(Request $request, $id){
    $product = \App\Models\Product::findOrFail($id);
    $product->status = 'returned';
    $product->borrower_id = null;
    $product->save();

    return redirect("/")->with('success', 'Product has been returned.');
}


}
