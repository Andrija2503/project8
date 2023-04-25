<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //$new_phone = DB::insert("insert into phones (name, brand, price) values ('Note 11', 'Samsung', '88000'), ('Mi', 'T8', 55000)");
         $all_phones = DB::select('SELECT * FROM phones');

         \Debugbar::info($all_phones);
                 
         return view('phones.index', ['all_phones'=>$all_phones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "brand"=>"required",
            "price"=>"required"
        ]);

        DB::insert("insert into phones (name, brand, price) values ('$request->name','$request->brand','$request->price')");

        return redirect('/phones');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $phone = DB::select("select * from phones where id = :id", ["id"=>$id])[0];

        \Debugbar::info($phone);
        return view('phones.edit', ['phone'=>$phone]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name"=>"required",
            "brand"=>"required",
            "price"=>"required"
        ]);

        DB::update("update phones set name= :name, brand= :brand, price= :price where id= :id",
        ["name"=>$request->name, "brand"=>$request->brand, "price"=>$request->price, "id"=>$id]);

        return redirect("phones");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::delete("delete from phones where id = ?",[$id]);

        return redirect('/phones');
    }
}
