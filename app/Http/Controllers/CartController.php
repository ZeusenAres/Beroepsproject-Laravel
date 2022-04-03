<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

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
        return view('cart', [
            'categories' => $this->result,
            'content' => $productIds
            ]);
    }
}
