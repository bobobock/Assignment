<?php
namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController{

    public function detail(){
       
    }
    public function listDm(){
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        if(empty($keyword)){
            $category = Category::all();
        }else{
            $category = Category::where('name', 'like', "%$keyword%")->get();
        }
        return $this->render('category.list', compact('keyword', 'category'));
    }
    public function dmAddForm(){
        return $this->render('category.add-form');
    }
    
    public function addNewDm(){
        extract($_POST);
        $nameerr = "";
        if(strlen($name) == 0){
            $nameerr = "Không được để trống tên";
        }else if(Category::where('name', $name)->count() > 0){
            $nameerr = "Tên danh mục đã tồn tại";
        }
        if(strlen($nameerr . $priceerr) > 0){
            header('location: ' . BASE_URL . "them-dm?nameerr=$nameerr");die;
        }
        $model = new Category();
        $model->fill($_POST);
        $model->save();
        header("location:" . BASE_URL . 'danh-sach-dm');die;
    }

    public function removeDm($id){
        Category::destroy($id);
        header("location:" . BASE_URL . 'danh-sach-dm');die;
    }

    public function dmEditForm($id){
        $category = Category::find($id);
        return $this->render('category.edit-form', compact('category',));
    }

    public function saveEditDm($id){
        extract($_POST);
        $nameerr = "";
        if(strlen($name) == 0){
            $nameerr = "Không được để trống tên";
        }else if(Category::where('name', $name)->count() > 0){
            $nameerr = "Tên danh mục đã tồn tại";
        }
        if(strlen($nameerr . $priceerr) > 0){
            header('location: ' . BASE_URL . "sua-dm/$id?nameerr=$nameerr");die;
        }
        $category = Category::find($id);
        $category->fill($_POST);
        $category->save();
        header("location:" . BASE_URL . 'danh-sach-dm');die;
    }
}

?>