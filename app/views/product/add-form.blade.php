@extends('layouts.main')
@section('title', "Tạo mới sản phẩm")
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới sản phẩm</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                        @if(isset($_GET['nameerr']))
                            <span class="text-danger">{{$_GET['nameerr']}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Category id</label>
                        <select name="category_id" class="form-control" >
                            <?php foreach($categories as $c ):?>
                                <option value="<?= $c->id ?>"><?= $c->name?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Main Image</label>
                        <input type="file" name="main_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Price </label>
                        <input type="number" name="price" class="form-control">
                        @if(isset($_GET['priceerr']))
                            <span class="text-danger">{{$_GET['priceerr']}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Detail </label>
                        <input type="text" name="detail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">promotion</label>
                        <input type="text" name="promotion" class="form-control">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-primary">Thêm sản phẩm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection