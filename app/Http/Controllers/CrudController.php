<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud = Crud::all();

        return View('crud.index', compact('crud'));
    }

    // store, update, destroy functions will work through JS Api

}
