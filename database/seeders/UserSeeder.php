<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        User::create([
            "name"=> "James Bankoto",
            "email"=> "admin@bankoto.com",
            'password' => bcrypt('pass12345'),
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
