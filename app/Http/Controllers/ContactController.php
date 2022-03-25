<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $result;

    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function getCategory()
    {
        return view('Header/header', ['categories' => $this->result]);
    }

    public function index()
    {
        return view('contact', ['categories' => $this->result]);
    }
}
