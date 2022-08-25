<?php
namespace oltrematica\budget\Controllers;

use oltrematica\budget\Controllers;
use Illuminate\Http\Request;
use oltrematica\budget\Models\Budget;

class TestController
{
    public function index(){
        $bud = Budget::all();
        return view('budget::budget', compact('bud'));
    }
}
