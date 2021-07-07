@extends('master')
@section('content')
    <div class="card-body">
        <a href="{{route('stores.create')}}" class="btn btn-primary mb-2">Thêm mới</a>
        <form class="d-flex" style="float: right" action="{{route('stores.search')}}">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <table class="table">
            <thead>
            <tr class="table-success">
                <th scope="col">Mã số đại lý</th>
                <th scope="col">Tên đại lý</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Tên người quản lý</th>
                <th scope="col">Trạng thái</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($stores as $store)
                <tr>
                    <th>{{$store->code}}</th>
                    <td>{{$store->store_name}}</td>
                    <td>{{$store->phone}}</td>
                    <td>{{$store->email}}</td>
                    <td>{{$store->address}}</td>
                    <td>{{$store->manager_name}}</td>
                    <td>
                        @if($store->status == 0)
                            Đang họat động
                        @else
                            Không hoạt động
                        @endif
                    </td>
                    <td>
                        <a href="{{route('stores.edit',$store->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="{{route('stores.delete',$store->id)}}" onclick="return confirm('Are you sure ?!')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

