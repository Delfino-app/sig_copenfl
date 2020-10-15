<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Candidato\paises;

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
