<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Admin::create([
        // 'name'=>"Vương Hữu Khánh",
        // 'email'=>"vuongkhanh40@gmail.com",
        // 'password'=>bcrypt('admin')
        // ]);
        Admin::create([
            'name'=>"Hoàng Tuấn Anh",
            'email'=>"vuongkhanh2307@gmail.com",
            'password'=>bcrypt('admin')
            ]);
        User::create([
            'name'=>"Hoàng Tuấn Anh",
            'email'=>"hta1@gmail.com",
            'password'=>bcrypt('admin')
            ]);
        Admin::create([
            'name'=>"VHK",
            'email'=>"hta2@gmail.com",
            'password'=>bcrypt('123')
            ]);
    }
}
