@extends('layouts.main')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <form action="" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" name="keyword" value="{{$keyword}}">
                            <span class="input-group-append">
                              <button type="submit" class="btn btn-info btn-flat">Tìm!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="car-body">
            <table class="table table-hover" border="1">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Role</th>
                    <th>
                        <a href="tao-tk">Add</a>
                    </th>
                </thead>
                <tbody>
                    @foreach($users as $u)
                        <tr>
                            <td>{{$u->id}}</td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>
                                <img src="{{ BASE_URL . $u->avatar}}" width="70">
                            </td>
                            <td>{{$u->role_id}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="sua-tk/{{ $u->id }}">Sửa</a>
                                <a class="btn btn-sm btn-danger btn-remove" href="xoa-tk/{{ $u->id }}">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('page-script')
<script>
    $(document).ready(function(){
        $('.btn-remove').click(function(){
            alert('Xoá rồi nhá');
        });
    });
</script>
@endsection