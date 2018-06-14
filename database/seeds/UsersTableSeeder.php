<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $arr = [
        	'name' => 'trieu',
        	'password' => bcrypt(123456),
        	'email' => 'trieu@gmail.com'
        ];

        $arr1 = [
        	'name' => 'thinh',
        	'password' => bcrypt(123456),
        	'email' => 'thinh@gmail.com'
        ];

        $arr2 = [
        	'name' => 'tai',
        	'password' => bcrypt(123456),
        	'email' => 'tai@gmail.com'
        ];

        $arr3 = [
        	'name' => 'qui',
        	'password' => bcrypt(123456),
        	'email' => 'qui@gmail.com'
        ];

        User::create($arr);
    }
}
