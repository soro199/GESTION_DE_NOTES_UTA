<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"Admin",
            'email'=>"admin@gmail.com",
            'password'=>Hash::make('12345678'),
            'prenoms'=>"Admin",
            'dateN'=>"2000/01/01",
            'tel'=>"0130488238",
            'adresse'=>"Azaguié",
            'id_role'=>1,

        ]);
    }
}
