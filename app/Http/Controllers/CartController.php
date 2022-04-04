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
        foreach(Session::get('cart') as $content)
        {
            $product = $this->products = DB::table('products')->where('id', '=', $content)->get();

            return view('cart', [
            'categories' => $this->result,
            'content' => $this->cart,
            'shoppingCart' => $product
            ]);
        }
    }
}
