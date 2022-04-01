<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class CategoryController extends Controller
{
    private $result;
    private $products;

    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function index()
    {
        $id = request('id');
        $products = $this->products = Products::all()->find($id);
        return view('category', [
            'categories' => $this->result,
            'id' => $id,
            'products' => $products
            ]);
    }
}
