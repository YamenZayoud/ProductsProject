<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User([
            'name' =>'admin',
            'type' =>'admin',
            'email'=>'admin@admin.com',
            'password' => Hash::make('00000000'),
        ]);

        $admin->save();
    }
}
