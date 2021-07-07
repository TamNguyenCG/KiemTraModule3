<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = new Store();
        $store->code = 101;
        $store->store_name = 'Hoàng Nguyên';
        $store->phone = '098733222';
        $store->email = 'hoangnguyen@gmail.com';
        $store->address = 'Cầu Giấy, Hà Nội';
        $store->manager_name = 'Lê Văn Hoàng';
        $store->save();

        $store = new Store();
        $store->code = 102;
        $store->store_name = 'Phúc Hoàng';
        $store->phone = '098733333';
        $store->email = 'phuchoang@gmail.com';
        $store->address = 'Long Biên, Hà Nội';
        $store->manager_name = 'Nguyễn Văn Phúc';
        $store->save();

        $store = new Store();
        $store->code = 103;
        $store->store_name = 'Đại Nguyên';
        $store->phone = '0923423522';
        $store->email = 'dainguyen@gmail.com';
        $store->address = 'Từ Liêm, Hà Nội';
        $store->manager_name = 'Lê Văn Đại';
        $store->save();

        $store = new Store();
        $store->code = 104;
        $store->store_name = 'Bắc Giang 1';
        $store->phone = '092352352';
        $store->email = 'bacgiang1@gmail.com';
        $store->address = 'Yên Dũng, Bắc Giang';
        $store->manager_name = 'Tống Hoàng Trường';
        $store->save();

        $store = new Store();
        $store->code = 105;
        $store->store_name = 'Bắc Giang 2';
        $store->phone = '099886745';
        $store->email = 'bacgiang2@gmail.com';
        $store->address = 'Lạng Giang, Bắc Giang';
        $store->manager_name = 'Nguyễn Đăng Khoa';
        $store->save();
    }
}
