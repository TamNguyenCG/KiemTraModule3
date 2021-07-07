@extends('master')
@section('content')
    <div class="card-body" style="width: 35%">
    <form action="{{route('stores.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Mã số đại lý</label>
            <input type="text" class="form-control" name="code">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên đại lý</label>
            <input type="text" class="form-control" name="store_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
            <textarea class="form-control" name="address" cols="20"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên người quản lý</label>
            <input type="text" class="form-control" name="manager_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Trạng thái</label>
            <select class="form-select" name="status">
                <option selected>Chọn</option>
                <option value="0">Đang hoạt động</option>
                <option value="1">Không hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Thêm</button>

    </form>
    </div>
@endsection
