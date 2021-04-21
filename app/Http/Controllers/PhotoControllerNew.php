<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoControllerNew extends Controller
{

    public function index()
    {
       return  "i am index";
    }


    public function create()
    {
        return  "i Create";
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return  "i Show";
    }


    public function edit($id)
    {
        return  "i am edit";
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
