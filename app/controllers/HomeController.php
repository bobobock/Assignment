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
        $this->render('userpage.home');
    }

    public function list_promp(){
            $products = Product::all();
            $categories = Category::all();
        return $this->render('userpage.list-all', compact('keyword', 'products','categories'));
    }

    public function detail_promp($id){
        $categories= Category::all();
        $product = Product::find($id);
        return $this->render('userpage.detail-pro', compact('product','categories'));
    }

    public function dmsp($id){
        $categories= Category::all();
        $products = Product::where('category_id', '=', "$id")->get();
        return $this->render('userpage.list-all', compact('products','categories'));
    }



   
}

?>