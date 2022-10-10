<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class InsertUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(['name' => '田中一郎','email' => 'tanaka@example.com','password' => 'pass']);
        User::insert(['name' => '山中三郎','email' => 'yamanaka@example.com','password' => 'pass']);
        User::insert(['name' => '高橋花子','email' => 'takahashi@example.com','password' => 'pass']);
    }
}
