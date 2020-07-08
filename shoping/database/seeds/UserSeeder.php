<?php

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
        DB::table('users')->insert([
           'role_id'=>'1',
           'name'=>'Nghia.Admin',
           'email'=>'nghia@gmail.com',
           'password'=>bcrypt('rootadmin')
        ]);

        DB::table('users')->insert([
           'role_id'=>'2',
           'name'=>'User.Admin',
           'email'=>'user@gmail.com',
           'password'=>bcrypt('rootadmin')
        ]);
    }
}
