<?php

namespace App\Http\Controllers\Pages;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['reviews' => Review::all()]);
    }
}