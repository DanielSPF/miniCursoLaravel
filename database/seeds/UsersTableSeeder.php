<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'=> 'Admin', 
            'last_name' => 'Laravel', 
            'email'     => 'admin@laravel.com', 
            'password'  =>  bcrypt('secret'),
            'address'   => 'Unimontes', 
            'is_admin'  =>  true,
            'city'      => 'Montes Claros',
            'state'     => 'MG', 
        ]);
    }
}
