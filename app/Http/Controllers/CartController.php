<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    private $result;

    private $cart;

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
