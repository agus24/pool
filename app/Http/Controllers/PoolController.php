<?php

namespace App\Http\Controllers;

use App\Models\Pool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoolController extends Controller
{
    public function index()
    {
        return view('pool');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "choice" => "required",
        ]);

        Pool::create($request->except("_token"));
        return redirect("/");
    }
}
