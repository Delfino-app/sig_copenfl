<?php

use Illuminate\Database\Seeder;
use App\Models\Inscricao\paises;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $dados = [
        	[
        		'nome' => 'Angola',
			],
			[
        		'nome' => '_OUTRO',
        	],        	
        ];
        foreach ($dados as $key => $value) {
        	paises::create($value);
        }
    }
}
