<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends BaseController{

    public function adminLayout(){
        $this->render('layouts.main');
    }

    public function index(){
        $this-> render('layouts.userpage');
    }

    public function list_promp(){
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        if(empty($keyword)){
            $products = Product::all();
            $categories = Category::all();
        }else{
            $products = Product::where('name', 'like', "%$keyword%")->get();
        }
        return $this->render('userpage.list-all', compact('keyword', 'products','categories'));
    }

    public function detail_promp($id){
        $categories= Category::all();
        $product = Product::find($id);
        return $this->render('userpage.detail-pro', compact('product','categories'));
    }



   
}

?>