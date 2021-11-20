<?php

use App\User;
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
            'name' => 'Pedro Raposo Felix de Sousa',
            'email' => 'pedro.raposo.dev@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Victor de Oliveira Martins Azevedo',
            'email' => 'vitinho69deliciaximbinha@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
