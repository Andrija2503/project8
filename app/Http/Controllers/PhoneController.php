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
                 
         return view('phones.index', ['all_phones'=>$all_phones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
