<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateSuperAdmin extends Command
{
    protected $signature = 'make:superadmin 
                            {email : Email del superadmin}
                            {name=SuperAdmin : Nombre del superadmin}';

    protected $description = 'Crear un superadmin manualmente';

    public function handle()
    {
        $password = $this->secret('Ingresa password del superadmin');

        User::updateOrCreate(
            ['email' => $this->argument('email')],
            [
                'name' => $this->argument('name'),
                'password' => Hash::make($password),
                'role' => 'superadmin',
                'email_verified_at' => now(),
            ]
        );

        $this->info('Superadmin creado correctamente.');
    }
}
