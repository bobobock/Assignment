@extends('layouts.main')
@section('title', "Tạo mới danh mục")
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới danh mục</h3>
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
                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-primary">Thêm danh mục</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection