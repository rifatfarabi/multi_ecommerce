<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "password" => \Hash::make("password"),
                "role"=> "admin"
            ],
            [
                "name" => "Customer",
                "email" => "customer@gmail.com",
                "password" => \Hash::make("password"),
                "role"=> "customer"
            ]
            ];
            User::insert($users);
    }
}
