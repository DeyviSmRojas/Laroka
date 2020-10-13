<?php

use App\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'role_id'=>1,
            'name' => 'Deyvi Salome',
            'dni'=>'46544528',
            'email'=>'deyvicoper@gmail.com',
            'password'=>
            Hash::make('12345678')
            
        ]);
    }
}
