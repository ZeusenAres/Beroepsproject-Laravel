<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $result = Categories::all();
        return view('Header/header', ['categories' => $result]);
    }
}
