<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // $user1 = User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => 'password'
        // ]);

        $role = Role::updateOrCreate([
            'name' => 'accountant',
        ]);

        $user = User::create([
            'name' => 'Accountant',
            'email' => 'accountant@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole($role);
    }
}
