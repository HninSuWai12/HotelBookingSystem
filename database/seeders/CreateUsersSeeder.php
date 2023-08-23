<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@gmail.com',
               'role'=>'admin',
               'password'=> Hash::make('admin123'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@gmail.com',
               'role'=> 'manager',
               'password'=> bcrypt('manager123'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'role'=>'user',
               'password'=> bcrypt('user123'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
    }

