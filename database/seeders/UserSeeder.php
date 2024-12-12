<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=> 'Ezequiel Muniz',
                'username'=> 'EMflix',
                'email'=> 'ezequiel@startescola.com.br',
                'role'=> 'admin',
                'status'=> 'active',
                'password'=> bcrypt('password')

            ],
            [
                'name'=> 'Vendedor vendor',
                'username'=> 'vendor',
                'email'=> 'vendedor@startescola.com.br',
                'role'=> 'vendor',
                'status'=> 'active',
                'password'=> bcrypt('password')

            ],
            [
                'name'=> 'Cliente user',
                'username'=> 'vendor',
                'email'=> 'cliente@startescola.com.br',
                'role'=> 'user',
                'status'=> 'active',
                'password'=> bcrypt('password')

            ]
        ]);
    }
}
