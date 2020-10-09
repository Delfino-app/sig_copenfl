<?php

use Illuminate\Database\Seeder;
use App\Provincia;

class ProvinciaSeeder extends Seeder
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
        		'nome' => 'Bengo',
        		'pais_id' => 1 
        	],
        	[
        		'nome' => 'Benguela',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Bie',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Cabinda',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Cuando Cubango',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Cuanza Norte',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Cuanza Sul',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Cunene',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Huambo',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Huila',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Luanda',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Lunda Norte',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Lunda Sul',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Malange',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Moxico',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Namibe',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Uige',
        		'pais_id' => 1
        	],
        	[
        		'nome' => 'Zaire',
        		'pais_id' => 1
        	],
        ];

        foreach ($dados as $key => $value) {
        	
        	Provincia::create($value);

        	echo "Provincia ".$value['nome']." Criada!<br>";
        }
    }
}
