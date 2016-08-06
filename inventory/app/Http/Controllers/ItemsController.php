<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $items = [
            [
                "image"=>"images/product-img1.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$839.93"
            ],
            [
                "image"=>"images/product-img2.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$800.93"
            ],
            [
                "image"=>"images/product-img3.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$900.93"
            ],
            [
                "image"=>"images/product-img4.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$1000.93"
            ],
        ];
        //
        return view('items.index')->with('items',$items);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  
        $items = [
            [
                "image"=>"images/product-img1.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$839.93"
            ],
            [
                "image"=>"images/product-img2.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$800.93"
            ],
            [
                "image"=>"images/product-img3.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$900.93"
            ],
            [
                "image"=>"images/product-img4.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$1000.93"
            ],
        ];
        return view('items.show')->with('item',$items[$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
