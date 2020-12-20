<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Admin01',
            'email' => 'admin01@charitykuy.com',
            'password' => bcrypt('qwerty123'),
            'roles' => 'admin_role'
        ]);

        User::create([
            'name' => 'Sally',
            'email' => 'sally@gmail.com',
            'password' => bcrypt('qwerty123')
        ]);

        User::create([
            'name' => 'Qsaaney',
            'email' => 'qsaaney@gmail.com',
            'password' => bcrypt('qwerty123')
        ]);

        User::create([
            'name' => 'maxim',
            'email' => 'maxim@gmail.com',
            'password' => bcrypt('qwerty123')
        ]);
    }
}
