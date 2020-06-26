<?php

use App\User;
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
            'name'=>'Raul',
            'username'=>'UsuarioRaul',
            'email'=>'correo@raul.com',
            'password'=>bcrypt('contraraul')
        ]);

        factory(User::class,10)->create();

    }
}
