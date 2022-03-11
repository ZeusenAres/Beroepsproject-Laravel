<?php
namespace app\Http\Controllers;
use Illuminate\Routing\Controller;
use app\Models\products;

class QueryController extends Controller
{
    public function randomQuery()
    {
        $query = products::all();
        return view('welcome', ['name' => $query]);
    }
}
?>
