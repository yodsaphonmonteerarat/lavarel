<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Roles data
        $roles = [
            ['id' => 1, 'name' => 'Head of Department', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Head of Project', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Researcher', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Marketing', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Sell', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Customer', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert roles into the roles table
        DB::table('roles')->insert($roles);
    }
}
