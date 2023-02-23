<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $admin = new User();
        $admin->name = "zubayer";
        $admin->email = "zubayer@test.com";
        $admin->password = bcrypt("12345678");

        $admin->save();

    }
}
