<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Shop::orderBy('id','desc')->paginate('3');
        return view('shop')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.createShop');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 
                'name' => 'required',
                'description' => 'required | max:300'
            ]
        );

        $product = new Shop;
        $product->name = $request->name;
        $product->description = $request->description;

        if($request->has('image')){
            $fileWithExt = $request->file('image')->getClientOriginalName();
            $ext = $request->file('image')->getClientOriginalExtension();
            $fileName = pathinfo($fileWithExt ,PATHINFO_FILENAME);
            $filenameToSave = $fileName.'_'.time().'.'.$ext;
            $product->image = $filenameToSave;
            $request->file('image')->storeAs('public/shop', $filenameToSave);
        }

        $product->save();

        return redirect(route('shop.index'))->with('success', $product->name.' added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('shop.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('shop.editShop')->with('product', Shop::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Shop::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;

        if($request->hasFile('image')){

            $image = $product->image;
            if($image != 'shop/shop.png'){
                Storage::delete('public/'.$image);
            }

            $fileWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $fileNameToSave = $filename.'_'.time().'.'.$ext;

            $path = $request->file('image')->storeAs('public/shop', $fileNameToSave);
            $product->image = $fileNameToSave;
        }

        $product->update();

        return redirect(route('shop.index'))->with('success', $product->name.' has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Shop::findOrFail($id);
        if($product->image != 'shop/shop.png'){
            Storage::delete('public/'.$product->image);
        }
        Shop::findOrFail($id)->delete();
        return redirect(route('shop.index'))->with('success', $product->name.' has been deleted successfully.');
    }
}
