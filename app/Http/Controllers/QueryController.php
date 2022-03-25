<?php
namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Routing\Controller;
use App\Models\Categories;

require_once('QueryController.php');

class QueryController extends Controller
{
    private $result;

    public function __construct()
    {
        $this->result = Categories::all();
    }

    public function getCategory()
    {
        return view('Header/header', ['categories' => $this->result]);
    }
}
?>
