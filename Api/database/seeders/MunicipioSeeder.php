<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Candidato\municipios;

class MunicipioSeeder extends Seeder
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
			  "id"=> 1,
			  "nome"=> "Dembos",
			  "provincia_id"=> 1402
			],
			[
			  "id"=> 2,
			  "nome"=> "Ambriz",
			  "provincia_id"=> 1402
			],
			[
			  "id"=> 3,
			  "nome"=> "Dande",
			  "provincia_id"=> 1402
			],
			[
			  "id"=> 4,
			  "nome"=> "Nambuangongo",
			  "provincia_id"=> 1402
			],
			[
			  "id"=> 5,
			  "nome"=> "Pango Aluquém",
			  "provincia_id"=> 1402
			],
			[
			  "id"=> 6,
			  "nome"=> "Baía Farta",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 7,
			  "nome"=> "Benguela",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 8,
			  "nome"=> "Bocoio",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 9,
			  "nome"=> "Caimbambo",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 10,
			  "nome"=> "Chongoroi",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 11,
			  "nome"=> "Cubal",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 12,
			  "nome"=> "Ganda",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 13,
			  "nome"=> "Lobito",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 14,
			  "nome"=> "Catabola",
			  "provincia_id"=> 1404
			],
			[
			  "id"=> 15,
			  "nome"=> "Chinguar",
			  "provincia_id"=> 1404
			],
			[
			  "id"=> 16,
			  "nome"=> "Chitembo",
			  "provincia_id"=> 1404
			],
			[
			  "id"=> 17,
			  "nome"=> "Cuembo",
			  "provincia_id"=> 1404
			],
			[
			  "id"=> 18,
			  "nome"=> "Cunhinga",
			  "provincia_id"=> 1404
			],
			[
			  "id"=> 19,
			  "nome"=> "Kuito",
			  "provincia_id"=> 1404
			],
			[
			  "id"=> 20,
			  "nome"=> "Nharea",
			  "provincia_id"=> 1404
			],
			[
			  "id"=> 21,
			  "nome"=> "Buco-Zau",
			  "provincia_id"=> 1405
			],
			[
			  "id"=> 22,
			  "nome"=> "Cabinda",
			  "provincia_id"=> 1405
			],
			[
			  "id"=> 23,
			  "nome"=> "Cacongo",
			  "provincia_id"=> 1405
			],
			[
			  "id"=> 24,
			  "nome"=> "Cahama",
			  "provincia_id"=> 1407
			],
			[
			  "id"=> 25,
			  "nome"=> "Cuangar",
			  "provincia_id"=> 1406
			],
			[
			  "id"=> 26,
			  "nome"=> "Cuchi",
			  "provincia_id"=> 1406
			],
			[
			  "id"=> 27,
			  "nome"=> "Dirico",
			  "provincia_id"=> 1406
			],
			[
			  "id"=> 28,
			  "nome"=> "Longa",
			  "provincia_id"=> 1406
			],
			[
			  "id"=> 29,
			  "nome"=> "Mavinga",
			  "provincia_id"=> 1406
			],
			[
			  "id"=> 30,
			  "nome"=> "Menongue",
			  "provincia_id"=> 1406
			],
			[
			  "id"=> 31,
			  "nome"=> "Rivungo",
			  "provincia_id"=> 1406
			],
			[
			  "id"=> 32,
			  "nome"=> "Bailundo",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 33,
			  "nome"=> "Cuanhama",
			  "provincia_id"=> 1407
			],
			[
			  "id"=> 34,
			  "nome"=> "Curoca",
			  "provincia_id"=> 1407
			],
			[
			  "id"=> 35,
			  "nome"=> "Cuvelai",
			  "provincia_id"=> 1407
			],
			[
			  "id"=> 36,
			  "nome"=> "Namacunde",
			  "provincia_id"=> 1407
			],
			[
			  "id"=> 37,
			  "nome"=> "Ombadja",
			  "provincia_id"=> 1407
			],
			[
			  "id"=> 38,
			  "nome"=> "Catchiungo",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 39,
			  "nome"=> "Ekunha",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 40,
			  "nome"=> "Huambo",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 41,
			  "nome"=> "Londuimbale",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 42,
			  "nome"=> "Longonjo",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 43,
			  "nome"=> "Mungo",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 44,
			  "nome"=> "Tchicala-Tcholoanga",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 45,
			  "nome"=> "Tchindjenje",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 46,
			  "nome"=> "Ucuma",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 47,
			  "nome"=> "Ambaca",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 48,
			  "nome"=> "Caluquembe",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 49,
			  "nome"=> "Chiange",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 50,
			  "nome"=> "Chibia",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 51,
			  "nome"=> "Chicomba",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 52,
			  "nome"=> "Chipindo",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 53,
			  "nome"=> "Cacula",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 54,
			  "nome"=> "Humpata",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 55,
			  "nome"=> "Jamba",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 56,
			  "nome"=> "Lubango",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 57,
			  "nome"=> "Matala",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 58,
			  "nome"=> "Quilengues",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 59,
			  "nome"=> "Amboim",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 60,
			  "nome"=> "Banga",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 61,
			  "nome"=> "Bolongongo",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 62,
			  "nome"=> "Cambambe",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 63,
			  "nome"=> "Cazengo",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 64,
			  "nome"=> "Golungo Alto",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 65,
			  "nome"=> "Gonguembo",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 66,
			  "nome"=> "Lucala",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 67,
			  "nome"=> "Quiculungo",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 68,
			  "nome"=> "Samba Caju",
			  "provincia_id"=> 1410
			],
			[
			  "id"=> 69,
			  "nome"=> "Belas",
			  "provincia_id"=> 1394
			],
			[
			  "id"=> 70,
			  "nome"=> "Cassongue",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 71,
			  "nome"=> "Conda",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 72,
			  "nome"=> "Ebo",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 73,
			  "nome"=> "Libolo",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 74,
			  "nome"=> "Mussende",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 75,
			  "nome"=> "Porto Amboim",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 76,
			  "nome"=> "Quibala",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 77,
			  "nome"=> "Quilenda",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 78,
			  "nome"=> "Seles",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 79,
			  "nome"=> "Sumbe",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 80,
			  "nome"=> "Quiçama",
			  "provincia_id"=> 1394
			],
			[
			  "id"=> 81,
			  "nome"=> "Cacuaco",
			  "provincia_id"=> 1394
			],
			[
			  "id"=> 82,
			  "nome"=> "Cambulo",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 83,
			  "nome"=> "Cazenga",
			  "provincia_id"=> 1394
			],
			[
			  "id"=> 84,
			  "nome"=> "Icole e Bengo",
			  "provincia_id"=> 1394
			],
			[
			  "id"=> 85,
			  "nome"=> "Luanda",
			  "provincia_id"=> 1394
			],
			[
			  "id"=> 86,
			  "nome"=> "Viana",
			  "provincia_id"=> 1394
			],
			[
			  "id"=> 87,
			  "nome"=> "Cacolo",
			  "provincia_id"=> 1413
			],
			[
			  "id"=> 88,
			  "nome"=> "Capenda-Camulemba",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 89,
			  "nome"=> "Chitato",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 90,
			  "nome"=> "Cuilo",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 91,
			  "nome"=> "Lubalo",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 92,
			  "nome"=> "Lucapa",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 93,
			  "nome"=> "Xá-Muteba",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 94,
			  "nome"=> "Cacuso",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 95,
			  "nome"=> "Dala",
			  "provincia_id"=> 1413
			],
			[
			  "id"=> 96,
			  "nome"=> "Muconda",
			  "provincia_id"=> 1413
			],
			[
			  "id"=> 97,
			  "nome"=> "Saurimo",
			  "provincia_id"=> 1413
			],
			[
			  "id"=> 98,
			  "nome"=> "Alto Zambeze",
			  "provincia_id"=> 1415
			],
			[
			  "id"=> 99,
			  "nome"=> "Cambundi-Catembo",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 100,
			  "nome"=> "Cangandala",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 101,
			  "nome"=> "Caombo",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 102,
			  "nome"=> "Cuaba Nzogo",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 103,
			  "nome"=> "Cunda-Diaza",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 104,
			  "nome"=> "Luquembo",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 105,
			  "nome"=> "Malanje",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 106,
			  "nome"=> "Marimba",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 107,
			  "nome"=> "Bundas",
			  "provincia_id"=> 1415
			],
			[
			  "id"=> 108,
			  "nome"=> "Camanongue",
			  "provincia_id"=> 1415
			],
			[
			  "id"=> 109,
			  "nome"=> "Léua",
			  "provincia_id"=> 1415
			],
			[
			  "id"=> 110,
			  "nome"=> "Lucano",
			  "provincia_id"=> 1415
			],
			[
			  "id"=> 111,
			  "nome"=> "Luau",
			  "provincia_id"=> 1415
			],
			[
			  "id"=> 112,
			  "nome"=> "Moxico",
			  "provincia_id"=> 1415
			],
			[
			  "id"=> 113,
			  "nome"=> "Camuculo",
			  "provincia_id"=> 1416
			],
			[
			  "id"=> 114,
			  "nome"=> "Namibe",
			  "provincia_id"=> 1416
			],
			[
			  "id"=> 115,
			  "nome"=> "Tômbua",
			  "provincia_id"=> 1416
			],
			[
			  "id"=> 116,
			  "nome"=> "Virei",
			  "provincia_id"=> 1416
			],
			[
			  "id"=> 117,
			  "nome"=> "Bembe",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 118,
			  "nome"=> "Buengas",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 119,
			  "nome"=> "Bungo",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 120,
			  "nome"=> "Cuimba",
			  "provincia_id"=> 1418
			],
			[
			  "id"=> 121,
			  "nome"=> "Damba",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 122,
			  "nome"=> "Macocola",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 123,
			  "nome"=> "Mucaba",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 124,
			  "nome"=> "Negage",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 125,
			  "nome"=> "Puri",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 126,
			  "nome"=> "Quimbele",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 127,
			  "nome"=> "Quitexe",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 128,
			  "nome"=> "Sanza Pombo",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 129,
			  "nome"=> "Uíge",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 130,
			  "nome"=> "Noqui",
			  "provincia_id"=> 1418
			],
			[
			  "id"=> 131,
			  "nome"=> "Nzeto",
			  "provincia_id"=> 1418
			],
			[
			  "id"=> 132,
			  "nome"=> "Soyo",
			  "provincia_id"=> 1418
			],
			[
			  "id"=> 133,
			  "nome"=> "Tomboco",
			  "provincia_id"=> 1418
			],
			[
			  "id"=> 134,
			  "nome"=> "Bula Atumba",
			  "provincia_id"=> 1402
			],
			[
			  "id"=> 135,
			  "nome"=> "Andulo",
			  "provincia_id"=> 1404
			],
			[
			  "id"=> 136,
			  "nome"=> "Catumbela",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 137,
			  "nome"=> "Belize",
			  "provincia_id"=> 1405
			],
			[
			  "id"=> 138,
			  "nome"=> "Camacupa",
			  "provincia_id"=> 1404
			],
			[
			  "id"=> 139,
			  "nome"=> "Cuito Cuanavale",
			  "provincia_id"=> 1406
			],
			[
			  "id"=> 140,
			  "nome"=> "Caungula",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 141,
			  "nome"=> "Caála",
			  "provincia_id"=> 1408
			],
			[
			  "id"=> 142,
			  "nome"=> "Balombo",
			  "provincia_id"=> 1403
			],
			[
			  "id"=> 143,
			  "nome"=> "Calai",
			  "provincia_id"=> 1406
			],
			[
			  "id"=> 144,
			  "nome"=> "Cuango",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 145,
			  "nome"=> "Massango",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 146,
			  "nome"=> "Caculama-Mucari",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 147,
			  "nome"=> "Quirima",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 148,
			  "nome"=> "Calandula",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 149,
			  "nome"=> "Luchazes",
			  "provincia_id"=> 1415
			],
			[
			  "id"=> 150,
			  "nome"=> "Bibala",
			  "provincia_id"=> 1416
			],
			[
			  "id"=> 151,
			  "nome"=> "Songo",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 152,
			  "nome"=> "Maquela do Zombo",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 153,
			  "nome"=> "M'Banza Kongo",
			  "provincia_id"=> 1418
			],
			[
			  "id"=> 154,
			  "nome"=> "Caungo",
			  "provincia_id"=> 1412
			],
			[
			  "id"=> 155,
			  "nome"=> "Ambuíla",
			  "provincia_id"=> 1417
			],
			[
			  "id"=> 156,
			  "nome"=> "Cameia",
			  "provincia_id"=> 1415
			],
			[
			  "id"=> 157,
			  "nome"=> "Quela",
			  "provincia_id"=> 1414
			],
			[
			  "id"=> 158,
			  "nome"=> "Waku Kungo",
			  "provincia_id"=> 1411
			],
			[
			  "id"=> 159,
			  "nome"=> "Quipungo",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 160,
			  "nome"=> "Caconda",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 161,
			  "nome"=> "Kuvango",
			  "provincia_id"=> 1409
			],
			[
			  "id"=> 162,
			  "nome"=> "Alto Cauale",
			  "provincia_id"=> 1417
			],
			[
				"id"=> 163,
				"nome"=> "__OUTRO",
				"provincia_id"=> 1417
			  ]
		];
        foreach ($dados as $key => $value){
        	municipios::create($value);
        }
    }
}
