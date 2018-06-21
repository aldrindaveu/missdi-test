<?php

use Illuminate\Database\Seeder;
use App\User;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'username'			=>	'pogi',
        	'password'			=>	Hash::make('daniel'),
        	'accountType'		=>	'2',
        ]);
    }
}
