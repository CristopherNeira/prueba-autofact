<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestModel;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return TestModel::where('id', auth()->id())->get();
    }

    public function store(Request $request)
    {
        $test = new TestModel();
        $test->descripcion = $request->descripcion;
        $test->picked = $request->picked;
        $test->picked2 = $request->picked2;

        $test->user_id = auth()->id();
        //dd($test);
        $test->save();

        return $test;
    }

    
}
