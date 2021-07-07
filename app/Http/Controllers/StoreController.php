<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('stores',compact('stores'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request): RedirectResponse
    {
        $store = new Store();
        $store->code = $request->input('code');
        $store->store_name = $request->input('store_name');
        $store->phone = $request->input('phone');
        $store->email = $request->input('email');
        $store->address = $request->input('address');
        $store->manager_name = $request->input('manager_name');
        $store->status = $request->input('status');
        $store->save();
//        toastr()->success('Thêm mới đại lý thành công');
        return redirect()->route('stores.list');
    }

    public function edit($id)
    {
        $store = Store::findOrFail($id);
        return view('edit',compact('store'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $store = Store::findOrFail($id);
        $store->code = $request->input('code');
        $store->store_name = $request->input('store_name');
        $store->phone = $request->input('phone');
        $store->email = $request->input('email');
        $store->address = $request->input('address');
        $store->manager_name = $request->input('manager_name');
        $store->status = $request->input('status');
        $store->save();
//        toastr()->success('Sửa đại lý thành công');
        return redirect()->route('stores.list');
    }

    public function delete($id): RedirectResponse
    {
        $store = Store::findOrFail($id);
        $store->delete();
//        toastr()->success('Xóa đại lý thành công');
        return redirect()->route('stores.list');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        if (empty($search)) {
//            toastr()->warning('notfound', "Please insert search keyword");
            return redirect()->route('stores.list');
        }
        $stores = Store::where('store_name','LIKE','%'.$search.'%')->get();
        return view('stores',compact('stores'));
    }
}
