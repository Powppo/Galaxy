<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(){
        return view('layout.index');
    }

    public function tam(){
        return view('feature.toolsAndMachine');
    }

    public function upload(){
        return view('feature.upload');
    }

    public function expoint(){
        return view('feature.exchangePoint');
    }

    public function contact(){
        return view('feature.contact');
    }
}
