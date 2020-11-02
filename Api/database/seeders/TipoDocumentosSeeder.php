<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Inscricao\tipo_documentos;

class TipoDocumentosSeeder extends Seeder
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
				"nome" => "Cópia autenticada da Certidão e o histórico",
				"para" => "Fundamental",
				//ddd
			],
			[
				"nome" => "Cópia do Bilhete/Passporte" ,
				"para" => "Fundamental",
				//ddd
			],
			[
				"nome" => "Registo Criminal actualizado" ,
				"para" => "Fundamental",
				//ddd
			],
			[
				"nome" => "Cópia do documento militar" ,
				"para" => "Fundamental",
				//ddd
			],
			[
				"nome" => "Ficha de inscrição (Fornecida pela ordem de enfermeiros)" ,
				"para" => "Fundamental",
				//ddd
			],
			[
				"nome" => "Cópias do nº de cartão de contribuinte" ,
				"para" => "Fundamental",
				//ddd
			],
			[
				"nome" => "Talão de pagamento de emuluntos" ,
				"para" => "Fundamental",
				//ddd
			],

			[
				"nome" => "Declaração de frequência" ,
				"para" => "Medio_Estudando",
				//MEMEMEME
			],
			[
				"nome" => "Cópia do Bilhete/Passporte" ,
				"para" => "Medio_Estudando",
				//MEMEMEME
			],
			[
				"nome" => "Ficha de inscrição (Fornecida pela ordem de enfermeiros)" ,
				"para" => "Medio_Estudando",
				//MEMEMEME
			],
			[
				"nome" => "Cópias do nº de cartão de contribuinte" ,
				"para" => "Medio_Estudando",
				//MEMEMEME
			],
			[
				"nome" => "Talão de pagamento de emuluntos" ,
				"para" => "Medio_Estudando",
				//MEMEMEME
			],

			[
				"nome" => "Cópia autenticada do certificado" ,
				"para" => "Medio",
				//mmmedio
			],
			[
				"nome" => "Cópia do Bilhete/Passporte" ,
				"para" => "Medio",
				//mmmedio
			],
			[
				"nome" => "Ficha de inscrição (Fornecida pela ordem de enfermeiros)" ,
				"para" => "Medio",
				//mmmedio
			],
			[
				"nome" => "Cópias do nº de cartão de contribuinte" ,
				"para" => "Medio",
				//mmmedio
			],
			[
				"nome" => "Talão de pagamento de emuluntos" ,
				"para" => "Medio",
				//mmmedio
			],
			[
				"nome" => "Cópia do documento militar" ,
				"para" => "Medio",
				//mmmedio
			],
			[
				"nome" => "Registo criminal" ,
				"para" => "Medio",
				//mmmedio
			],

			
			[
				"nome" => "Declaração de frequência" ,
				"para" => "Licenciatura_Estudando",
				//LELELE
			],
			[
				"nome" => "Cópia do Bilhete/Passporte" ,
				"para" => "Licenciatura_Estudando",
				//LELELE
			],
			[
				"nome" => "Ficha de inscrição (Fornecida pela ordem de enfermeiros)" ,
				"para" => "Licenciatura_Estudando",
				//LELELE
			],
			[
				"nome" => "Cópias do nº de cartão de contribuinte" ,
				"para" => "Licenciatura_Estudando",
				//LELELE
			],
			[
				"nome" => "Talão de pagamento de emuluntos" ,
				"para" => "Licenciatura_Estudando",
				//LELELE
			],
			[
				"nome" => "Cópia autenticada do certificado da  12ª classe" ,
				"para" => "Licenciatura_Estudando",
				//LELELE
			],


			[
				"nome" => "Cópia autenticada do diploma reconhecido pelo Ministério do Ensino superior de Angola" ,
				"para" => "Licenciatura",
				//LLLLLL
			],
			[
				"nome" => "Cópia autenticada histórico (Currículo escolar / certificado) com notas e carga horária" ,
				"para" => "Licenciatura",
				//LLLLLL
			],
			[
				"nome" => "Cópia do bilhete/passaporte" ,
				"para" => "Licenciatura",
				//LLLLLL
			],
			[
				"nome" => "Registo criminal" ,
				"para" => "Licenciatura",
				//LLLLLL
			],
			[
				"nome" => "Cópia do certificado da 12ª classe" ,
				"para" => "Licenciatura",
				//LLLLLL
			],
			[
				"nome" => "Cópia do documento militar" ,
				"para" => "Licenciatura",
				//LLLLLL
			],
			[
				"nome" => "Ficha de inscrição (Fornecida pela ordem de enfermeiros)" ,
				"para" => "Licenciatura_Estudando",
				//LLLLLL
			],
			[
				"nome" => "Cópias do nº de cartão de contribuinte" ,
				"para" => "Licenciatura",
				//LLLLLL
			],
			[
				"nome" => "Talão de pagamento de emuluntos" ,
				"para" => "Licenciatura",
				//LLLLLL
			],

		];
        foreach ($dados as $key => $value){
        	tipo_documentos::create($value);
        }
    }
}
