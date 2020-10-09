<?php

use Illuminate\Database\Seeder;
use App\User;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [

        	'name' => "Delfino",
        	'email' => "delfinoapp@gmail.com",
        	'password' => bcrypt("1234")
        ];

        if(User::where('email','=',$dados['email'])->count()){

        	$usuario = User::where('email','=',$dados['email'])->first();
        	$usuario->update($dados);

        	echo "Usuario Alterado!";
        }
        else{

        	User::create($dados);

        	echo "Usuario Criado!";
        }
    }
}
