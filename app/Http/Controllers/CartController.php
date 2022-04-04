<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    private $result;

    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function index()
    {
        $productIds = request('prod_id');
        Session::push('cart', $productIds);
        return view('cart', [
            'categories' => $this->result
            ]);
    }
}
