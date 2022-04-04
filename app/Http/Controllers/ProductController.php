<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    private $result;

    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function index()
    {
        $id = request('prod_id');
        $product = $this->products = DB::table('products')->where('id', '=', $id)->get();
        return view('product', [
            'categories' => $this->result,
            'id' => $id,
            'product' => $product
            ]);
    }
}
