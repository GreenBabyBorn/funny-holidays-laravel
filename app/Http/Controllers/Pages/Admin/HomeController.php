<?php

namespace App\Http\Controllers\Pages\Admin;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home', ['reviews' => Review::all()]);
    }
}
