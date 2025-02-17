<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        $usuario = new User();
        $usuario->name = 'admin';
        $usuario->email = 'admin@example.com';
        $usuario->password = bcrypt('admin');
        $usuario->save();
    }
}

