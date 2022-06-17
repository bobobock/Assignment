<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends BaseController{

    public function detail(){
       
    }
    public function listPro(){
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        if(empty($keyword)){
            $products = Product::all();
        }else{
            $products = Product::where('name', 'like', "%$keyword%")->get();
        }
        return $this->render('product.list', compact('keyword', 'products'));
    }
    public function proAddForm(){
        $categories= Category::all();
        return $this->render('product.add-form',compact('categories'));
    }
    
    public function addNewPro(){
        extract($_POST);
        $priceerr = "";
        $nameerr = "";
        if(strlen($price) == 0){
            $priceerr = "Không được để trống giá tiền";
        }
        if(strlen($name) == 0){
            $nameerr = "Không được để trống tên";
        }else if(Product::where('name', $name)->count() > 0){
            $nameerr = "Tên sản phẩm đã tồn tại";
        }
        if(strlen($nameerr . $priceerr) > 0){
            header('location: ' . BASE_URL . "them-sp?nameerr=$nameerr&priceerr=$priceerr");die;
        }

        $model = new Product();
        $model->fill($_POST);
        // xử lý ảnh
        $filename = "";
        $proImage = $_FILES['main_image'];
        if($proImage['size'] > 0){
            $filename = uniqid() . '-' . $proImage['name'];
            move_uploaded_file($proImage['tmp_name'], './public/uploads/proImages/' . $filename);
            $filename = "public/uploads/proImages/" . $filename;
        }
        $model->main_image = $filename;
        $model->save();
        header("location:" . BASE_URL . 'danh-sach-sp');die;
    }

    public function removePro($id){
        Product::destroy($id);
        header("location:" . BASE_URL . 'danh-sach-sp');die;
    }

    public function proEditForm($id){
        $categories= Category::all();
        $product = Product::find($id);
        return $this->render('product.edit-form', compact('product','categories'));
    }

    public function saveEditPro($id){
        extract($_POST);
        $priceerr = "";
        $nameerr = "";
        if(strlen($price) == 0){
            $priceerr = "Không được để trống giá tiền";
        }
        if(strlen($name) == 0){
            $nameerr = "Không được để trống tên";
        }
        if(strlen($nameerr . $priceerr) > 0){
            header('location: ' . BASE_URL . "sua-sp/$id?nameerr=$nameerr&priceerr=$priceerr");die;
        }

        $product = Product::find($id);
        $filename = $product->main_image;
        $proImage = $_FILES['main_image'];
        if($proImage['size'] > 0){
            $filename = uniqid() . '-' . $proImage['name'];
            move_uploaded_file($proImage['tmp_name'], './public/uploads/proImages/' . $filename);
            $filename = "public/uploads/proImages/" . $filename;
        }
        $product->main_image = $filename;
        $product->fill($_POST);
        $product->save();
        header("location:" . BASE_URL . 'danh-sach-sp');die;
    }
}

?>