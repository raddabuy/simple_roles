<?php

namespace Database\Seeders;

use App\Constants\RoleConst;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Kseniya',
                    'email' => 'kseniya@test.ru',
                    'password' => Hash::make('password'),
                    'role_id' => RoleConst::USER
                ],
                [
                    'name' => 'Konstantin',
                    'email' => 'konstantin@test.ru',
                    'password' => Hash::make('password'),
                    'role_id' => RoleConst::USER
                ],
                [
                    'name' => 'Admin',
                    'email' => 'admin@test.ru',
                    'password' => Hash::make('password'),
                    'role_id' => RoleConst::ADMIN
                ],
                [
                    'name' => 'publisher',
                    'email' => 'publisher@test.ru',
                    'password' => Hash::make('password'),
                    'role_id' => RoleConst::PUBLISHER
                ],
            ],
        );
    }
}
