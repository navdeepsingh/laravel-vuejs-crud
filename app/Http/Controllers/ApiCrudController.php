<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiCrudController extends Controller
{
    public function index()
    {
        return Crud::all();
    }

    public function store(Request $request)
    {
        return Crud::create($request->all());
    }

    public function show($id)
    {
        return Crud::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        Crud::findOrFail($id)->update($request->all());
        return Response::json($request->all()); //response()->json()
    }

    public function destroy($id)
    {
        return Crud::destroy($id);
    }
}
