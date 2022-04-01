<?php
namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Routing\Controller;
use App\Models\Categories;

require_once('QueryController.php');

class QueryController extends Controller
{
    private $categories;
    private $products;

    public function __construct()
    {
        $this->categories = Categories::all();
        $this->products = Products::select('name')->join('categories', 'category.category_id', '=', 'category.id')->where('category.name', $category)->get();
    }

    public function getCategory()
    {
        return view('Header/header', ['categories' => $this->categories]);
    }
}
?>
