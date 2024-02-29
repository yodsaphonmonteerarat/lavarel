<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Temporarily disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // Clear existing users
        DB::table('users')->truncate();
        DB::table('role_users')->truncate();
        // Reset auto-increment value
        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
        DB::statement('ALTER TABLE role_users AUTO_INCREMENT = 1');

        // Add sample users with roles
        $this->addUserWithRoles("Geralt", "geralt@gmail.com", "secret", [1, 2]);
        $this->addUserWithRoles("Yennefer", "yennefer@gmail.com", "secret", [2, 3, 4]);
        $this->addUserWithRoles("Triss", "triss@gmail.com", "secret", [3, 4, 5]);

        // Additional seed data

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

    protected function addUserWithRoles($name, $email, $password, $roleIds)
    {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        // Attach roles to the user
        $user->roles()->attach($roleIds);
    }
}

