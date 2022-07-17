@extends('layouts.main')
@section('title', "Sửa danh mục")
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa thông tin danh mục</h3>
            </div>
            <div class="card-body">
                <div class="col-md-6 offset-md-3">
                    <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="<?= $category->name ?>">
                        @if(isset($_GET['nameerr']))
                            <span class="text-danger">{{$_GET['nameerr']}}</span>
                        @endif
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-primary">Sửa danh mục</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection