<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example: Insert a default user
        DB::table('users')->insert([
            'name' => 'Default User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
