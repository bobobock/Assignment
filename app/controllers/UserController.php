<?php
namespace App\Controllers;
use App\Models\User;


class UserController extends BaseController{

    public function listUser(){
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        if(empty($keyword)){
            $users = User::all();
        }else{
            $users = User::where('name', 'like', "%$keyword%")->get();
        }
        return $this->render('user.list', compact('keyword', 'users'));
    }

    public function userAddForm(){
        return $this->render('user.add-form');
    }

    public function addNewUser(){
        $model = new User();
        $model->fill($_POST);
        // xử lý ảnh
        $filename = "";
        $avatarFile = $_FILES['avatar'];
        if($avatarFile['size'] > 0){
            $filename = uniqid() . '-' . $avatarFile['name'];
            move_uploaded_file($avatarFile['tmp_name'], './public/uploads/avatars/' . $filename);
            $filename = "public/uploads/avatars/" . $filename;
        }
        // mã hóa mật khẩu
        $model->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $model->avatar = $filename;
        $model->save();
        header("location:" . BASE_URL . 'danh-sach-tk');die;
    }

    public function removeUser($id){
        User::destroy($id);
        header("location:" . BASE_URL . 'danh-sach-tk');die;
    }

    public function userEditForm($id){
        $user = User::find($id);
        return $this->render('user.edit-form', compact('user',));
    }

    public function saveEditUser($id){
        $user = User::find($id);
        $filename = $user->avatar;
        $avatarFile = $_FILES['avatar'];
        if($avatarFile['size'] > 0){
            $filename = uniqid() . '-' . $avatarFile['name'];
            move_uploaded_file($avatarFile['tmp_name'], './public/uploads/avatars/' . $filename);
            $filename = "public/uploads/avatars/" . $filename;
        }
        $user->avatar = $filename;
        $user->fill($_POST);
        $user->save();
        header("location:" . BASE_URL . 'danh-sach-tk');die;
    }


}

?>