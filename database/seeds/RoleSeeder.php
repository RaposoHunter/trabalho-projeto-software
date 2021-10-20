<?php

use Silber\Bouncer\Bouncer;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bouncer::role()->create([
        //     'name' => 'superadmin',
        //     'title' => 'Desenvolvedor'
        // ]);
        
        // Bouncer::role()->create([
        //     'name' => 'admin',
        //     'title' => 'Administrador da Empresa'
        // ]);

        // Bouncer::role()->create([
        //     'name' => 'atendente',
        //     'title' => 'Atendente da Empresa'
        // ]);

        // Bouncer::allow('superadmin')->everything();
        // Bouncer::allow('admin')->everything();
        // Bouncer::allow('atendente')->everything();
        // Bouncer::forbid('atendente')->to('crud_users');
    }
}
