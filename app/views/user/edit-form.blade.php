@extends('layouts.main')
@section('title', "Tạo mới tài khoản")
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa thông tin tài khoản</h3>
            </div>
            <div class="card-body">
                <div class="col-md-6 offset-md-3">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?= $user->name ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="email" name="email" value="<?= $user->email ?>"  class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6 offset-3">
                                    <img src="{{BASE_URL . $user->avatar}}" class="img-thumbnail">
                                </div>
                            </div>
                            <label for="">Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone number</label>
                            <input type="text" name="phone_number" value="<?= $user->phone_number ?>"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Role: </label>
                            <select name="role_id" >
                                <?php foreach($roles as $r ):?>
                                    <option <?php if($user->role_id == $r->id) echo "selected" ?> value="<?= $r->id ?>"><?= $r->name?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Tạo tài khoản</button>
                        </div>
                    </form>
                </div>
                

            </div>
        </div>
    </div>
</div>

@endsection