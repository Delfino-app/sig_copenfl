<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
        	'name' => Str::random(10),
        	'email' => "app@gmail.com",
        	'password' => Hash::make("password")
        ];
        if(User::where('email','=',$dados['email'])->count()){
        	$usuario = User::where('email','=',$dados['email'])->first();
        	$usuario->update($dados);
        }
        else{
        	User::create($dados);
        }
    }
}
