<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'first_name' => 'Admin',
            'last_name' => 'User',
            'full_name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin@123'),
            'dob' => null,
            'status' => '1',
        ]);
    }
}
