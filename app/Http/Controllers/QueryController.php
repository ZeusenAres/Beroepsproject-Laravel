<?php
namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Routing\Controller;
use App\Models\Categories;

class QueryController extends Controller
{
    public function randomQuery()
    {
        $result = Categories::all();
        return view('Header/header', ['categories' => $result]);
    }
}
?>
