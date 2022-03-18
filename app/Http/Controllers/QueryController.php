<?php
namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Routing\Controller;
use App\Models\Categories;

class QueryController extends Controller
{
    public function randomQuery()
    {
        $result = Products::all();
        return view('welcome', ['categories' => $result]);
    }
}
?>
