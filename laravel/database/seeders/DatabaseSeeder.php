<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"skillsUser",
            "email"=>"sik@rvt.lv",
            "password"=>Hash::make('123')
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
