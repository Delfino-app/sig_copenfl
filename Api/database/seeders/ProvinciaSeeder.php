<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Candidato\provincias;

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
			  "id"=> 248,
			  "nome"=> "Aveiro",
			  "pais_id"=> 183
			],
			[
			  "id"=> 680,
			  "nome"=> "Архангай",
			  "pais_id"=> 146
			],
			[
			  "id"=> 212,
			  "nome"=> "Hokkaido",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1146,
			  "nome"=> "Amazonas",
			  "pais_id"=> 173
			],
			[
			  "id"=> 1171,
			  "nome"=> "Tarapacá",
			  "pais_id"=> 46
			],
			[
			  "id"=> 963,
			  "nome"=> "Adana",
			  "pais_id"=> 224
			],
			[
			  "id"=> 249,
			  "nome"=> "Beja",
			  "pais_id"=> 183
			],
			[
			  "id"=> 681,
			  "nome"=> "Баян-Өлгий",
			  "pais_id"=> 146
			],
			[
			  "id"=> 964,
			  "nome"=> "Adıyaman",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1172,
			  "nome"=> "Antofagasta",
			  "pais_id"=> 46
			],
			[
			  "id"=> 1147,
			  "nome"=> "Áncash",
			  "pais_id"=> 173
			],
			[
			  "id"=> 203,
			  "nome"=> "Aomori",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1173,
			  "nome"=> "Atacama",
			  "pais_id"=> 46
			],
			[
			  "id"=> 965,
			  "nome"=> "Afyon",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1148,
			  "nome"=> "Apurímac",
			  "pais_id"=> 173
			],
			[
			  "id"=> 250,
			  "nome"=> "Braga",
			  "pais_id"=> 183
			],
			[
			  "id"=> 216,
			  "nome"=> "Iwate",
			  "pais_id"=> 113
			],
			[
			  "id"=> 682,
			  "nome"=> "Баянхонгор",
			  "pais_id"=> 146
			],
			[
			  "id"=> 1174,
			  "nome"=> "Coquimbo",
			  "pais_id"=> 46
			],
			[
			  "id"=> 966,
			  "nome"=> "Ağrı",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1149,
			  "nome"=> "Arequipa",
			  "pais_id"=> 173
			],
			[
			  "id"=> 683,
			  "nome"=> "Булган",
			  "pais_id"=> 146
			],
			[
			  "id"=> 224,
			  "nome"=> "Miyagi",
			  "pais_id"=> 113
			],
			[
			  "id"=> 251,
			  "nome"=> "Bragança",
			  "pais_id"=> 183
			],
			[
			  "id"=> 202,
			  "nome"=> "Akita",
			  "pais_id"=> 113
			],
			[
			  "id"=> 252,
			  "nome"=> "Castelo Branco",
			  "pais_id"=> 183
			],
			[
			  "id"=> 1150,
			  "nome"=> "Ayacucho",
			  "pais_id"=> 173
			],
			[
			  "id"=> 1175,
			  "nome"=> "Valparaíso",
			  "pais_id"=> 46
			],
			[
			  "id"=> 967,
			  "nome"=> "Amasya",
			  "pais_id"=> 224
			],
			[
			  "id"=> 684,
			  "nome"=> "Говь-Алтай",
			  "pais_id"=> 146
			],
			[
			  "id"=> 968,
			  "nome"=> "Ankara",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1151,
			  "nome"=> "Cajamarca",
			  "pais_id"=> 173
			],
			[
			  "id"=> 1176,
			  "nome"=> "del Libertador Gral. Bernardo O'Higgins",
			  "pais_id"=> 46
			],
			[
			  "id"=> 245,
			  "nome"=> "Yamagata",
			  "pais_id"=> 113
			],
			[
			  "id"=> 253,
			  "nome"=> "Coimbra",
			  "pais_id"=> 183
			],
			[
			  "id"=> 685,
			  "nome"=> "Дорноговь",
			  "pais_id"=> 146
			],
			[
			  "id"=> 208,
			  "nome"=> "Fukushima",
			  "pais_id"=> 113
			],
			[
			  "id"=> 686,
			  "nome"=> "Дорнод",
			  "pais_id"=> 146
			],
			[
			  "id"=> 969,
			  "nome"=> "Antalya",
			  "pais_id"=> 224
			],
			[
			  "id"=> 254,
			  "nome"=> "Évora",
			  "pais_id"=> 183
			],
			[
			  "id"=> 1152,
			  "nome"=> "Callao",
			  "pais_id"=> 173
			],
			[
			  "id"=> 1177,
			  "nome"=> "del Maule",
			  "pais_id"=> 46
			],
			[
			  "id"=> 1153,
			  "nome"=> "Cusco",
			  "pais_id"=> 173
			],
			[
			  "id"=> 687,
			  "nome"=> "Дундговь",
			  "pais_id"=> 146
			],
			[
			  "id"=> 214,
			  "nome"=> "Ibaraki",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1178,
			  "nome"=> "del BíoBio",
			  "pais_id"=> 46
			],
			[
			  "id"=> 970,
			  "nome"=> "Artvin",
			  "pais_id"=> 224
			],
			[
			  "id"=> 255,
			  "nome"=> "Faro",
			  "pais_id"=> 183
			],
			[
			  "id"=> 239,
			  "nome"=> "Tochigi",
			  "pais_id"=> 113
			],
			[
			  "id"=> 256,
			  "nome"=> "Guarda",
			  "pais_id"=> 183
			],
			[
			  "id"=> 1154,
			  "nome"=> "Huancavelica",
			  "pais_id"=> 173
			],
			[
			  "id"=> 971,
			  "nome"=> "Aydın",
			  "pais_id"=> 224
			],
			[
			  "id"=> 688,
			  "nome"=> "Завхан",
			  "pais_id"=> 146
			],
			[
			  "id"=> 1179,
			  "nome"=> "de la Araucania",
			  "pais_id"=> 46
			],
			[
			  "id"=> 689,
			  "nome"=> "Өвөрхангай",
			  "pais_id"=> 146
			],
			[
			  "id"=> 210,
			  "nome"=> "Gunma",
			  "pais_id"=> 113
			],
			[
			  "id"=> 257,
			  "nome"=> "Leiria",
			  "pais_id"=> 183
			],
			[
			  "id"=> 972,
			  "nome"=> "Balıkesir",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1155,
			  "nome"=> "Huánuco",
			  "pais_id"=> 173
			],
			[
			  "id"=> 1180,
			  "nome"=> "de los Lagos",
			  "pais_id"=> 46
			],
			[
			  "id"=> 973,
			  "nome"=> "Bilecik",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1156,
			  "nome"=> "Ica",
			  "pais_id"=> 173
			],
			[
			  "id"=> 690,
			  "nome"=> "Өмнөговь",
			  "pais_id"=> 146
			],
			[
			  "id"=> 235,
			  "nome"=> "Saitama",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1181,
			  "nome"=> "Aysén del Gral. Carlos Ibáñez del Campo",
			  "pais_id"=> 46
			],
			[
			  "id"=> 258,
			  "nome"=> "Lisboa",
			  "pais_id"=> 183
			],
			[
			  "id"=> 1182,
			  "nome"=> "Magallanes",
			  "pais_id"=> 46
			],
			[
			  "id"=> 974,
			  "nome"=> "Bingöl",
			  "pais_id"=> 224
			],
			[
			  "id"=> 204,
			  "nome"=> "Chiba",
			  "pais_id"=> 113
			],
			[
			  "id"=> 691,
			  "nome"=> "Сүхбаатар",
			  "pais_id"=> 146
			],
			[
			  "id"=> 259,
			  "nome"=> "Portalegre",
			  "pais_id"=> 183
			],
			[
			  "id"=> 1157,
			  "nome"=> "Junin",
			  "pais_id"=> 173
			],
			[
			  "id"=> 260,
			  "nome"=> "Porto",
			  "pais_id"=> 183
			],
			[
			  "id"=> 1183,
			  "nome"=> "Metropolitana",
			  "pais_id"=> 46
			],
			[
			  "id"=> 1158,
			  "nome"=> "La Libertad",
			  "pais_id"=> 173
			],
			[
			  "id"=> 243,
			  "nome"=> "Tokyo",
			  "pais_id"=> 113
			],
			[
			  "id"=> 975,
			  "nome"=> "Bitlis",
			  "pais_id"=> 224
			],
			[
			  "id"=> 692,
			  "nome"=> "Сэлэнгэ",
			  "pais_id"=> 146
			],
			[
			  "id"=> 693,
			  "nome"=> "Төв",
			  "pais_id"=> 146
			],
			[
			  "id"=> 261,
			  "nome"=> "Santarém",
			  "pais_id"=> 183
			],
			[
			  "id"=> 1159,
			  "nome"=> "Lambayeque",
			  "pais_id"=> 173
			],
			[
			  "id"=> 976,
			  "nome"=> "Bolu",
			  "pais_id"=> 224
			],
			[
			  "id"=> 219,
			  "nome"=> "Kanagawa",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1184,
			  "nome"=> "Los Ríos",
			  "pais_id"=> 46
			],
			[
			  "id"=> 229,
			  "nome"=> "Niigata",
			  "pais_id"=> 113
			],
			[
			  "id"=> 262,
			  "nome"=> "Setúbal",
			  "pais_id"=> 183
			],
			[
			  "id"=> 694,
			  "nome"=> "Увс",
			  "pais_id"=> 146
			],
			[
			  "id"=> 1185,
			  "nome"=> "Arica y Parinacota",
			  "pais_id"=> 46
			],
			[
			  "id"=> 977,
			  "nome"=> "Burdur",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1160,
			  "nome"=> "Lima",
			  "pais_id"=> 173
			],
			[
			  "id"=> 978,
			  "nome"=> "Bursa",
			  "pais_id"=> 224
			],
			[
			  "id"=> 242,
			  "nome"=> "Toyama",
			  "pais_id"=> 113
			],
			[
			  "id"=> 695,
			  "nome"=> "Ховд",
			  "pais_id"=> 146
			],
			[
			  "id"=> 1186,
			  "nome"=> "del Ñuble",
			  "pais_id"=> 46
			],
			[
			  "id"=> 1161,
			  "nome"=> "Loreto",
			  "pais_id"=> 173
			],
			[
			  "id"=> 263,
			  "nome"=> "Viana do Castelo",
			  "pais_id"=> 183
			],
			[
			  "id"=> 696,
			  "nome"=> "Хөвсгөл",
			  "pais_id"=> 146
			],
			[
			  "id"=> 264,
			  "nome"=> "Vila Real",
			  "pais_id"=> 183
			],
			[
			  "id"=> 215,
			  "nome"=> "Ishikawa",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1162,
			  "nome"=> "Madre de Dios",
			  "pais_id"=> 173
			],
			[
			  "id"=> 979,
			  "nome"=> "Çanakkale",
			  "pais_id"=> 224
			],
			[
			  "id"=> 206,
			  "nome"=> "Fukui",
			  "pais_id"=> 113
			],
			[
			  "id"=> 697,
			  "nome"=> "Хэнтий",
			  "pais_id"=> 146
			],
			[
			  "id"=> 265,
			  "nome"=> "Viseu",
			  "pais_id"=> 183
			],
			[
			  "id"=> 1163,
			  "nome"=> "Moquegua",
			  "pais_id"=> 173
			],
			[
			  "id"=> 980,
			  "nome"=> "Çankırı",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1164,
			  "nome"=> "Pasco",
			  "pais_id"=> 173
			],
			[
			  "id"=> 247,
			  "nome"=> "Yamanashi",
			  "pais_id"=> 113
			],
			[
			  "id"=> 981,
			  "nome"=> "Çorum",
			  "pais_id"=> 224
			],
			[
			  "id"=> 698,
			  "nome"=> "Дархан-Уул",
			  "pais_id"=> 146
			],
			[
			  "id"=> 982,
			  "nome"=> "Denizli",
			  "pais_id"=> 224
			],
			[
			  "id"=> 266,
			  "nome"=> "Açores",
			  "pais_id"=> 183
			],
			[
			  "id"=> 1165,
			  "nome"=> "Piura",
			  "pais_id"=> 173
			],
			[
			  "id"=> 226,
			  "nome"=> "Nagano",
			  "pais_id"=> 113
			],
			[
			  "id"=> 699,
			  "nome"=> "Орхон",
			  "pais_id"=> 146
			],
			[
			  "id"=> 1166,
			  "nome"=> "Puno",
			  "pais_id"=> 173
			],
			[
			  "id"=> 209,
			  "nome"=> "Gifu",
			  "pais_id"=> 113
			],
			[
			  "id"=> 983,
			  "nome"=> "Diyarbakır",
			  "pais_id"=> 224
			],
			[
			  "id"=> 238,
			  "nome"=> "Shizuoka",
			  "pais_id"=> 113
			],
			[
			  "id"=> 984,
			  "nome"=> "Edirne",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1167,
			  "nome"=> "San Martín",
			  "pais_id"=> 173
			],
			[
			  "id"=> 1168,
			  "nome"=> "Tacna",
			  "pais_id"=> 173
			],
			[
			  "id"=> 201,
			  "nome"=> "Aichi",
			  "pais_id"=> 113
			],
			[
			  "id"=> 985,
			  "nome"=> "Elazığ",
			  "pais_id"=> 224
			],
			[
			  "id"=> 700,
			  "nome"=> "УБ - Хан Уул",
			  "pais_id"=> 146
			],
			[
			  "id"=> 701,
			  "nome"=> "УБ - Баянзүрх",
			  "pais_id"=> 146
			],
			[
			  "id"=> 223,
			  "nome"=> "Mie",
			  "pais_id"=> 113
			],
			[
			  "id"=> 986,
			  "nome"=> "Erzincan",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1169,
			  "nome"=> "Tumbes",
			  "pais_id"=> 173
			],
			[
			  "id"=> 702,
			  "nome"=> "УБ - Сүхбаатар",
			  "pais_id"=> 146
			],
			[
			  "id"=> 987,
			  "nome"=> "Erzurum",
			  "pais_id"=> 224
			],
			[
			  "id"=> 236,
			  "nome"=> "Shiga",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1170,
			  "nome"=> "Ucayali",
			  "pais_id"=> 173
			],
			[
			  "id"=> 988,
			  "nome"=> "Eskişehir",
			  "pais_id"=> 224
			],
			[
			  "id"=> 222,
			  "nome"=> "Kyoto",
			  "pais_id"=> 113
			],
			[
			  "id"=> 703,
			  "nome"=> "УБ - Баянгол",
			  "pais_id"=> 146
			],
			[
			  "id"=> 989,
			  "nome"=> "Gaziantep",
			  "pais_id"=> 224
			],
			[
			  "id"=> 704,
			  "nome"=> "УБ - Багануур",
			  "pais_id"=> 146
			],
			[
			  "id"=> 233,
			  "nome"=> "Osaka",
			  "pais_id"=> 113
			],
			[
			  "id"=> 990,
			  "nome"=> "Giresun",
			  "pais_id"=> 224
			],
			[
			  "id"=> 213,
			  "nome"=> "Hyogo",
			  "pais_id"=> 113
			],
			[
			  "id"=> 705,
			  "nome"=> "УБ - Багахангай",
			  "pais_id"=> 146
			],
			[
			  "id"=> 706,
			  "nome"=> "УБ - Налайх",
			  "pais_id"=> 146
			],
			[
			  "id"=> 991,
			  "nome"=> "Gümüşhane",
			  "pais_id"=> 224
			],
			[
			  "id"=> 228,
			  "nome"=> "Nara",
			  "pais_id"=> 113
			],
			[
			  "id"=> 267,
			  "nome"=> "Madeira",
			  "pais_id"=> 183
			],
			[
			  "id"=> 992,
			  "nome"=> "Hakkari",
			  "pais_id"=> 224
			],
			[
			  "id"=> 244,
			  "nome"=> "Wakayama",
			  "pais_id"=> 113
			],
			[
			  "id"=> 993,
			  "nome"=> "Hatay",
			  "pais_id"=> 224
			],
			[
			  "id"=> 241,
			  "nome"=> "Tottori",
			  "pais_id"=> 113
			],
			[
			  "id"=> 237,
			  "nome"=> "Shimane",
			  "pais_id"=> 113
			],
			[
			  "id"=> 707,
			  "nome"=> "Говьсүмбэр",
			  "pais_id"=> 146
			],
			[
			  "id"=> 994,
			  "nome"=> "Isparta",
			  "pais_id"=> 224
			],
			[
			  "id"=> 231,
			  "nome"=> "Okayama",
			  "pais_id"=> 113
			],
			[
			  "id"=> 995,
			  "nome"=> "İçel",
			  "pais_id"=> 224
			],
			[
			  "id"=> 211,
			  "nome"=> "Hiroshima",
			  "pais_id"=> 113
			],
			[
			  "id"=> 708,
			  "nome"=> "УБ - Сонгино Хайрхан",
			  "pais_id"=> 146
			],
			[
			  "id"=> 996,
			  "nome"=> "İstanbul",
			  "pais_id"=> 224
			],
			[
			  "id"=> 246,
			  "nome"=> "Yamaguchi",
			  "pais_id"=> 113
			],
			[
			  "id"=> 997,
			  "nome"=> "İzmir",
			  "pais_id"=> 224
			],
			[
			  "id"=> 709,
			  "nome"=> "УБ - Чингэлтэй",
			  "pais_id"=> 146
			],
			[
			  "id"=> 998,
			  "nome"=> "Kars",
			  "pais_id"=> 224
			],
			[
			  "id"=> 240,
			  "nome"=> "Tokushima",
			  "pais_id"=> 113
			],
			[
			  "id"=> 999,
			  "nome"=> "Kastamonu",
			  "pais_id"=> 224
			],
			[
			  "id"=> 217,
			  "nome"=> "Kagawa",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1000,
			  "nome"=> "Kayseri",
			  "pais_id"=> 224
			],
			[
			  "id"=> 205,
			  "nome"=> "Ehime",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1001,
			  "nome"=> "Kırklareli",
			  "pais_id"=> 224
			],
			[
			  "id"=> 220,
			  "nome"=> "Kochi",
			  "pais_id"=> 113
			],
			[
			  "id"=> 207,
			  "nome"=> "Fukuoka",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1002,
			  "nome"=> "Kırşehir",
			  "pais_id"=> 224
			],
			[
			  "id"=> 234,
			  "nome"=> "Saga",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1003,
			  "nome"=> "Kocaeli",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1004,
			  "nome"=> "Konya",
			  "pais_id"=> 224
			],
			[
			  "id"=> 227,
			  "nome"=> "Nagasaki",
			  "pais_id"=> 113
			],
			[
			  "id"=> 221,
			  "nome"=> "Kumamoto",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1005,
			  "nome"=> "Kütahya",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1006,
			  "nome"=> "Malatya",
			  "pais_id"=> 224
			],
			[
			  "id"=> 230,
			  "nome"=> "Oita",
			  "pais_id"=> 113
			],
			[
			  "id"=> 225,
			  "nome"=> "Miyazaki",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1007,
			  "nome"=> "Manisa",
			  "pais_id"=> 224
			],
			[
			  "id"=> 218,
			  "nome"=> "Kagoshima",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1008,
			  "nome"=> "K.maraş",
			  "pais_id"=> 224
			],
			[
			  "id"=> 232,
			  "nome"=> "Okinawa",
			  "pais_id"=> 113
			],
			[
			  "id"=> 1009,
			  "nome"=> "Mardin",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1010,
			  "nome"=> "Muğla",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1011,
			  "nome"=> "Muş",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1012,
			  "nome"=> "Nevşehir",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1013,
			  "nome"=> "Niğde",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1014,
			  "nome"=> "Ordu",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1015,
			  "nome"=> "Rize",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1016,
			  "nome"=> "Sakarya",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1017,
			  "nome"=> "Samsun",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1018,
			  "nome"=> "Siirt",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1019,
			  "nome"=> "Sinop",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1020,
			  "nome"=> "Sivas",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1021,
			  "nome"=> "Tekirdağ",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1022,
			  "nome"=> "Tokat",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1023,
			  "nome"=> "Trabzon",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1024,
			  "nome"=> "Tunceli",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1025,
			  "nome"=> "Şanlıurfa",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1026,
			  "nome"=> "Uşak",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1027,
			  "nome"=> "Van",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1028,
			  "nome"=> "Yozgat",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1029,
			  "nome"=> "Zonguldak",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1030,
			  "nome"=> "Aksaray",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1031,
			  "nome"=> "Bayburt",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1032,
			  "nome"=> "Karaman",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1033,
			  "nome"=> "Kırıkkale",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1034,
			  "nome"=> "Batman",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1035,
			  "nome"=> "Şırnak",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1036,
			  "nome"=> "Bartın",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1037,
			  "nome"=> "Ardahan",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1038,
			  "nome"=> "Iğdır",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1039,
			  "nome"=> "Yalova",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1040,
			  "nome"=> "Karabük",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1041,
			  "nome"=> "Kilis",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1042,
			  "nome"=> "Osmaniye",
			  "pais_id"=> 224
			],
			[
			  "id"=> 1043,
			  "nome"=> "Düzce",
			  "pais_id"=> 224
			],
			[
			  "id"=> 569,
			  "nome"=> "Salta",
			  "pais_id"=> 10
			],
			[
			  "id"=> 420,
			  "nome"=> "Alacant (Alicante)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 710,
			  "nome"=> "Aberdeenshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 711,
			  "nome"=> "Angus",
			  "pais_id"=> 231
			],
			[
			  "id"=> 712,
			  "nome"=> "Argyll",
			  "pais_id"=> 231
			],
			[
			  "id"=> 713,
			  "nome"=> "Avon",
			  "pais_id"=> 231
			],
			[
			  "id"=> 68,
			  "nome"=> "Armed Forces Americas",
			  "pais_id"=> 233
			],
			[
			  "id"=> 905,
			  "nome"=> "Addis Ababa",
			  "pais_id"=> 69
			],
			[
			  "id"=> 533,
			  "nome"=> "Alberta",
			  "pais_id"=> 38
			],
			[
			  "id"=> 419,
			  "nome"=> "Albacete",
			  "pais_id"=> 68
			],
			[
			  "id"=> 829,
			  "nome"=> "Alba",
			  "pais_id"=> 188
			],
			[
			  "id"=> 613,
			  "nome"=> "Aceh",
			  "pais_id"=> 100
			],
			[
			  "id"=> 71,
			  "nome"=> "Acre",
			  "pais_id"=> 31
			],
			[
			  "id"=> 1,
			  "nome"=> "Australian Capital Territory",
			  "pais_id"=> 13
			],
			[
			  "id"=> 98,
			  "nome"=> "Republic of Adygeya",
			  "pais_id"=> 190
			],
			[
			  "id"=> 69,
			  "nome"=> "Armed Forces Europe",
			  "pais_id"=> 233
			],
			[
			  "id"=> 906,
			  "nome"=> "Afar",
			  "pais_id"=> 69
			],
			[
			  "id"=> 830,
			  "nome"=> "Argeș",
			  "pais_id"=> 188
			],
			[
			  "id"=> 306,
			  "nome"=> "Agrigento",
			  "pais_id"=> 109
			],
			[
			  "id"=> 485,
			  "nome"=> "Aguascalientes",
			  "pais_id"=> 156
			],
			[
			  "id"=> 943,
			  "nome"=> "Armagh",
			  "pais_id"=> 101
			],
			[
			  "id"=> 547,
			  "nome"=> "Ajman",
			  "pais_id"=> 2
			],
			[
			  "id"=> 10,
			  "nome"=> "Alaska",
			  "pais_id"=> 233
			],
			[
			  "id"=> 307,
			  "nome"=> "Alessandria",
			  "pais_id"=> 109
			],
			[
			  "id"=> 72,
			  "nome"=> "Alagoas",
			  "pais_id"=> 31
			],
			[
			  "id"=> 421,
			  "nome"=> "Almería",
			  "pais_id"=> 68
			],
			[
			  "id"=> 9,
			  "nome"=> "Alabama",
			  "pais_id"=> 233
			],
			[
			  "id"=> 99,
			  "nome"=> "Altai Republic",
			  "pais_id"=> 190
			],
			[
			  "id"=> 100,
			  "nome"=> "Altai Krai",
			  "pais_id"=> 190
			],
			[
			  "id"=> 273,
			  "nome"=> "Alexandria",
			  "pais_id"=> 65
			],
			[
			  "id"=> 942,
			  "nome"=> "Antrim",
			  "pais_id"=> 101
			],
			[
			  "id"=> 907,
			  "nome"=> "Amhara",
			  "pais_id"=> 69
			],
			[
			  "id"=> 74,
			  "nome"=> "Amazonas",
			  "pais_id"=> 31
			],
			[
			  "id"=> 675,
			  "nome"=> "Amazonas",
			  "pais_id"=> 49
			],
			[
			  "id"=> 101,
			  "nome"=> "Amur Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 308,
			  "nome"=> "Ancona",
			  "pais_id"=> 109
			],
			[
			  "id"=> 577,
			  "nome"=> "Andaman and Nicobar",
			  "pais_id"=> 104
			],
			[
			  "id"=> 1424,
			  "nome"=> "Andorra",
			  "pais_id"=> 1
			],
			[
			  "id"=> 647,
			  "nome"=> "Antioquia",
			  "pais_id"=> 49
			],
			[
			  "id"=> 309,
			  "nome"=> "Aosta",
			  "pais_id"=> 109
			],
			[
			  "id"=> 578,
			  "nome"=> "Andhra Pradesh",
			  "pais_id"=> 104
			],
			[
			  "id"=> 70,
			  "nome"=> "Armed Forces Pacific",
			  "pais_id"=> 233
			],
			[
			  "id"=> 73,
			  "nome"=> "Amapá",
			  "pais_id"=> 31
			],
			[
			  "id"=> 311,
			  "nome"=> "Ascoli Piceno",
			  "pais_id"=> 109
			],
			[
			  "id"=> 350,
			  "nome"=> "L'Aquila",
			  "pais_id"=> 109
			],
			[
			  "id"=> 310,
			  "nome"=> "Arezzo",
			  "pais_id"=> 109
			],
			[
			  "id"=> 579,
			  "nome"=> "Arunachal Pradesh",
			  "pais_id"=> 104
			],
			[
			  "id"=> 831,
			  "nome"=> "Arad",
			  "pais_id"=> 188
			],
			[
			  "id"=> 12,
			  "nome"=> "Arkansas",
			  "pais_id"=> 233
			],
			[
			  "id"=> 671,
			  "nome"=> "Arauca",
			  "pais_id"=> 49
			],
			[
			  "id"=> 102,
			  "nome"=> "Arkhangelsk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 60,
			  "nome"=> "American Samoa",
			  "pais_id"=> 233
			],
			[
			  "id"=> 580,
			  "nome"=> "Assam",
			  "pais_id"=> 104
			],
			[
			  "id"=> 285,
			  "nome"=> "Aswan",
			  "pais_id"=> 65
			],
			[
			  "id"=> 286,
			  "nome"=> "Asyut",
			  "pais_id"=> 65
			],
			[
			  "id"=> 103,
			  "nome"=> "Astrakhan Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 312,
			  "nome"=> "Asti",
			  "pais_id"=> 109
			],
			[
			  "id"=> 648,
			  "nome"=> "Atlántico",
			  "pais_id"=> 49
			],
			[
			  "id"=> 517,
			  "nome"=> "Auckland",
			  "pais_id"=> 170
			],
			[
			  "id"=> 313,
			  "nome"=> "Avellino",
			  "pais_id"=> 109
			],
			[
			  "id"=> 423,
			  "nome"=> "Ávila",
			  "pais_id"=> 68
			],
			[
			  "id"=> 179,
			  "nome"=> "Alta Verapaz",
			  "pais_id"=> 90
			],
			[
			  "id"=> 11,
			  "nome"=> "Arizona",
			  "pais_id"=> 233
			],
			[
			  "id"=> 546,
			  "nome"=> "Abu Dhabi",
			  "pais_id"=> 2
			],
			[
			  "id"=> 1115,
			  "nome"=> "Azua",
			  "pais_id"=> 61
			],
			[
			  "id"=> 1496,
			  "nome"=> "Apia",
			  "pais_id"=> 244
			],
			[
			  "id"=> 1507,
			  "nome"=> "Asmara",
			  "pais_id"=> 67
			],
			[
			  "id"=> 1488,
			  "nome"=> "Avarua",
			  "pais_id"=> 45
			],
			[
			  "id"=> 554,
			  "nome"=> "Buenos Aires",
			  "pais_id"=> 10
			],
			[
			  "id"=> 426,
			  "nome"=> "Barcelona",
			  "pais_id"=> 68
			],
			[
			  "id"=> 832,
			  "nome"=> "București",
			  "pais_id"=> 188
			],
			[
			  "id"=> 714,
			  "nome"=> "Ayrshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 715,
			  "nome"=> "Banffshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 716,
			  "nome"=> "Bedfordshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 717,
			  "nome"=> "Berkshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 718,
			  "nome"=> "Berwickshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 75,
			  "nome"=> "Bahia",
			  "pais_id"=> 31
			],
			[
			  "id"=> 614,
			  "nome"=> "Bali",
			  "pais_id"=> 100
			],
			[
			  "id"=> 314,
			  "nome"=> "Bari",
			  "pais_id"=> 109
			],
			[
			  "id"=> 424,
			  "nome"=> "Badajoz",
			  "pais_id"=> 68
			],
			[
			  "id"=> 104,
			  "nome"=> "Republic of Bashkortostan",
			  "pais_id"=> 190
			],
			[
			  "id"=> 269,
			  "nome"=> "Red Sea",
			  "pais_id"=> 65
			],
			[
			  "id"=> 1116,
			  "nome"=> "Bahoruco",
			  "pais_id"=> 61
			],
			[
			  "id"=> 1117,
			  "nome"=> "Barahona",
			  "pais_id"=> 61
			],
			[
			  "id"=> 615,
			  "nome"=> "Bangka Belitung",
			  "pais_id"=> 100
			],
			[
			  "id"=> 833,
			  "nome"=> "Bacău",
			  "pais_id"=> 188
			],
			[
			  "id"=> 534,
			  "nome"=> "British Columbia",
			  "pais_id"=> 38
			],
			[
			  "id"=> 486,
			  "nome"=> "Baja California",
			  "pais_id"=> 156
			],
			[
			  "id"=> 487,
			  "nome"=> "Baja California Sur",
			  "pais_id"=> 156
			],
			[
			  "id"=> 617,
			  "nome"=> "Bengkulu",
			  "pais_id"=> 100
			],
			[
			  "id"=> 1403,
			  "nome"=> "Benguela",
			  "pais_id"=> 8
			],
			[
			  "id"=> 105,
			  "nome"=> "Belgorod Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1402,
			  "nome"=> "Bengo",
			  "pais_id"=> 8
			],
			[
			  "id"=> 318,
			  "nome"=> "Bergamo",
			  "pais_id"=> 109
			],
			[
			  "id"=> 270,
			  "nome"=> "Beheira",
			  "pais_id"=> 65
			],
			[
			  "id"=> 834,
			  "nome"=> "Bihor",
			  "pais_id"=> 188
			],
			[
			  "id"=> 466,
			  "nome"=> "Bizkaia (Vizcaya)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 319,
			  "nome"=> "Biella",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1404,
			  "nome"=> "Bié",
			  "pais_id"=> 8
			],
			[
			  "id"=> 316,
			  "nome"=> "Belluno",
			  "pais_id"=> 109
			],
			[
			  "id"=> 835,
			  "nome"=> "Bistrița-Năsăud",
			  "pais_id"=> 188
			],
			[
			  "id"=> 317,
			  "nome"=> "Benevento",
			  "pais_id"=> 109
			],
			[
			  "id"=> 908,
			  "nome"=> "Benishangul-Gumuz",
			  "pais_id"=> 69
			],
			[
			  "id"=> 287,
			  "nome"=> "Beni Suef",
			  "pais_id"=> 65
			],
			[
			  "id"=> 320,
			  "nome"=> "Bologna",
			  "pais_id"=> 109
			],
			[
			  "id"=> 650,
			  "nome"=> "Bolívar",
			  "pais_id"=> 49
			],
			[
			  "id"=> 518,
			  "nome"=> "Bay of Plenty",
			  "pais_id"=> 170
			],
			[
			  "id"=> 651,
			  "nome"=> "Boyacá",
			  "pais_id"=> 49
			],
			[
			  "id"=> 960,
			  "nome"=> "Bonaire",
			  "pais_id"=> 165
			],
			[
			  "id"=> 961,
			  "nome"=> "Saba",
			  "pais_id"=> 165
			],
			[
			  "id"=> 962,
			  "nome"=> "Sint Eustatius",
			  "pais_id"=> 165
			],
			[
			  "id"=> 1425,
			  "nome"=> "Brussels",
			  "pais_id"=> 20
			],
			[
			  "id"=> 323,
			  "nome"=> "Brindisi",
			  "pais_id"=> 109
			],
			[
			  "id"=> 836,
			  "nome"=> "Brăila",
			  "pais_id"=> 188
			],
			[
			  "id"=> 581,
			  "nome"=> "Bihar",
			  "pais_id"=> 104
			],
			[
			  "id"=> 1420,
			  "nome"=> "Bern",
			  "pais_id"=> 43
			],
			[
			  "id"=> 106,
			  "nome"=> "Bryansk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 322,
			  "nome"=> "Brescia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 837,
			  "nome"=> "Botoșani",
			  "pais_id"=> 188
			],
			[
			  "id"=> 616,
			  "nome"=> "Banten",
			  "pais_id"=> 100
			],
			[
			  "id"=> 315,
			  "nome"=> "Barletta-Andria-Trani",
			  "pais_id"=> 109
			],
			[
			  "id"=> 427,
			  "nome"=> "Burgos",
			  "pais_id"=> 68
			],
			[
			  "id"=> 107,
			  "nome"=> "Republic of Buryatia",
			  "pais_id"=> 190
			],
			[
			  "id"=> 838,
			  "nome"=> "Brașov",
			  "pais_id"=> 188
			],
			[
			  "id"=> 180,
			  "nome"=> "Baja Verapaz",
			  "pais_id"=> 90
			],
			[
			  "id"=> 839,
			  "nome"=> "Buzău",
			  "pais_id"=> 188
			],
			[
			  "id"=> 321,
			  "nome"=> "Bolzano",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1514,
			  "nome"=> "Banjul",
			  "pais_id"=> 84
			],
			[
			  "id"=> 1519,
			  "nome"=> "Belgrado",
			  "pais_id"=> 189
			],
			[
			  "id"=> 1541,
			  "nome"=> "Bangkok",
			  "pais_id"=> 217
			],
			[
			  "id"=> 1524,
			  "nome"=> "Bratislava",
			  "pais_id"=> 201
			],
			[
			  "id"=> 1487,
			  "nome"=> "Brazzaville",
			  "pais_id"=> 42
			],
			[
			  "id"=> 919,
			  "nome"=> "Cork",
			  "pais_id"=> 101
			],
			[
			  "id"=> 553,
			  "nome"=> "Ciudad Autónoma de Buenos Aires",
			  "pais_id"=> 10
			],
			[
			  "id"=> 417,
			  "nome"=> "A Coruña (La Coruña)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 278,
			  "nome"=> "Cairo",
			  "pais_id"=> 65
			],
			[
			  "id"=> 719,
			  "nome"=> "Buckinghamshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 720,
			  "nome"=> "Caithness",
			  "pais_id"=> 231
			],
			[
			  "id"=> 721,
			  "nome"=> "Cambridgeshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 722,
			  "nome"=> "Channel Islands",
			  "pais_id"=> 231
			],
			[
			  "id"=> 723,
			  "nome"=> "Cheshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 724,
			  "nome"=> "Clackmannanshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 13,
			  "nome"=> "California",
			  "pais_id"=> 233
			],
			[
			  "id"=> 429,
			  "nome"=> "Cádiz",
			  "pais_id"=> 68
			],
			[
			  "id"=> 324,
			  "nome"=> "Cagliari",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1405,
			  "nome"=> "Cabinda",
			  "pais_id"=> 8
			],
			[
			  "id"=> 652,
			  "nome"=> "Caldas",
			  "pais_id"=> 49
			],
			[
			  "id"=> 490,
			  "nome"=> "Campeche",
			  "pais_id"=> 156
			],
			[
			  "id"=> 519,
			  "nome"=> "Canterbury",
			  "pais_id"=> 170
			],
			[
			  "id"=> 653,
			  "nome"=> "Caquetá",
			  "pais_id"=> 49
			],
			[
			  "id"=> 672,
			  "nome"=> "Casanare",
			  "pais_id"=> 49
			],
			[
			  "id"=> 654,
			  "nome"=> "Cauca",
			  "pais_id"=> 49
			],
			[
			  "id"=> 326,
			  "nome"=> "Campobasso",
			  "pais_id"=> 109
			],
			[
			  "id"=> 428,
			  "nome"=> "Cáceres",
			  "pais_id"=> 68
			],
			[
			  "id"=> 76,
			  "nome"=> "Ceará",
			  "pais_id"=> 31
			],
			[
			  "id"=> 918,
			  "nome"=> "Clare",
			  "pais_id"=> 101
			],
			[
			  "id"=> 108,
			  "nome"=> "Chechen Republic",
			  "pais_id"=> 190
			],
			[
			  "id"=> 432,
			  "nome"=> "Ceuta",
			  "pais_id"=> 68
			],
			[
			  "id"=> 328,
			  "nome"=> "Caserta",
			  "pais_id"=> 109
			],
			[
			  "id"=> 655,
			  "nome"=> "Cesar",
			  "pais_id"=> 49
			],
			[
			  "id"=> 583,
			  "nome"=> "Chattisgarh",
			  "pais_id"=> 104
			],
			[
			  "id"=> 331,
			  "nome"=> "Chieti",
			  "pais_id"=> 109
			],
			[
			  "id"=> 582,
			  "nome"=> "Chandigarh",
			  "pais_id"=> 104
			],
			[
			  "id"=> 109,
			  "nome"=> "Chelyabinsk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 488,
			  "nome"=> "Chihuahua",
			  "pais_id"=> 156
			],
			[
			  "id"=> 658,
			  "nome"=> "Chocó",
			  "pais_id"=> 49
			],
			[
			  "id"=> 492,
			  "nome"=> "Chiapas",
			  "pais_id"=> 156
			],
			[
			  "id"=> 110,
			  "nome"=> "Chukotka Autonomous Okrug",
			  "pais_id"=> 190
			],
			[
			  "id"=> 327,
			  "nome"=> "Carbonia-Iglesias",
			  "pais_id"=> 109
			],
			[
			  "id"=> 840,
			  "nome"=> "Cluj",
			  "pais_id"=> 188
			],
			[
			  "id"=> 325,
			  "nome"=> "Caltanissetta",
			  "pais_id"=> 109
			],
			[
			  "id"=> 841,
			  "nome"=> "Călărași",
			  "pais_id"=> 188
			],
			[
			  "id"=> 181,
			  "nome"=> "Chimaltenango",
			  "pais_id"=> 90
			],
			[
			  "id"=> 336,
			  "nome"=> "Cuneo",
			  "pais_id"=> 109
			],
			[
			  "id"=> 917,
			  "nome"=> "Cavan",
			  "pais_id"=> 101
			],
			[
			  "id"=> 434,
			  "nome"=> "Córdoba",
			  "pais_id"=> 68
			],
			[
			  "id"=> 14,
			  "nome"=> "Colorado",
			  "pais_id"=> 233
			],
			[
			  "id"=> 332,
			  "nome"=> "Como",
			  "pais_id"=> 109
			],
			[
			  "id"=> 491,
			  "nome"=> "Coahuila",
			  "pais_id"=> 156
			],
			[
			  "id"=> 489,
			  "nome"=> "Colima",
			  "pais_id"=> 156
			],
			[
			  "id"=> 656,
			  "nome"=> "Córdoba",
			  "pais_id"=> 49
			],
			[
			  "id"=> 182,
			  "nome"=> "Chiquimula",
			  "pais_id"=> 90
			],
			[
			  "id"=> 433,
			  "nome"=> "Ciudad Real",
			  "pais_id"=> 68
			],
			[
			  "id"=> 334,
			  "nome"=> "Cremona",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1108,
			  "nome"=> "Alajuela",
			  "pais_id"=> 50
			],
			[
			  "id"=> 1110,
			  "nome"=> "Cartago",
			  "pais_id"=> 50
			],
			[
			  "id"=> 1112,
			  "nome"=> "Guanacaste",
			  "pais_id"=> 50
			],
			[
			  "id"=> 1109,
			  "nome"=> "Heredia",
			  "pais_id"=> 50
			],
			[
			  "id"=> 1113,
			  "nome"=> "Limón",
			  "pais_id"=> 50
			],
			[
			  "id"=> 1111,
			  "nome"=> "Puntarenas",
			  "pais_id"=> 50
			],
			[
			  "id"=> 1107,
			  "nome"=> "San José",
			  "pais_id"=> 50
			],
			[
			  "id"=> 1528,
			  "nome"=> "Cabo Rei Eduardo",
			  "pais_id"=> 89
			],
			[
			  "id"=> 842,
			  "nome"=> "Caraș Severin",
			  "pais_id"=> 188
			],
			[
			  "id"=> 431,
			  "nome"=> "Castelló (Castellón)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 333,
			  "nome"=> "Cosenza",
			  "pais_id"=> 109
			],
			[
			  "id"=> 329,
			  "nome"=> "Catania",
			  "pais_id"=> 109
			],
			[
			  "id"=> 843,
			  "nome"=> "Constanța",
			  "pais_id"=> 188
			],
			[
			  "id"=> 15,
			  "nome"=> "Connecticut",
			  "pais_id"=> 233
			],
			[
			  "id"=> 111,
			  "nome"=> "Chuvash Republic",
			  "pais_id"=> 190
			],
			[
			  "id"=> 435,
			  "nome"=> "Cuenca",
			  "pais_id"=> 68
			],
			[
			  "id"=> 657,
			  "nome"=> "Cundinamarca",
			  "pais_id"=> 49
			],
			[
			  "id"=> 1407,
			  "nome"=> "Cunene",
			  "pais_id"=> 8
			],
			[
			  "id"=> 844,
			  "nome"=> "Covasna",
			  "pais_id"=> 188
			],
			[
			  "id"=> 916,
			  "nome"=> "Carlow",
			  "pais_id"=> 101
			],
			[
			  "id"=> 330,
			  "nome"=> "Catanzaro",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1511,
			  "nome"=> "Caiena",
			  "pais_id"=> 79
			],
			[
			  "id"=> 1532,
			  "nome"=> "Cartum",
			  "pais_id"=> 195
			],
			[
			  "id"=> 1492,
			  "nome"=> "Castries",
			  "pais_id"=> 127
			],
			[
			  "id"=> 1501,
			  "nome"=> "Copenhaga",
			  "pais_id"=> 59
			],
			[
			  "id"=> 923,
			  "nome"=> "Dublin",
			  "pais_id"=> 101
			],
			[
			  "id"=> 571,
			  "nome"=> "San Luis",
			  "pais_id"=> 10
			],
			[
			  "id"=> 725,
			  "nome"=> "Cleveland",
			  "pais_id"=> 231
			],
			[
			  "id"=> 726,
			  "nome"=> "Clwyd",
			  "pais_id"=> 231
			],
			[
			  "id"=> 727,
			  "nome"=> "County Antrim",
			  "pais_id"=> 231
			],
			[
			  "id"=> 728,
			  "nome"=> "County Armagh",
			  "pais_id"=> 231
			],
			[
			  "id"=> 729,
			  "nome"=> "County Down",
			  "pais_id"=> 231
			],
			[
			  "id"=> 112,
			  "nome"=> "Republic of Dagestan",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1118,
			  "nome"=> "Dajabón",
			  "pais_id"=> 61
			],
			[
			  "id"=> 845,
			  "nome"=> "Dâmbovița",
			  "pais_id"=> 188
			],
			[
			  "id"=> 17,
			  "nome"=> "District of Columbia",
			  "pais_id"=> 233
			],
			[
			  "id"=> 649,
			  "nome"=> "D.C.",
			  "pais_id"=> 49
			],
			[
			  "id"=> 585,
			  "nome"=> "Daman and Diu",
			  "pais_id"=> 104
			],
			[
			  "id"=> 16,
			  "nome"=> "Delaware",
			  "pais_id"=> 233
			],
			[
			  "id"=> 77,
			  "nome"=> "Distrito Federal",
			  "pais_id"=> 31
			],
			[
			  "id"=> 493,
			  "nome"=> "Ciudad de México",
			  "pais_id"=> 156
			],
			[
			  "id"=> 846,
			  "nome"=> "Dolj",
			  "pais_id"=> 188
			],
			[
			  "id"=> 268,
			  "nome"=> "Dakahlia",
			  "pais_id"=> 65
			],
			[
			  "id"=> 922,
			  "nome"=> "Donegal",
			  "pais_id"=> 101
			],
			[
			  "id"=> 586,
			  "nome"=> "Delhi",
			  "pais_id"=> 104
			],
			[
			  "id"=> 1114,
			  "nome"=> "Distrito Nacional",
			  "pais_id"=> 61
			],
			[
			  "id"=> 584,
			  "nome"=> "Dadra and Nagar Haveli",
			  "pais_id"=> 104
			],
			[
			  "id"=> 944,
			  "nome"=> "Down",
			  "pais_id"=> 101
			],
			[
			  "id"=> 948,
			  "nome"=> "Drenthe",
			  "pais_id"=> 165
			],
			[
			  "id"=> 909,
			  "nome"=> "Dire Dawa",
			  "pais_id"=> 69
			],
			[
			  "id"=> 289,
			  "nome"=> "Damietta",
			  "pais_id"=> 65
			],
			[
			  "id"=> 548,
			  "nome"=> "Dubai",
			  "pais_id"=> 2
			],
			[
			  "id"=> 1119,
			  "nome"=> "Duarte",
			  "pais_id"=> 61
			],
			[
			  "id"=> 494,
			  "nome"=> "Durango",
			  "pais_id"=> 156
			],
			[
			  "id"=> 1422,
			  "nome"=> "Algeria",
			  "pais_id"=> 62
			],
			[
			  "id"=> 1536,
			  "nome"=> "Damasco",
			  "pais_id"=> 211
			],
			[
			  "id"=> 1502,
			  "nome"=> "Djibouti",
			  "pais_id"=> 58
			],
			[
			  "id"=> 1540,
			  "nome"=> "Dodoma",
			  "pais_id"=> 228
			],
			[
			  "id"=> 1539,
			  "nome"=> "Dushanbe",
			  "pais_id"=> 218
			],
			[
			  "id"=> 1542,
			  "nome"=> "Díli",
			  "pais_id"=> 223
			],
			[
			  "id"=> 560,
			  "nome"=> "Entre Ríos",
			  "pais_id"=> 10
			],
			[
			  "id"=> 730,
			  "nome"=> "County Durham",
			  "pais_id"=> 231
			],
			[
			  "id"=> 731,
			  "nome"=> "County Fermanagh",
			  "pais_id"=> 231
			],
			[
			  "id"=> 732,
			  "nome"=> "County Londonderry",
			  "pais_id"=> 231
			],
			[
			  "id"=> 733,
			  "nome"=> "County Tyrone",
			  "pais_id"=> 231
			],
			[
			  "id"=> 734,
			  "nome"=> "Cornwall",
			  "pais_id"=> 231
			],
			[
			  "id"=> 297,
			  "nome"=> "Eastern Cape",
			  "pais_id"=> 247
			],
			[
			  "id"=> 1187,
			  "nome"=> "Harjumaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1188,
			  "nome"=> "Hiiumaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1189,
			  "nome"=> "Ida-Virumaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1190,
			  "nome"=> "Jõgevamaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1191,
			  "nome"=> "Järvamaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1192,
			  "nome"=> "Läänemaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1193,
			  "nome"=> "Lääne-Virumaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1194,
			  "nome"=> "Põlvamaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1195,
			  "nome"=> "Pärnumaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1196,
			  "nome"=> "Raplamaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1197,
			  "nome"=> "Saaremaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1198,
			  "nome"=> "Tartumaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1199,
			  "nome"=> "Valgamaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1200,
			  "nome"=> "Viljandimaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1201,
			  "nome"=> "Võrumaa",
			  "pais_id"=> 64
			],
			[
			  "id"=> 1120,
			  "nome"=> "Elías Piña",
			  "pais_id"=> 61
			],
			[
			  "id"=> 1121,
			  "nome"=> "El Seibo",
			  "pais_id"=> 61
			],
			[
			  "id"=> 337,
			  "nome"=> "Enna",
			  "pais_id"=> 109
			],
			[
			  "id"=> 183,
			  "nome"=> "El Progreso",
			  "pais_id"=> 90
			],
			[
			  "id"=> 78,
			  "nome"=> "Espírito Santo",
			  "pais_id"=> 31
			],
			[
			  "id"=> 184,
			  "nome"=> "Escuintla",
			  "pais_id"=> 90
			],
			[
			  "id"=> 1122,
			  "nome"=> "Espaillat",
			  "pais_id"=> 61
			],
			[
			  "id"=> 564,
			  "nome"=> "La Rioja",
			  "pais_id"=> 10
			],
			[
			  "id"=> 735,
			  "nome"=> "Cumbria",
			  "pais_id"=> 231
			],
			[
			  "id"=> 736,
			  "nome"=> "Derbyshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 737,
			  "nome"=> "Devon",
			  "pais_id"=> 231
			],
			[
			  "id"=> 738,
			  "nome"=> "Dorset",
			  "pais_id"=> 231
			],
			[
			  "id"=> 739,
			  "nome"=> "Dumfriesshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 342,
			  "nome"=> "Forlì-Cesena",
			  "pais_id"=> 109
			],
			[
			  "id"=> 339,
			  "nome"=> "Ferrara",
			  "pais_id"=> 109
			],
			[
			  "id"=> 341,
			  "nome"=> "Foggia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 945,
			  "nome"=> "Fermanagh",
			  "pais_id"=> 101
			],
			[
			  "id"=> 340,
			  "nome"=> "Firenze",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1331,
			  "nome"=> "Ahvenanmaa",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1332,
			  "nome"=> "Etelä-Karjala",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1333,
			  "nome"=> "Etelä-Pohjanmaa",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1334,
			  "nome"=> "Etelä-Savo",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1335,
			  "nome"=> "Kainuu",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1336,
			  "nome"=> "Kanta-Häme",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1337,
			  "nome"=> "Keski-Pohjanmaa",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1338,
			  "nome"=> "Keski-Suomi",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1339,
			  "nome"=> "Kymenlaakso",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1340,
			  "nome"=> "Lappi",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1341,
			  "nome"=> "Pirkanmaa",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1342,
			  "nome"=> "Pohjanmaa",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1343,
			  "nome"=> "Pohjois-Karjala",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1344,
			  "nome"=> "Pohjois-Pohjanmaa",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1345,
			  "nome"=> "Pohjois-Savo",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1346,
			  "nome"=> "Päijät-Häme",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1347,
			  "nome"=> "Satakunta",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1348,
			  "nome"=> "Uusimaa",
			  "pais_id"=> 70
			],
			[
			  "id"=> 1349,
			  "nome"=> "Varsinais-Suomi",
			  "pais_id"=> 70
			],
			[
			  "id"=> 949,
			  "nome"=> "Flevoland",
			  "pais_id"=> 165
			],
			[
			  "id"=> 18,
			  "nome"=> "Florida",
			  "pais_id"=> 233
			],
			[
			  "id"=> 61,
			  "nome"=> "Federated States of Micronesia",
			  "pais_id"=> 233
			],
			[
			  "id"=> 338,
			  "nome"=> "Fermo",
			  "pais_id"=> 109
			],
			[
			  "id"=> 950,
			  "nome"=> "Friesland",
			  "pais_id"=> 165
			],
			[
			  "id"=> 343,
			  "nome"=> "Frosinone",
			  "pais_id"=> 109
			],
			[
			  "id"=> 298,
			  "nome"=> "Free State",
			  "pais_id"=> 247
			],
			[
			  "id"=> 549,
			  "nome"=> "Fujairah",
			  "pais_id"=> 2
			],
			[
			  "id"=> 271,
			  "nome"=> "Faiyum",
			  "pais_id"=> 65
			],
			[
			  "id"=> 574,
			  "nome"=> "Santiago Del Estero",
			  "pais_id"=> 10
			],
			[
			  "id"=> 924,
			  "nome"=> "Galway",
			  "pais_id"=> 101
			],
			[
			  "id"=> 740,
			  "nome"=> "Dunbartonshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 741,
			  "nome"=> "Dyfed",
			  "pais_id"=> 231
			],
			[
			  "id"=> 742,
			  "nome"=> "East Lothian",
			  "pais_id"=> 231
			],
			[
			  "id"=> 743,
			  "nome"=> "East Sussex",
			  "pais_id"=> 231
			],
			[
			  "id"=> 744,
			  "nome"=> "Essex",
			  "pais_id"=> 231
			],
			[
			  "id"=> 19,
			  "nome"=> "Georgia",
			  "pais_id"=> 233
			],
			[
			  "id"=> 587,
			  "nome"=> "Goa",
			  "pais_id"=> 104
			],
			[
			  "id"=> 444,
			  "nome"=> "Las Palmas",
			  "pais_id"=> 68
			],
			[
			  "id"=> 344,
			  "nome"=> "Genova",
			  "pais_id"=> 109
			],
			[
			  "id"=> 951,
			  "nome"=> "Gelderland",
			  "pais_id"=> 165
			],
			[
			  "id"=> 272,
			  "nome"=> "Gharbia",
			  "pais_id"=> 65
			],
			[
			  "id"=> 436,
			  "nome"=> "Girona (Gerona)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 520,
			  "nome"=> "Gisborne",
			  "pais_id"=> 170
			],
			[
			  "id"=> 847,
			  "nome"=> "Gorj",
			  "pais_id"=> 188
			],
			[
			  "id"=> 588,
			  "nome"=> "Gujarat",
			  "pais_id"=> 104
			],
			[
			  "id"=> 848,
			  "nome"=> "Galați",
			  "pais_id"=> 188
			],
			[
			  "id"=> 910,
			  "nome"=> "Gambella Peoples",
			  "pais_id"=> 69
			],
			[
			  "id"=> 618,
			  "nome"=> "Gorontalo",
			  "pais_id"=> 100
			],
			[
			  "id"=> 79,
			  "nome"=> "Goiás",
			  "pais_id"=> 31
			],
			[
			  "id"=> 345,
			  "nome"=> "Gorizia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 346,
			  "nome"=> "Grosseto",
			  "pais_id"=> 109
			],
			[
			  "id"=> 437,
			  "nome"=> "Granada",
			  "pais_id"=> 68
			],
			[
			  "id"=> 849,
			  "nome"=> "Giurgiu",
			  "pais_id"=> 188
			],
			[
			  "id"=> 952,
			  "nome"=> "Groningen",
			  "pais_id"=> 165
			],
			[
			  "id"=> 495,
			  "nome"=> "Guerrero",
			  "pais_id"=> 156
			],
			[
			  "id"=> 299,
			  "nome"=> "Gauteng",
			  "pais_id"=> 247
			],
			[
			  "id"=> 438,
			  "nome"=> "Guadalajara",
			  "pais_id"=> 68
			],
			[
			  "id"=> 62,
			  "nome"=> "Guam",
			  "pais_id"=> 233
			],
			[
			  "id"=> 185,
			  "nome"=> "Guatemala",
			  "pais_id"=> 90
			],
			[
			  "id"=> 496,
			  "nome"=> "Guanajuato",
			  "pais_id"=> 156
			],
			[
			  "id"=> 676,
			  "nome"=> "Guainía",
			  "pais_id"=> 49
			],
			[
			  "id"=> 677,
			  "nome"=> "Guaviare",
			  "pais_id"=> 49
			],
			[
			  "id"=> 275,
			  "nome"=> "Giza",
			  "pais_id"=> 65
			],
			[
			  "id"=> 556,
			  "nome"=> "Chaco",
			  "pais_id"=> 10
			],
			[
			  "id"=> 440,
			  "nome"=> "Huelva",
			  "pais_id"=> 68
			],
			[
			  "id"=> 745,
			  "nome"=> "Fife",
			  "pais_id"=> 231
			],
			[
			  "id"=> 746,
			  "nome"=> "Gloucestershire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 747,
			  "nome"=> "Gwent",
			  "pais_id"=> 231
			],
			[
			  "id"=> 748,
			  "nome"=> "Gwynedd",
			  "pais_id"=> 231
			],
			[
			  "id"=> 1143,
			  "nome"=> "Hato Mayor",
			  "pais_id"=> 61
			],
			[
			  "id"=> 850,
			  "nome"=> "Hunedoara",
			  "pais_id"=> 188
			],
			[
			  "id"=> 1132,
			  "nome"=> "Hermanas Mirabal",
			  "pais_id"=> 61
			],
			[
			  "id"=> 20,
			  "nome"=> "Hawaii",
			  "pais_id"=> 233
			],
			[
			  "id"=> 497,
			  "nome"=> "Hidalgo",
			  "pais_id"=> 156
			],
			[
			  "id"=> 521,
			  "nome"=> "Hawke's Bay",
			  "pais_id"=> 170
			],
			[
			  "id"=> 590,
			  "nome"=> "Himachal Pradesh",
			  "pais_id"=> 104
			],
			[
			  "id"=> 851,
			  "nome"=> "Harghita",
			  "pais_id"=> 188
			],
			[
			  "id"=> 589,
			  "nome"=> "Haryana",
			  "pais_id"=> 104
			],
			[
			  "id"=> 911,
			  "nome"=> "Harrari Peoples",
			  "pais_id"=> 69
			],
			[
			  "id"=> 290,
			  "nome"=> "Helwan",
			  "pais_id"=> 65
			],
			[
			  "id"=> 441,
			  "nome"=> "Huesca",
			  "pais_id"=> 68
			],
			[
			  "id"=> 1408,
			  "nome"=> "Huambo",
			  "pais_id"=> 8
			],
			[
			  "id"=> 186,
			  "nome"=> "Huehuetenango",
			  "pais_id"=> 90
			],
			[
			  "id"=> 1409,
			  "nome"=> "Huíla",
			  "pais_id"=> 8
			],
			[
			  "id"=> 659,
			  "nome"=> "Huila",
			  "pais_id"=> 49
			],
			[
			  "id"=> 1490,
			  "nome"=> "Havana",
			  "pais_id"=> 51
			],
			[
			  "id"=> 1526,
			  "nome"=> "Honiara",
			  "pais_id"=> 193
			],
			[
			  "id"=> 749,
			  "nome"=> "Hampshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 750,
			  "nome"=> "Herefordshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 751,
			  "nome"=> "Hertfordshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 752,
			  "nome"=> "Inverness-Shire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 753,
			  "nome"=> "Isle of Arran",
			  "pais_id"=> 231
			],
			[
			  "id"=> 24,
			  "nome"=> "Iowa",
			  "pais_id"=> 233
			],
			[
			  "id"=> 21,
			  "nome"=> "Idaho",
			  "pais_id"=> 233
			],
			[
			  "id"=> 852,
			  "nome"=> "Ilfov",
			  "pais_id"=> 188
			],
			[
			  "id"=> 853,
			  "nome"=> "Ialomița",
			  "pais_id"=> 188
			],
			[
			  "id"=> 22,
			  "nome"=> "Illinois",
			  "pais_id"=> 233
			],
			[
			  "id"=> 347,
			  "nome"=> "Imperia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 23,
			  "nome"=> "Indiana",
			  "pais_id"=> 233
			],
			[
			  "id"=> 113,
			  "nome"=> "Republic of Ingushetia",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1123,
			  "nome"=> "Independencia",
			  "pais_id"=> 61
			],
			[
			  "id"=> 114,
			  "nome"=> "Irkutsk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 274,
			  "nome"=> "Ismailia",
			  "pais_id"=> 65
			],
			[
			  "id"=> 348,
			  "nome"=> "Isernia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 854,
			  "nome"=> "Iași",
			  "pais_id"=> 188
			],
			[
			  "id"=> 115,
			  "nome"=> "Ivanovo Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 187,
			  "nome"=> "Izabal",
			  "pais_id"=> 90
			],
			[
			  "id"=> 570,
			  "nome"=> "San Juan",
			  "pais_id"=> 10
			],
			[
			  "id"=> 442,
			  "nome"=> "Jaén",
			  "pais_id"=> 68
			],
			[
			  "id"=> 754,
			  "nome"=> "Isle of Barra",
			  "pais_id"=> 231
			],
			[
			  "id"=> 755,
			  "nome"=> "Isle of Benbecula",
			  "pais_id"=> 231
			],
			[
			  "id"=> 756,
			  "nome"=> "Isle of Bute",
			  "pais_id"=> 231
			],
			[
			  "id"=> 757,
			  "nome"=> "Isle of Canna",
			  "pais_id"=> 231
			],
			[
			  "id"=> 758,
			  "nome"=> "Isle of Coll",
			  "pais_id"=> 231
			],
			[
			  "id"=> 620,
			  "nome"=> "Jambi",
			  "pais_id"=> 100
			],
			[
			  "id"=> 498,
			  "nome"=> "Jalisco",
			  "pais_id"=> 156
			],
			[
			  "id"=> 188,
			  "nome"=> "Jalapa",
			  "pais_id"=> 90
			],
			[
			  "id"=> 621,
			  "nome"=> "Jawa Barat",
			  "pais_id"=> 100
			],
			[
			  "id"=> 592,
			  "nome"=> "Jharkhand",
			  "pais_id"=> 104
			],
			[
			  "id"=> 469,
			  "nome"=> "Johor",
			  "pais_id"=> 157
			],
			[
			  "id"=> 623,
			  "nome"=> "Jawa Timur",
			  "pais_id"=> 100
			],
			[
			  "id"=> 619,
			  "nome"=> "Jakarta",
			  "pais_id"=> 100
			],
			[
			  "id"=> 591,
			  "nome"=> "Jammu and Kashmir",
			  "pais_id"=> 104
			],
			[
			  "id"=> 291,
			  "nome"=> "South Sinai",
			  "pais_id"=> 65
			],
			[
			  "id"=> 622,
			  "nome"=> "Jawa Tengah",
			  "pais_id"=> 100
			],
			[
			  "id"=> 189,
			  "nome"=> "Jutiapa",
			  "pais_id"=> 90
			],
			[
			  "id"=> 555,
			  "nome"=> "Catamarca",
			  "pais_id"=> 10
			],
			[
			  "id"=> 759,
			  "nome"=> "Isle of Colonsay",
			  "pais_id"=> 231
			],
			[
			  "id"=> 760,
			  "nome"=> "Isle of Cumbrae",
			  "pais_id"=> 231
			],
			[
			  "id"=> 761,
			  "nome"=> "Isle of Eigg",
			  "pais_id"=> 231
			],
			[
			  "id"=> 762,
			  "nome"=> "Isle of Gigha",
			  "pais_id"=> 231
			],
			[
			  "id"=> 763,
			  "nome"=> "Isle of Harris",
			  "pais_id"=> 231
			],
			[
			  "id"=> 593,
			  "nome"=> "Karnataka",
			  "pais_id"=> 104
			],
			[
			  "id"=> 116,
			  "nome"=> "Kamchatka Krai",
			  "pais_id"=> 190
			],
			[
			  "id"=> 279,
			  "nome"=> "Qalyubia",
			  "pais_id"=> 65
			],
			[
			  "id"=> 624,
			  "nome"=> "Kalimantan Barat",
			  "pais_id"=> 100
			],
			[
			  "id"=> 117,
			  "nome"=> "Kabardino-Balkarian Republic",
			  "pais_id"=> 190
			],
			[
			  "id"=> 121,
			  "nome"=> "Karachay–Cherkess Republic",
			  "pais_id"=> 190
			],
			[
			  "id"=> 130,
			  "nome"=> "Krasnodar Krai",
			  "pais_id"=> 190
			],
			[
			  "id"=> 470,
			  "nome"=> "Kedah",
			  "pais_id"=> 157
			],
			[
			  "id"=> 926,
			  "nome"=> "Kildare",
			  "pais_id"=> 101
			],
			[
			  "id"=> 123,
			  "nome"=> "Kemerovo Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 292,
			  "nome"=> "Kafr el-Sheikh",
			  "pais_id"=> 65
			],
			[
			  "id"=> 118,
			  "nome"=> "Kaliningrad Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 132,
			  "nome"=> "Kurgan Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 124,
			  "nome"=> "Khabarovsk Krai",
			  "pais_id"=> 190
			],
			[
			  "id"=> 126,
			  "nome"=> "Khanty-Mansi Autonomous Okrug",
			  "pais_id"=> 190
			],
			[
			  "id"=> 627,
			  "nome"=> "Kalimantan Timur",
			  "pais_id"=> 100
			],
			[
			  "id"=> 127,
			  "nome"=> "Kirov Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 125,
			  "nome"=> "Republic of Khakassia",
			  "pais_id"=> 190
			],
			[
			  "id"=> 927,
			  "nome"=> "Kilkenny",
			  "pais_id"=> 101
			],
			[
			  "id"=> 119,
			  "nome"=> "Republic of Kalmykia",
			  "pais_id"=> 190
			],
			[
			  "id"=> 594,
			  "nome"=> "Kerala",
			  "pais_id"=> 104
			],
			[
			  "id"=> 120,
			  "nome"=> "Kaluga Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 294,
			  "nome"=> "Qena",
			  "pais_id"=> 65
			],
			[
			  "id"=> 128,
			  "nome"=> "Komi Republic",
			  "pais_id"=> 190
			],
			[
			  "id"=> 129,
			  "nome"=> "Kostroma Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 335,
			  "nome"=> "Crotone",
			  "pais_id"=> 109
			],
			[
			  "id"=> 122,
			  "nome"=> "Republic of Karelia",
			  "pais_id"=> 190
			],
			[
			  "id"=> 629,
			  "nome"=> "Kepulauan Riau",
			  "pais_id"=> 100
			],
			[
			  "id"=> 133,
			  "nome"=> "Kursk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 625,
			  "nome"=> "Kalimantan Selatan",
			  "pais_id"=> 100
			],
			[
			  "id"=> 25,
			  "nome"=> "Kansas",
			  "pais_id"=> 233
			],
			[
			  "id"=> 626,
			  "nome"=> "Kalimantan Tengah",
			  "pais_id"=> 100
			],
			[
			  "id"=> 471,
			  "nome"=> "Kelantan",
			  "pais_id"=> 157
			],
			[
			  "id"=> 628,
			  "nome"=> "Kalimantan Utara",
			  "pais_id"=> 100
			],
			[
			  "id"=> 1406,
			  "nome"=> "Cuando-Cubango",
			  "pais_id"=> 8
			],
			[
			  "id"=> 472,
			  "nome"=> "Kuala Lumpur",
			  "pais_id"=> 157
			],
			[
			  "id"=> 1410,
			  "nome"=> "Kwanza-Norte",
			  "pais_id"=> 8
			],
			[
			  "id"=> 1411,
			  "nome"=> "Kwanza-Sul",
			  "pais_id"=> 8
			],
			[
			  "id"=> 925,
			  "nome"=> "Kerry",
			  "pais_id"=> 101
			],
			[
			  "id"=> 26,
			  "nome"=> "Kentucky",
			  "pais_id"=> 233
			],
			[
			  "id"=> 131,
			  "nome"=> "Krasnoyarsk Krai",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1495,
			  "nome"=> "Kingstown",
			  "pais_id"=> 237
			],
			[
			  "id"=> 1500,
			  "nome"=> "Kinshasa",
			  "pais_id"=> 41
			],
			[
			  "id"=> 446,
			  "nome"=> "Lleida (Lérida)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 563,
			  "nome"=> "La Pampa",
			  "pais_id"=> 10
			],
			[
			  "id"=> 764,
			  "nome"=> "Isle of Iona",
			  "pais_id"=> 231
			],
			[
			  "id"=> 765,
			  "nome"=> "Isle of Islay",
			  "pais_id"=> 231
			],
			[
			  "id"=> 766,
			  "nome"=> "Isle of Jura",
			  "pais_id"=> 231
			],
			[
			  "id"=> 767,
			  "nome"=> "Isle of Lewis",
			  "pais_id"=> 231
			],
			[
			  "id"=> 768,
			  "nome"=> "Isle of Man",
			  "pais_id"=> 231
			],
			[
			  "id"=> 1124,
			  "nome"=> "La Altagracia",
			  "pais_id"=> 61
			],
			[
			  "id"=> 27,
			  "nome"=> "Louisiana",
			  "pais_id"=> 233
			],
			[
			  "id"=> 630,
			  "nome"=> "Lampung",
			  "pais_id"=> 100
			],
			[
			  "id"=> 660,
			  "nome"=> "La Guajira",
			  "pais_id"=> 49
			],
			[
			  "id"=> 473,
			  "nome"=> "Labuan",
			  "pais_id"=> 157
			],
			[
			  "id"=> 353,
			  "nome"=> "Lecco",
			  "pais_id"=> 109
			],
			[
			  "id"=> 595,
			  "nome"=> "Lakshadweep",
			  "pais_id"=> 104
			],
			[
			  "id"=> 930,
			  "nome"=> "Longford",
			  "pais_id"=> 101
			],
			[
			  "id"=> 1394,
			  "nome"=> "Luanda",
			  "pais_id"=> 8
			],
			[
			  "id"=> 1412,
			  "nome"=> "Lunda-Norte",
			  "pais_id"=> 8
			],
			[
			  "id"=> 1413,
			  "nome"=> "Lunda-Sul",
			  "pais_id"=> 8
			],
			[
			  "id"=> 352,
			  "nome"=> "Lecce",
			  "pais_id"=> 109
			],
			[
			  "id"=> 445,
			  "nome"=> "León",
			  "pais_id"=> 68
			],
			[
			  "id"=> 134,
			  "nome"=> "Leningrad Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 931,
			  "nome"=> "Louth",
			  "pais_id"=> 101
			],
			[
			  "id"=> 354,
			  "nome"=> "Livorno",
			  "pais_id"=> 109
			],
			[
			  "id"=> 953,
			  "nome"=> "Limburg",
			  "pais_id"=> 165
			],
			[
			  "id"=> 135,
			  "nome"=> "Lipetsk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 920,
			  "nome"=> "Limerick",
			  "pais_id"=> 101
			],
			[
			  "id"=> 929,
			  "nome"=> "Leitrim",
			  "pais_id"=> 101
			],
			[
			  "id"=> 355,
			  "nome"=> "Lodi",
			  "pais_id"=> 109
			],
			[
			  "id"=> 443,
			  "nome"=> "La Rioja",
			  "pais_id"=> 68
			],
			[
			  "id"=> 301,
			  "nome"=> "Limpopo",
			  "pais_id"=> 247
			],
			[
			  "id"=> 1125,
			  "nome"=> "La Romana",
			  "pais_id"=> 61
			],
			[
			  "id"=> 928,
			  "nome"=> "Laois",
			  "pais_id"=> 101
			],
			[
			  "id"=> 351,
			  "nome"=> "Latina",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1321,
			  "nome"=> "Alytaus apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 1323,
			  "nome"=> "Klaipėdos apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 1322,
			  "nome"=> "Kauno apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 1324,
			  "nome"=> "Marijampolės apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 1325,
			  "nome"=> "Panevėžio apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 1326,
			  "nome"=> "Šiaulių apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 1327,
			  "nome"=> "Tauragės apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 1328,
			  "nome"=> "Telšių apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 1329,
			  "nome"=> "Utenos apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 1330,
			  "nome"=> "Vilniaus apskritis",
			  "pais_id"=> 132
			],
			[
			  "id"=> 447,
			  "nome"=> "Lugo",
			  "pais_id"=> 68
			],
			[
			  "id"=> 356,
			  "nome"=> "Lucca",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1126,
			  "nome"=> "La Vega",
			  "pais_id"=> 61
			],
			[
			  "id"=> 1202,
			  "nome"=> "Aglonas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1203,
			  "nome"=> "Aizkraukles novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1204,
			  "nome"=> "Aizputes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1205,
			  "nome"=> "Aknīstes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1206,
			  "nome"=> "Alojas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1207,
			  "nome"=> "Alsungas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1208,
			  "nome"=> "Alūksnes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1209,
			  "nome"=> "Amatas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1210,
			  "nome"=> "Apes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1211,
			  "nome"=> "Auces novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1212,
			  "nome"=> "Ādažu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1213,
			  "nome"=> "Babītes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1214,
			  "nome"=> "Baldones novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1215,
			  "nome"=> "Baltinavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1216,
			  "nome"=> "Balvu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1217,
			  "nome"=> "Bauskas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1218,
			  "nome"=> "Beverīnas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1219,
			  "nome"=> "Brocēnu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1220,
			  "nome"=> "Burtnieku novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1221,
			  "nome"=> "Carnikavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1222,
			  "nome"=> "Cesvaines novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1223,
			  "nome"=> "Cēsu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1224,
			  "nome"=> "Ciblas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1225,
			  "nome"=> "Dagdas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1226,
			  "nome"=> "Daugavpils novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1227,
			  "nome"=> "Dobeles novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1228,
			  "nome"=> "Dundagas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1229,
			  "nome"=> "Durbes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1230,
			  "nome"=> "Engures novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1231,
			  "nome"=> "Ērgļu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1232,
			  "nome"=> "Garkalnes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1233,
			  "nome"=> "Grobiņas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1234,
			  "nome"=> "Gulbenes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1235,
			  "nome"=> "Iecavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1236,
			  "nome"=> "Ikšķiles novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1237,
			  "nome"=> "Ilūkstes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1238,
			  "nome"=> "Inčukalna novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1239,
			  "nome"=> "Jaunjelgavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1240,
			  "nome"=> "Jaunpiebalgas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1241,
			  "nome"=> "Jaunpils novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1242,
			  "nome"=> "Jelgavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1243,
			  "nome"=> "Jēkabpils novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1244,
			  "nome"=> "Kandavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1245,
			  "nome"=> "Kārsavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1246,
			  "nome"=> "Kocēnu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1247,
			  "nome"=> "Kokneses novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1248,
			  "nome"=> "Krāslavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1249,
			  "nome"=> "Krimuldas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1250,
			  "nome"=> "Krustpils novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1251,
			  "nome"=> "Kuldīgas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1252,
			  "nome"=> "Ķeguma novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1253,
			  "nome"=> "Ķekavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1254,
			  "nome"=> "Lielvārdes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1255,
			  "nome"=> "Limbažu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1256,
			  "nome"=> "Līgatnes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1257,
			  "nome"=> "Līvānu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1258,
			  "nome"=> "Lubānas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1259,
			  "nome"=> "Ludzas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1260,
			  "nome"=> "Madonas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1261,
			  "nome"=> "Mazsalacas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1262,
			  "nome"=> "Mālpils novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1263,
			  "nome"=> "Mārupes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1264,
			  "nome"=> "Mērsraga novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1265,
			  "nome"=> "Naukšēnu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1266,
			  "nome"=> "Neretas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1267,
			  "nome"=> "Nīcas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1268,
			  "nome"=> "Ogres novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1269,
			  "nome"=> "Olaines novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1270,
			  "nome"=> "Ozolnieku novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1271,
			  "nome"=> "Pārgaujas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1272,
			  "nome"=> "Pāvilostas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1273,
			  "nome"=> "Pļaviņu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1274,
			  "nome"=> "Preiļu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1275,
			  "nome"=> "Priekules novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1276,
			  "nome"=> "Priekuļu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1277,
			  "nome"=> "Raunas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1278,
			  "nome"=> "Rēzeknes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1279,
			  "nome"=> "Riebiņu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1280,
			  "nome"=> "Rojas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1281,
			  "nome"=> "Ropažu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1282,
			  "nome"=> "Rucavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1283,
			  "nome"=> "Rugāju novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1284,
			  "nome"=> "Rundāles novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1285,
			  "nome"=> "Rūjienas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1286,
			  "nome"=> "Salas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1287,
			  "nome"=> "Salacgrīvas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1288,
			  "nome"=> "Salaspils novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1289,
			  "nome"=> "Saldus novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1290,
			  "nome"=> "Saulkrastu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1291,
			  "nome"=> "Sējas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1292,
			  "nome"=> "Siguldas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1293,
			  "nome"=> "Skrīveru novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1294,
			  "nome"=> "Skrundas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1295,
			  "nome"=> "Smiltenes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1296,
			  "nome"=> "Stopiņu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1297,
			  "nome"=> "Strenču novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1298,
			  "nome"=> "Talsu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1299,
			  "nome"=> "Tērvetes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1300,
			  "nome"=> "Tukuma novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1301,
			  "nome"=> "Vaiņodes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1302,
			  "nome"=> "Valkas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1303,
			  "nome"=> "Varakļānu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1304,
			  "nome"=> "Vārkavas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1305,
			  "nome"=> "Vecpiebalgas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1306,
			  "nome"=> "Vecumnieku novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1307,
			  "nome"=> "Ventspils novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1308,
			  "nome"=> "Viesītes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1309,
			  "nome"=> "Viļakas novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1310,
			  "nome"=> "Viļānu novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1311,
			  "nome"=> "Zilupes novads",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1312,
			  "nome"=> "Daugavpils",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1313,
			  "nome"=> "Jelgava",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1314,
			  "nome"=> "Jēkabpils",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1315,
			  "nome"=> "Jūrmala",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1316,
			  "nome"=> "Liepāja",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1317,
			  "nome"=> "Rēzekne",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1318,
			  "nome"=> "Rīga",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1320,
			  "nome"=> "Ventspils",
			  "pais_id"=> 134
			],
			[
			  "id"=> 1319,
			  "nome"=> "Valmiera",
			  "pais_id"=> 134
			],
			[
			  "id"=> 280,
			  "nome"=> "Luxor",
			  "pais_id"=> 65
			],
			[
			  "id"=> 946,
			  "nome"=> "Londonderry",
			  "pais_id"=> 101
			],
			[
			  "id"=> 1513,
			  "nome"=> "Libreville",
			  "pais_id"=> 76
			],
			[
			  "id"=> 1525,
			  "nome"=> "Liubliana",
			  "pais_id"=> 199
			],
			[
			  "id"=> 1534,
			  "nome"=> "Longyearbyen",
			  "pais_id"=> 200
			],
			[
			  "id"=> 1543,
			  "nome"=> "Lomé",
			  "pais_id"=> 216
			],
			[
			  "id"=> 565,
			  "nome"=> "Mendoza",
			  "pais_id"=> 10
			],
			[
			  "id"=> 448,
			  "nome"=> "Madrid",
			  "pais_id"=> 68
			],
			[
			  "id"=> 769,
			  "nome"=> "Isle of Mull",
			  "pais_id"=> 231
			],
			[
			  "id"=> 770,
			  "nome"=> "Isle of North Uist",
			  "pais_id"=> 231
			],
			[
			  "id"=> 823,
			  "nome"=> "Orkney",
			  "pais_id"=> 231
			],
			[
			  "id"=> 771,
			  "nome"=> "Isle of Rhum",
			  "pais_id"=> 231
			],
			[
			  "id"=> 772,
			  "nome"=> "Isle of Scalpay",
			  "pais_id"=> 231
			],
			[
			  "id"=> 449,
			  "nome"=> "Málaga",
			  "pais_id"=> 68
			],
			[
			  "id"=> 42,
			  "nome"=> "Massachusetts",
			  "pais_id"=> 233
			],
			[
			  "id"=> 631,
			  "nome"=> "Maluku",
			  "pais_id"=> 100
			],
			[
			  "id"=> 80,
			  "nome"=> "Maranhão",
			  "pais_id"=> 31
			],
			[
			  "id"=> 661,
			  "nome"=> "Magdalena",
			  "pais_id"=> 49
			],
			[
			  "id"=> 136,
			  "nome"=> "Magadan Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1414,
			  "nome"=> "Malanje",
			  "pais_id"=> 8
			],
			[
			  "id"=> 535,
			  "nome"=> "Manitoba",
			  "pais_id"=> 38
			],
			[
			  "id"=> 365,
			  "nome"=> "Monza e Brianza",
			  "pais_id"=> 109
			],
			[
			  "id"=> 523,
			  "nome"=> "Marlborough",
			  "pais_id"=> 170
			],
			[
			  "id"=> 357,
			  "nome"=> "Macerata",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1128,
			  "nome"=> "Monte Cristi",
			  "pais_id"=> 61
			],
			[
			  "id"=> 41,
			  "nome"=> "Maryland",
			  "pais_id"=> 233
			],
			[
			  "id"=> 28,
			  "nome"=> "Maine",
			  "pais_id"=> 233
			],
			[
			  "id"=> 362,
			  "nome"=> "Messina",
			  "pais_id"=> 109
			],
			[
			  "id"=> 450,
			  "nome"=> "Melilla",
			  "pais_id"=> 68
			],
			[
			  "id"=> 137,
			  "nome"=> "Mari El Republic",
			  "pais_id"=> 190
			],
			[
			  "id"=> 662,
			  "nome"=> "Meta",
			  "pais_id"=> 49
			],
			[
			  "id"=> 501,
			  "nome"=> "México",
			  "pais_id"=> 156
			],
			[
			  "id"=> 83,
			  "nome"=> "Minas Gerais",
			  "pais_id"=> 31
			],
			[
			  "id"=> 855,
			  "nome"=> "Mehedinți",
			  "pais_id"=> 188
			],
			[
			  "id"=> 933,
			  "nome"=> "Meath",
			  "pais_id"=> 101
			],
			[
			  "id"=> 597,
			  "nome"=> "Maharashtra",
			  "pais_id"=> 104
			],
			[
			  "id"=> 63,
			  "nome"=> "Marshall Islands",
			  "pais_id"=> 233
			],
			[
			  "id"=> 43,
			  "nome"=> "Michigan",
			  "pais_id"=> 233
			],
			[
			  "id"=> 363,
			  "nome"=> "Milano",
			  "pais_id"=> 109
			],
			[
			  "id"=> 499,
			  "nome"=> "Michoacán",
			  "pais_id"=> 156
			],
			[
			  "id"=> 599,
			  "nome"=> "Meghalaya",
			  "pais_id"=> 104
			],
			[
			  "id"=> 474,
			  "nome"=> "Melaka",
			  "pais_id"=> 157
			],
			[
			  "id"=> 856,
			  "nome"=> "Maramureș",
			  "pais_id"=> 188
			],
			[
			  "id"=> 44,
			  "nome"=> "Minnesota",
			  "pais_id"=> 233
			],
			[
			  "id"=> 934,
			  "nome"=> "Monaghan",
			  "pais_id"=> 101
			],
			[
			  "id"=> 358,
			  "nome"=> "Mantova",
			  "pais_id"=> 109
			],
			[
			  "id"=> 277,
			  "nome"=> "Minya",
			  "pais_id"=> 65
			],
			[
			  "id"=> 598,
			  "nome"=> "Manipur",
			  "pais_id"=> 104
			],
			[
			  "id"=> 276,
			  "nome"=> "Monufia",
			  "pais_id"=> 65
			],
			[
			  "id"=> 138,
			  "nome"=> "Republic of Mordovia",
			  "pais_id"=> 190
			],
			[
			  "id"=> 46,
			  "nome"=> "Missouri",
			  "pais_id"=> 233
			],
			[
			  "id"=> 932,
			  "nome"=> "Mayo",
			  "pais_id"=> 101
			],
			[
			  "id"=> 364,
			  "nome"=> "Modena",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1141,
			  "nome"=> "Monseñor Nouel",
			  "pais_id"=> 61
			],
			[
			  "id"=> 500,
			  "nome"=> "Morelos",
			  "pais_id"=> 156
			],
			[
			  "id"=> 139,
			  "nome"=> "Moscow Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 140,
			  "nome"=> "Moscow",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1415,
			  "nome"=> "Moxico",
			  "pais_id"=> 8
			],
			[
			  "id"=> 596,
			  "nome"=> "Madhya Pradesh",
			  "pais_id"=> 104
			],
			[
			  "id"=> 64,
			  "nome"=> "Northern Mariana Islands",
			  "pais_id"=> 233
			],
			[
			  "id"=> 1142,
			  "nome"=> "Monte Plata",
			  "pais_id"=> 61
			],
			[
			  "id"=> 302,
			  "nome"=> "Mpumalanga",
			  "pais_id"=> 247
			],
			[
			  "id"=> 359,
			  "nome"=> "Massa-Carrara",
			  "pais_id"=> 109
			],
			[
			  "id"=> 82,
			  "nome"=> "Mato Grosso do Sul",
			  "pais_id"=> 31
			],
			[
			  "id"=> 857,
			  "nome"=> "Mureș",
			  "pais_id"=> 188
			],
			[
			  "id"=> 45,
			  "nome"=> "Mississippi",
			  "pais_id"=> 233
			],
			[
			  "id"=> 29,
			  "nome"=> "Montana",
			  "pais_id"=> 233
			],
			[
			  "id"=> 360,
			  "nome"=> "Matera",
			  "pais_id"=> 109
			],
			[
			  "id"=> 293,
			  "nome"=> "Matrouh",
			  "pais_id"=> 65
			],
			[
			  "id"=> 81,
			  "nome"=> "Mato Grosso",
			  "pais_id"=> 31
			],
			[
			  "id"=> 1127,
			  "nome"=> "María Trinidad Sánchez",
			  "pais_id"=> 61
			],
			[
			  "id"=> 632,
			  "nome"=> "Maluku Utara",
			  "pais_id"=> 100
			],
			[
			  "id"=> 451,
			  "nome"=> "Murcia",
			  "pais_id"=> 68
			],
			[
			  "id"=> 141,
			  "nome"=> "Murmansk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 522,
			  "nome"=> "Manawatu-Wanganui",
			  "pais_id"=> 170
			],
			[
			  "id"=> 600,
			  "nome"=> "Mizoram",
			  "pais_id"=> 104
			],
			[
			  "id"=> 1506,
			  "nome"=> "Malabo",
			  "pais_id"=> 87
			],
			[
			  "id"=> 1493,
			  "nome"=> "Marigot",
			  "pais_id"=> 140
			],
			[
			  "id"=> 1535,
			  "nome"=> "Mbabane‎",
			  "pais_id"=> 212
			],
			[
			  "id"=> 566,
			  "nome"=> "Misiones",
			  "pais_id"=> 10
			],
			[
			  "id"=> 773,
			  "nome"=> "Shetland Islands",
			  "pais_id"=> 231
			],
			[
			  "id"=> 774,
			  "nome"=> "Isle of Skye",
			  "pais_id"=> 231
			],
			[
			  "id"=> 775,
			  "nome"=> "Isle of South Uist",
			  "pais_id"=> 231
			],
			[
			  "id"=> 776,
			  "nome"=> "Isle of Tiree",
			  "pais_id"=> 231
			],
			[
			  "id"=> 777,
			  "nome"=> "Isle of Wight",
			  "pais_id"=> 231
			],
			[
			  "id"=> 366,
			  "nome"=> "Napoli",
			  "pais_id"=> 109
			],
			[
			  "id"=> 452,
			  "nome"=> "Navarra (Nafarroa)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 1416,
			  "nome"=> "Namibe",
			  "pais_id"=> 8
			],
			[
			  "id"=> 663,
			  "nome"=> "Nariño",
			  "pais_id"=> 49
			],
			[
			  "id"=> 502,
			  "nome"=> "Nayarit",
			  "pais_id"=> 156
			],
			[
			  "id"=> 536,
			  "nome"=> "New Brunswick",
			  "pais_id"=> 38
			],
			[
			  "id"=> 633,
			  "nome"=> "Nusa Tenggara Barat",
			  "pais_id"=> 100
			],
			[
			  "id"=> 954,
			  "nome"=> "Noord-Brabant",
			  "pais_id"=> 165
			],
			[
			  "id"=> 36,
			  "nome"=> "North Carolina",
			  "pais_id"=> 233
			],
			[
			  "id"=> 303,
			  "nome"=> "Northern Cape",
			  "pais_id"=> 247
			],
			[
			  "id"=> 37,
			  "nome"=> "North Dakota",
			  "pais_id"=> 233
			],
			[
			  "id"=> 30,
			  "nome"=> "Nebraska",
			  "pais_id"=> 233
			],
			[
			  "id"=> 143,
			  "nome"=> "Novgorod Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 32,
			  "nome"=> "New Hampshire",
			  "pais_id"=> 233
			],
			[
			  "id"=> 955,
			  "nome"=> "Noord-Holland",
			  "pais_id"=> 165
			],
			[
			  "id"=> 142,
			  "nome"=> "Nizhny Novgorod Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 33,
			  "nome"=> "New Jersey",
			  "pais_id"=> 233
			],
			[
			  "id"=> 300,
			  "nome"=> "KwaZulu-Natal",
			  "pais_id"=> 247
			],
			[
			  "id"=> 601,
			  "nome"=> "Nagaland",
			  "pais_id"=> 104
			],
			[
			  "id"=> 537,
			  "nome"=> "Newfoundland and Labrador",
			  "pais_id"=> 38
			],
			[
			  "id"=> 503,
			  "nome"=> "Nuevo León",
			  "pais_id"=> 156
			],
			[
			  "id"=> 34,
			  "nome"=> "New Mexico",
			  "pais_id"=> 233
			],
			[
			  "id"=> 367,
			  "nome"=> "Novara",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1375,
			  "nome"=> "Oslo",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1376,
			  "nome"=> "Rogaland",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1373,
			  "nome"=> "Møre og Romsdal",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1374,
			  "nome"=> "Nordland",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1383,
			  "nome"=> "Svalbard",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1382,
			  "nome"=> "Jan Mayen",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1381,
			  "nome"=> "Viken",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1372,
			  "nome"=> "Innlandet",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1379,
			  "nome"=> "Vestfold og Telemark",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1371,
			  "nome"=> "Agder",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1380,
			  "nome"=> "Vestland",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1378,
			  "nome"=> "Trøndelag",
			  "pais_id"=> 166
			],
			[
			  "id"=> 1377,
			  "nome"=> "Troms og Finnmark / Romsa ja Finnmárku",
			  "pais_id"=> 166
			],
			[
			  "id"=> 539,
			  "nome"=> "Nova Scotia",
			  "pais_id"=> 38
			],
			[
			  "id"=> 664,
			  "nome"=> "Norte de Santander",
			  "pais_id"=> 49
			],
			[
			  "id"=> 475,
			  "nome"=> "Negeri Sembilan",
			  "pais_id"=> 157
			],
			[
			  "id"=> 524,
			  "nome"=> "Nelson",
			  "pais_id"=> 170
			],
			[
			  "id"=> 2,
			  "nome"=> "New South Wales",
			  "pais_id"=> 13
			],
			[
			  "id"=> 538,
			  "nome"=> "Northwest Territories",
			  "pais_id"=> 38
			],
			[
			  "id"=> 634,
			  "nome"=> "Nusa Tenggara Timur",
			  "pais_id"=> 100
			],
			[
			  "id"=> 3,
			  "nome"=> "Northern Territory",
			  "pais_id"=> 13
			],
			[
			  "id"=> 858,
			  "nome"=> "Neamț",
			  "pais_id"=> 188
			],
			[
			  "id"=> 525,
			  "nome"=> "Northland",
			  "pais_id"=> 170
			],
			[
			  "id"=> 368,
			  "nome"=> "Nuoro",
			  "pais_id"=> 109
			],
			[
			  "id"=> 540,
			  "nome"=> "Nunavut",
			  "pais_id"=> 38
			],
			[
			  "id"=> 31,
			  "nome"=> "Nevada",
			  "pais_id"=> 233
			],
			[
			  "id"=> 144,
			  "nome"=> "Novosibirsk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 304,
			  "nome"=> "North West",
			  "pais_id"=> 247
			],
			[
			  "id"=> 35,
			  "nome"=> "New York",
			  "pais_id"=> 233
			],
			[
			  "id"=> 1497,
			  "nome"=> "Nicósia",
			  "pais_id"=> 55
			],
			[
			  "id"=> 1545,
			  "nome"=> "Nucualofa",
			  "pais_id"=> 222
			],
			[
			  "id"=> 422,
			  "nome"=> "Asturias",
			  "pais_id"=> 68
			],
			[
			  "id"=> 824,
			  "nome"=> "Isles of Scilly",
			  "pais_id"=> 231
			],
			[
			  "id"=> 778,
			  "nome"=> "Kent",
			  "pais_id"=> 231
			],
			[
			  "id"=> 779,
			  "nome"=> "Kincardineshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 780,
			  "nome"=> "Kinross-Shire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 504,
			  "nome"=> "Oaxaca",
			  "pais_id"=> 156
			],
			[
			  "id"=> 369,
			  "nome"=> "Ogliastra",
			  "pais_id"=> 109
			],
			[
			  "id"=> 38,
			  "nome"=> "Ohio",
			  "pais_id"=> 233
			],
			[
			  "id"=> 39,
			  "nome"=> "Oklahoma",
			  "pais_id"=> 233
			],
			[
			  "id"=> 145,
			  "nome"=> "Omsk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 541,
			  "nome"=> "Ontario",
			  "pais_id"=> 38
			],
			[
			  "id"=> 371,
			  "nome"=> "Oristano",
			  "pais_id"=> 109
			],
			[
			  "id"=> 40,
			  "nome"=> "Oregon",
			  "pais_id"=> 233
			],
			[
			  "id"=> 602,
			  "nome"=> "Orissa",
			  "pais_id"=> 104
			],
			[
			  "id"=> 912,
			  "nome"=> "Oromia",
			  "pais_id"=> 69
			],
			[
			  "id"=> 453,
			  "nome"=> "Ourense (Orense)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 146,
			  "nome"=> "Orenburg Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 147,
			  "nome"=> "Oryol Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 859,
			  "nome"=> "Olt",
			  "pais_id"=> 188
			],
			[
			  "id"=> 370,
			  "nome"=> "Olbia-Tempio",
			  "pais_id"=> 109
			],
			[
			  "id"=> 526,
			  "nome"=> "Otago",
			  "pais_id"=> 170
			],
			[
			  "id"=> 956,
			  "nome"=> "Overijssel",
			  "pais_id"=> 165
			],
			[
			  "id"=> 935,
			  "nome"=> "Offaly",
			  "pais_id"=> 101
			],
			[
			  "id"=> 561,
			  "nome"=> "Formosa",
			  "pais_id"=> 10
			],
			[
			  "id"=> 454,
			  "nome"=> "Palencia",
			  "pais_id"=> 68
			],
			[
			  "id"=> 781,
			  "nome"=> "Kirkcudbrightshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 825,
			  "nome"=> "Lanarkshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 782,
			  "nome"=> "Lancashire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 783,
			  "nome"=> "Leicestershire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 784,
			  "nome"=> "Lincolnshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 373,
			  "nome"=> "Palermo",
			  "pais_id"=> 109
			],
			[
			  "id"=> 84,
			  "nome"=> "Pará",
			  "pais_id"=> 31
			],
			[
			  "id"=> 635,
			  "nome"=> "Papua",
			  "pais_id"=> 100
			],
			[
			  "id"=> 47,
			  "nome"=> "Pennsylvania",
			  "pais_id"=> 233
			],
			[
			  "id"=> 604,
			  "nome"=> "Punjab",
			  "pais_id"=> 104
			],
			[
			  "id"=> 636,
			  "nome"=> "Papua Barat",
			  "pais_id"=> 100
			],
			[
			  "id"=> 85,
			  "nome"=> "Paraíba",
			  "pais_id"=> 31
			],
			[
			  "id"=> 379,
			  "nome"=> "Piacenza",
			  "pais_id"=> 109
			],
			[
			  "id"=> 372,
			  "nome"=> "Padova",
			  "pais_id"=> 109
			],
			[
			  "id"=> 542,
			  "nome"=> "Prince Edward Island",
			  "pais_id"=> 38
			],
			[
			  "id"=> 87,
			  "nome"=> "Pernambuco",
			  "pais_id"=> 31
			],
			[
			  "id"=> 378,
			  "nome"=> "Pescara",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1129,
			  "nome"=> "Pedernales",
			  "pais_id"=> 61
			],
			[
			  "id"=> 1130,
			  "nome"=> "Peravia",
			  "pais_id"=> 61
			],
			[
			  "id"=> 149,
			  "nome"=> "Perm Krai",
			  "pais_id"=> 190
			],
			[
			  "id"=> 190,
			  "nome"=> "Petén",
			  "pais_id"=> 90
			],
			[
			  "id"=> 376,
			  "nome"=> "Perugia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 860,
			  "nome"=> "Prahova",
			  "pais_id"=> 188
			],
			[
			  "id"=> 476,
			  "nome"=> "Pahang",
			  "pais_id"=> 157
			],
			[
			  "id"=> 380,
			  "nome"=> "Pisa",
			  "pais_id"=> 109
			],
			[
			  "id"=> 88,
			  "nome"=> "Piauí",
			  "pais_id"=> 31
			],
			[
			  "id"=> 480,
			  "nome"=> "Putrajaya",
			  "pais_id"=> 157
			],
			[
			  "id"=> 478,
			  "nome"=> "Perlis",
			  "pais_id"=> 157
			],
			[
			  "id"=> 425,
			  "nome"=> "Illes Balears (Islas Baleares)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 382,
			  "nome"=> "Pordenone",
			  "pais_id"=> 109
			],
			[
			  "id"=> 479,
			  "nome"=> "Pulau Pinang",
			  "pais_id"=> 157
			],
			[
			  "id"=> 148,
			  "nome"=> "Penza Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 384,
			  "nome"=> "Prato",
			  "pais_id"=> 109
			],
			[
			  "id"=> 455,
			  "nome"=> "Pontevedra",
			  "pais_id"=> 68
			],
			[
			  "id"=> 1131,
			  "nome"=> "Puerto Plata",
			  "pais_id"=> 61
			],
			[
			  "id"=> 66,
			  "nome"=> "Puerto Rico",
			  "pais_id"=> 233
			],
			[
			  "id"=> 86,
			  "nome"=> "Paraná",
			  "pais_id"=> 31
			],
			[
			  "id"=> 374,
			  "nome"=> "Parma",
			  "pais_id"=> 109
			],
			[
			  "id"=> 150,
			  "nome"=> "Primorsky Krai",
			  "pais_id"=> 190
			],
			[
			  "id"=> 477,
			  "nome"=> "Perak",
			  "pais_id"=> 157
			],
			[
			  "id"=> 1421,
			  "nome"=> "Paris",
			  "pais_id"=> 75
			],
			[
			  "id"=> 151,
			  "nome"=> "Pskov Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 381,
			  "nome"=> "Pistoia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 288,
			  "nome"=> "Port Said",
			  "pais_id"=> 65
			],
			[
			  "id"=> 377,
			  "nome"=> "Pesaro e Urbino",
			  "pais_id"=> 109
			],
			[
			  "id"=> 505,
			  "nome"=> "Puebla",
			  "pais_id"=> 156
			],
			[
			  "id"=> 673,
			  "nome"=> "Putumayo",
			  "pais_id"=> 49
			],
			[
			  "id"=> 375,
			  "nome"=> "Pavia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 65,
			  "nome"=> "Palau",
			  "pais_id"=> 233
			],
			[
			  "id"=> 603,
			  "nome"=> "Puducherry",
			  "pais_id"=> 104
			],
			[
			  "id"=> 383,
			  "nome"=> "Potenza",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1512,
			  "nome"=> "Papete",
			  "pais_id"=> 174
			],
			[
			  "id"=> 1533,
			  "nome"=> "Paramaribo",
			  "pais_id"=> 206
			],
			[
			  "id"=> 1523,
			  "nome"=> "Phillipsburg",
			  "pais_id"=> 210
			],
			[
			  "id"=> 1546,
			  "nome"=> "Porto Vila",
			  "pais_id"=> 242
			],
			[
			  "id"=> 1498,
			  "nome"=> "Praga",
			  "pais_id"=> 56
			],
			[
			  "id"=> 567,
			  "nome"=> "Neuquén",
			  "pais_id"=> 10
			],
			[
			  "id"=> 826,
			  "nome"=> "London",
			  "pais_id"=> 231
			],
			[
			  "id"=> 785,
			  "nome"=> "Merseyside",
			  "pais_id"=> 231
			],
			[
			  "id"=> 786,
			  "nome"=> "Mid Glamorgan",
			  "pais_id"=> 231
			],
			[
			  "id"=> 827,
			  "nome"=> "Midlothian",
			  "pais_id"=> 231
			],
			[
			  "id"=> 787,
			  "nome"=> "Middlesex",
			  "pais_id"=> 231
			],
			[
			  "id"=> 543,
			  "nome"=> "Quebec",
			  "pais_id"=> 38
			],
			[
			  "id"=> 4,
			  "nome"=> "Queensland",
			  "pais_id"=> 13
			],
			[
			  "id"=> 191,
			  "nome"=> "Quetzaltenango",
			  "pais_id"=> 90
			],
			[
			  "id"=> 507,
			  "nome"=> "Querétaro",
			  "pais_id"=> 156
			],
			[
			  "id"=> 665,
			  "nome"=> "Quindio",
			  "pais_id"=> 49
			],
			[
			  "id"=> 192,
			  "nome"=> "Quiché",
			  "pais_id"=> 90
			],
			[
			  "id"=> 1504,
			  "nome"=> "Quito",
			  "pais_id"=> 63
			],
			[
			  "id"=> 568,
			  "nome"=> "Río Negro",
			  "pais_id"=> 10
			],
			[
			  "id"=> 788,
			  "nome"=> "Morayshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 789,
			  "nome"=> "Nairnshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 828,
			  "nome"=> "Norfolk",
			  "pais_id"=> 231
			],
			[
			  "id"=> 790,
			  "nome"=> "North Humberside",
			  "pais_id"=> 231
			],
			[
			  "id"=> 791,
			  "nome"=> "North Yorkshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 386,
			  "nome"=> "Ravenna",
			  "pais_id"=> 109
			],
			[
			  "id"=> 387,
			  "nome"=> "Reggio Calabria",
			  "pais_id"=> 109
			],
			[
			  "id"=> 388,
			  "nome"=> "Reggio Emilia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 193,
			  "nome"=> "Retalhuleu",
			  "pais_id"=> 90
			],
			[
			  "id"=> 385,
			  "nome"=> "Ragusa",
			  "pais_id"=> 109
			],
			[
			  "id"=> 48,
			  "nome"=> "Rhode Island",
			  "pais_id"=> 233
			],
			[
			  "id"=> 389,
			  "nome"=> "Rieti",
			  "pais_id"=> 109
			],
			[
			  "id"=> 637,
			  "nome"=> "Riau",
			  "pais_id"=> 100
			],
			[
			  "id"=> 666,
			  "nome"=> "Risaralda",
			  "pais_id"=> 49
			],
			[
			  "id"=> 605,
			  "nome"=> "Rajasthan",
			  "pais_id"=> 104
			],
			[
			  "id"=> 89,
			  "nome"=> "Rio de Janeiro",
			  "pais_id"=> 31
			],
			[
			  "id"=> 550,
			  "nome"=> "Ras al-Khaimah",
			  "pais_id"=> 2
			],
			[
			  "id"=> 391,
			  "nome"=> "Roma",
			  "pais_id"=> 109
			],
			[
			  "id"=> 90,
			  "nome"=> "Rio Grande do Norte",
			  "pais_id"=> 31
			],
			[
			  "id"=> 390,
			  "nome"=> "Rimini",
			  "pais_id"=> 109
			],
			[
			  "id"=> 936,
			  "nome"=> "Roscommon",
			  "pais_id"=> 101
			],
			[
			  "id"=> 92,
			  "nome"=> "Rondônia",
			  "pais_id"=> 31
			],
			[
			  "id"=> 392,
			  "nome"=> "Rovigo",
			  "pais_id"=> 109
			],
			[
			  "id"=> 506,
			  "nome"=> "Quintana Roo",
			  "pais_id"=> 156
			],
			[
			  "id"=> 152,
			  "nome"=> "Rostov Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 93,
			  "nome"=> "Roraima",
			  "pais_id"=> 31
			],
			[
			  "id"=> 91,
			  "nome"=> "Rio Grande do Sul",
			  "pais_id"=> 31
			],
			[
			  "id"=> 153,
			  "nome"=> "Ryazan Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1531,
			  "nome"=> "Ramala",
			  "pais_id"=> 182
			],
			[
			  "id"=> 1516,
			  "nome"=> "Riad",
			  "pais_id"=> 192
			],
			[
			  "id"=> 1503,
			  "nome"=> "Roseau",
			  "pais_id"=> 60
			],
			[
			  "id"=> 430,
			  "nome"=> "Cantabria",
			  "pais_id"=> 68
			],
			[
			  "id"=> 573,
			  "nome"=> "Santa Fe",
			  "pais_id"=> 10
			],
			[
			  "id"=> 792,
			  "nome"=> "Northamptonshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 793,
			  "nome"=> "Northumberland",
			  "pais_id"=> 231
			],
			[
			  "id"=> 794,
			  "nome"=> "Nottinghamshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 795,
			  "nome"=> "Oxfordshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 796,
			  "nome"=> "Peeblesshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 5,
			  "nome"=> "South Australia",
			  "pais_id"=> 13
			],
			[
			  "id"=> 393,
			  "nome"=> "Salerno",
			  "pais_id"=> 109
			],
			[
			  "id"=> 642,
			  "nome"=> "Sulawesi Utara",
			  "pais_id"=> 100
			],
			[
			  "id"=> 456,
			  "nome"=> "Salamanca",
			  "pais_id"=> 68
			],
			[
			  "id"=> 154,
			  "nome"=> "Sakha Republic (Yakutia)",
			  "pais_id"=> 190
			],
			[
			  "id"=> 194,
			  "nome"=> "Sacatepéquez",
			  "pais_id"=> 90
			],
			[
			  "id"=> 155,
			  "nome"=> "Sakhalin Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1133,
			  "nome"=> "Samaná",
			  "pais_id"=> 61
			],
			[
			  "id"=> 156,
			  "nome"=> "Samara Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 667,
			  "nome"=> "Santander",
			  "pais_id"=> 49
			],
			[
			  "id"=> 674,
			  "nome"=> "Archipiélago de San Andrés, Providencia y Santa Catalina",
			  "pais_id"=> 49
			],
			[
			  "id"=> 158,
			  "nome"=> "Saratov Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 643,
			  "nome"=> "Sumatra Barat",
			  "pais_id"=> 100
			],
			[
			  "id"=> 861,
			  "nome"=> "Sibiu",
			  "pais_id"=> 188
			],
			[
			  "id"=> 481,
			  "nome"=> "Sabah",
			  "pais_id"=> 157
			],
			[
			  "id"=> 94,
			  "nome"=> "Santa Catarina",
			  "pais_id"=> 31
			],
			[
			  "id"=> 1134,
			  "nome"=> "San Cristóbal",
			  "pais_id"=> 61
			],
			[
			  "id"=> 49,
			  "nome"=> "South Carolina",
			  "pais_id"=> 233
			],
			[
			  "id"=> 1145,
			  "nome"=> "Santo Domingo",
			  "pais_id"=> 61
			],
			[
			  "id"=> 50,
			  "nome"=> "South Dakota",
			  "pais_id"=> 233
			],
			[
			  "id"=> 96,
			  "nome"=> "Sergipe",
			  "pais_id"=> 31
			],
			[
			  "id"=> 459,
			  "nome"=> "Sevilla",
			  "pais_id"=> 68
			],
			[
			  "id"=> 159,
			  "nome"=> "Republic of North Ossetia–Alania",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1361,
			  "nome"=> "Stockholms län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1365,
			  "nome"=> "Västerbottens län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1359,
			  "nome"=> "Norrbottens län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1363,
			  "nome"=> "Uppsala län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1362,
			  "nome"=> "Södermanlands län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1370,
			  "nome"=> "Östergötlands län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1356,
			  "nome"=> "Jönköpings län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1358,
			  "nome"=> "Kronobergs län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1357,
			  "nome"=> "Kalmar län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1352,
			  "nome"=> "Gotlands län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1350,
			  "nome"=> "Blekinge län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1360,
			  "nome"=> "Skåne län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1354,
			  "nome"=> "Hallands län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1368,
			  "nome"=> "Västra Götalands län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1364,
			  "nome"=> "Värmlands län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1369,
			  "nome"=> "Örebro län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1367,
			  "nome"=> "Västmanlands län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1351,
			  "nome"=> "Dalarnas län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1353,
			  "nome"=> "Gävleborgs län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1366,
			  "nome"=> "Västernorrlands län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 1355,
			  "nome"=> "Jämtlands län",
			  "pais_id"=> 196
			],
			[
			  "id"=> 641,
			  "nome"=> "Sulawesi Tenggara",
			  "pais_id"=> 100
			],
			[
			  "id"=> 458,
			  "nome"=> "Segovia",
			  "pais_id"=> 68
			],
			[
			  "id"=> 483,
			  "nome"=> "Selangor",
			  "pais_id"=> 157
			],
			[
			  "id"=> 551,
			  "nome"=> "Sharjah",
			  "pais_id"=> 2
			],
			[
			  "id"=> 296,
			  "nome"=> "Sohag",
			  "pais_id"=> 65
			],
			[
			  "id"=> 282,
			  "nome"=> "Al Sharqia",
			  "pais_id"=> 65
			],
			[
			  "id"=> 396,
			  "nome"=> "Siena",
			  "pais_id"=> 109
			],
			[
			  "id"=> 295,
			  "nome"=> "North Sinai",
			  "pais_id"=> 65
			],
			[
			  "id"=> 508,
			  "nome"=> "Sinaloa",
			  "pais_id"=> 156
			],
			[
			  "id"=> 1135,
			  "nome"=> "San Juan",
			  "pais_id"=> 61
			],
			[
			  "id"=> 862,
			  "nome"=> "Sălaj",
			  "pais_id"=> 188
			],
			[
			  "id"=> 1144,
			  "nome"=> "San José de Ocoa",
			  "pais_id"=> 61
			],
			[
			  "id"=> 606,
			  "nome"=> "Sikkim",
			  "pais_id"=> 104
			],
			[
			  "id"=> 544,
			  "nome"=> "Saskatchewan",
			  "pais_id"=> 38
			],
			[
			  "id"=> 509,
			  "nome"=> "San Luis Potosí",
			  "pais_id"=> 156
			],
			[
			  "id"=> 913,
			  "nome"=> "Somalia",
			  "pais_id"=> 69
			],
			[
			  "id"=> 863,
			  "nome"=> "Satu Mare",
			  "pais_id"=> 188
			],
			[
			  "id"=> 195,
			  "nome"=> "San Marcos",
			  "pais_id"=> 90
			],
			[
			  "id"=> 160,
			  "nome"=> "Smolensk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 639,
			  "nome"=> "Sulawesi Selatan",
			  "pais_id"=> 100
			],
			[
			  "id"=> 937,
			  "nome"=> "Sligo",
			  "pais_id"=> 101
			],
			[
			  "id"=> 398,
			  "nome"=> "Sondrio",
			  "pais_id"=> 109
			],
			[
			  "id"=> 460,
			  "nome"=> "Soria",
			  "pais_id"=> 68
			],
			[
			  "id"=> 197,
			  "nome"=> "Sololá",
			  "pais_id"=> 90
			],
			[
			  "id"=> 510,
			  "nome"=> "Sonora",
			  "pais_id"=> 156
			],
			[
			  "id"=> 349,
			  "nome"=> "La Spezia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 95,
			  "nome"=> "São Paulo",
			  "pais_id"=> 31
			],
			[
			  "id"=> 914,
			  "nome"=> "Southern Peoples, Nations, and Nationalities",
			  "pais_id"=> 69
			],
			[
			  "id"=> 157,
			  "nome"=> "Saint Petersburg",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1136,
			  "nome"=> "San Pedro de Macorís",
			  "pais_id"=> 61
			],
			[
			  "id"=> 638,
			  "nome"=> "Sulawesi Barat",
			  "pais_id"=> 100
			],
			[
			  "id"=> 397,
			  "nome"=> "Siracusa",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1137,
			  "nome"=> "Sánchez Ramírez",
			  "pais_id"=> 61
			],
			[
			  "id"=> 196,
			  "nome"=> "Santa Rosa",
			  "pais_id"=> 90
			],
			[
			  "id"=> 1139,
			  "nome"=> "Santiago Rodríguez",
			  "pais_id"=> 61
			],
			[
			  "id"=> 394,
			  "nome"=> "Sassari",
			  "pais_id"=> 109
			],
			[
			  "id"=> 439,
			  "nome"=> "Gipuzkoa (Guipúzcoa)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 644,
			  "nome"=> "Sumatra Selatan",
			  "pais_id"=> 100
			],
			[
			  "id"=> 640,
			  "nome"=> "Sulawesi Tengah",
			  "pais_id"=> 100
			],
			[
			  "id"=> 161,
			  "nome"=> "Stavropol Krai",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1138,
			  "nome"=> "Santiago",
			  "pais_id"=> 61
			],
			[
			  "id"=> 527,
			  "nome"=> "Southland",
			  "pais_id"=> 170
			],
			[
			  "id"=> 645,
			  "nome"=> "Sumatra Utara",
			  "pais_id"=> 100
			],
			[
			  "id"=> 283,
			  "nome"=> "6th of October",
			  "pais_id"=> 65
			],
			[
			  "id"=> 399,
			  "nome"=> "Sud Sardegna",
			  "pais_id"=> 109
			],
			[
			  "id"=> 668,
			  "nome"=> "Sucre",
			  "pais_id"=> 49
			],
			[
			  "id"=> 198,
			  "nome"=> "Suchitepéquez",
			  "pais_id"=> 90
			],
			[
			  "id"=> 284,
			  "nome"=> "Suez",
			  "pais_id"=> 65
			],
			[
			  "id"=> 395,
			  "nome"=> "Savona",
			  "pais_id"=> 109
			],
			[
			  "id"=> 864,
			  "nome"=> "Suceava",
			  "pais_id"=> 188
			],
			[
			  "id"=> 162,
			  "nome"=> "Sverdlovsk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 482,
			  "nome"=> "Sarawak",
			  "pais_id"=> 157
			],
			[
			  "id"=> 1494,
			  "nome"=> "Saint-Pierre",
			  "pais_id"=> 179
			],
			[
			  "id"=> 1522,
			  "nome"=> "Singapore",
			  "pais_id"=> 197
			],
			[
			  "id"=> 1527,
			  "nome"=> "Somalia",
			  "pais_id"=> 205
			],
			[
			  "id"=> 1505,
			  "nome"=> "São Salvador",
			  "pais_id"=> 209
			],
			[
			  "id"=> 1508,
			  "nome"=> "Stanley",
			  "pais_id"=> 72
			],
			[
			  "id"=> 1537,
			  "nome"=> "São Tomé",
			  "pais_id"=> 208
			],
			[
			  "id"=> 1529,
			  "nome"=> "Seul",
			  "pais_id"=> 121
			],
			[
			  "id"=> 1510,
			  "nome"=> "Suva",
			  "pais_id"=> 71
			],
			[
			  "id"=> 461,
			  "nome"=> "Tarragona",
			  "pais_id"=> 68
			],
			[
			  "id"=> 576,
			  "nome"=> "Tucumán",
			  "pais_id"=> 10
			],
			[
			  "id"=> 797,
			  "nome"=> "Perthshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 798,
			  "nome"=> "Powys",
			  "pais_id"=> 231
			],
			[
			  "id"=> 799,
			  "nome"=> "Renfrewshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 800,
			  "nome"=> "Ross-Shire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 801,
			  "nome"=> "Roxburghshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 400,
			  "nome"=> "Taranto",
			  "pais_id"=> 109
			],
			[
			  "id"=> 164,
			  "nome"=> "Republic of Tatarstan",
			  "pais_id"=> 190
			],
			[
			  "id"=> 511,
			  "nome"=> "Tabasco",
			  "pais_id"=> 156
			],
			[
			  "id"=> 513,
			  "nome"=> "Tamaulipas",
			  "pais_id"=> 156
			],
			[
			  "id"=> 163,
			  "nome"=> "Tambov Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 529,
			  "nome"=> "Tasman",
			  "pais_id"=> 170
			],
			[
			  "id"=> 6,
			  "nome"=> "Tasmania",
			  "pais_id"=> 13
			],
			[
			  "id"=> 401,
			  "nome"=> "Teramo",
			  "pais_id"=> 109
			],
			[
			  "id"=> 947,
			  "nome"=> "Tyrone",
			  "pais_id"=> 101
			],
			[
			  "id"=> 462,
			  "nome"=> "Teruel",
			  "pais_id"=> 68
			],
			[
			  "id"=> 457,
			  "nome"=> "Santa Cruz de Tenerife",
			  "pais_id"=> 68
			],
			[
			  "id"=> 915,
			  "nome"=> "Tigray",
			  "pais_id"=> 69
			],
			[
			  "id"=> 528,
			  "nome"=> "Taranaki",
			  "pais_id"=> 170
			],
			[
			  "id"=> 865,
			  "nome"=> "Tulcea",
			  "pais_id"=> 188
			],
			[
			  "id"=> 512,
			  "nome"=> "Tlaxcala",
			  "pais_id"=> 156
			],
			[
			  "id"=> 866,
			  "nome"=> "Timiș",
			  "pais_id"=> 188
			],
			[
			  "id"=> 405,
			  "nome"=> "Trento",
			  "pais_id"=> 109
			],
			[
			  "id"=> 51,
			  "nome"=> "Tennessee",
			  "pais_id"=> 233
			],
			[
			  "id"=> 607,
			  "nome"=> "Tamil Nadu",
			  "pais_id"=> 104
			],
			[
			  "id"=> 463,
			  "nome"=> "Toledo",
			  "pais_id"=> 68
			],
			[
			  "id"=> 97,
			  "nome"=> "Tocantins",
			  "pais_id"=> 31
			],
			[
			  "id"=> 403,
			  "nome"=> "Torino",
			  "pais_id"=> 109
			],
			[
			  "id"=> 669,
			  "nome"=> "Tolima",
			  "pais_id"=> 49
			],
			[
			  "id"=> 165,
			  "nome"=> "Tomsk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 199,
			  "nome"=> "Totonicapán",
			  "pais_id"=> 90
			],
			[
			  "id"=> 404,
			  "nome"=> "Trapani",
			  "pais_id"=> 109
			],
			[
			  "id"=> 609,
			  "nome"=> "Tripura",
			  "pais_id"=> 104
			],
			[
			  "id"=> 867,
			  "nome"=> "Teleorman",
			  "pais_id"=> 188
			],
			[
			  "id"=> 402,
			  "nome"=> "Terni",
			  "pais_id"=> 109
			],
			[
			  "id"=> 938,
			  "nome"=> "Tipperary",
			  "pais_id"=> 101
			],
			[
			  "id"=> 484,
			  "nome"=> "Terengganu",
			  "pais_id"=> 157
			],
			[
			  "id"=> 1423,
			  "nome"=> "Tirana",
			  "pais_id"=> 6
			],
			[
			  "id"=> 608,
			  "nome"=> "Telangana",
			  "pais_id"=> 104
			],
			[
			  "id"=> 407,
			  "nome"=> "Trieste",
			  "pais_id"=> 109
			],
			[
			  "id"=> 166,
			  "nome"=> "Tula Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 406,
			  "nome"=> "Treviso",
			  "pais_id"=> 109
			],
			[
			  "id"=> 167,
			  "nome"=> "Tver Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 52,
			  "nome"=> "Texas",
			  "pais_id"=> 233
			],
			[
			  "id"=> 169,
			  "nome"=> "Tyva Republic",
			  "pais_id"=> 190
			],
			[
			  "id"=> 168,
			  "nome"=> "Tyumen Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 1538,
			  "nome"=> "Taipé",
			  "pais_id"=> 227
			],
			[
			  "id"=> 1509,
			  "nome"=> "Tórshavn",
			  "pais_id"=> 74
			],
			[
			  "id"=> 557,
			  "nome"=> "Chubut",
			  "pais_id"=> 10
			],
			[
			  "id"=> 802,
			  "nome"=> "Selkirkshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 803,
			  "nome"=> "Shropshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 804,
			  "nome"=> "Somerset",
			  "pais_id"=> 231
			],
			[
			  "id"=> 805,
			  "nome"=> "South Glamorgan",
			  "pais_id"=> 231
			],
			[
			  "id"=> 170,
			  "nome"=> "Udmurtia",
			  "pais_id"=> 190
			],
			[
			  "id"=> 408,
			  "nome"=> "Udine",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1417,
			  "nome"=> "Uíge",
			  "pais_id"=> 8
			],
			[
			  "id"=> 611,
			  "nome"=> "Uttarakhand",
			  "pais_id"=> 104
			],
			[
			  "id"=> 171,
			  "nome"=> "Ulyanovsk Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 610,
			  "nome"=> "Uttar Pradesh",
			  "pais_id"=> 104
			],
			[
			  "id"=> 552,
			  "nome"=> "Umm al-Quwain",
			  "pais_id"=> 2
			],
			[
			  "id"=> 53,
			  "nome"=> "Utah",
			  "pais_id"=> 233
			],
			[
			  "id"=> 957,
			  "nome"=> "Utrecht",
			  "pais_id"=> 165
			],
			[
			  "id"=> 464,
			  "nome"=> "València (Valencia)",
			  "pais_id"=> 68
			],
			[
			  "id"=> 575,
			  "nome"=> "Tierra del Fuego",
			  "pais_id"=> 10
			],
			[
			  "id"=> 806,
			  "nome"=> "South Humberside",
			  "pais_id"=> 231
			],
			[
			  "id"=> 807,
			  "nome"=> "South Yorkshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 808,
			  "nome"=> "Staffordshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 809,
			  "nome"=> "Stirlingshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 810,
			  "nome"=> "Suffolk",
			  "pais_id"=> 231
			],
			[
			  "id"=> 409,
			  "nome"=> "Varese",
			  "pais_id"=> 109
			],
			[
			  "id"=> 55,
			  "nome"=> "Virginia",
			  "pais_id"=> 233
			],
			[
			  "id"=> 465,
			  "nome"=> "Valladolid",
			  "pais_id"=> 68
			],
			[
			  "id"=> 670,
			  "nome"=> "Valle del Cauca",
			  "pais_id"=> 49
			],
			[
			  "id"=> 1140,
			  "nome"=> "Valverde",
			  "pais_id"=> 61
			],
			[
			  "id"=> 678,
			  "nome"=> "Vaupés",
			  "pais_id"=> 49
			],
			[
			  "id"=> 411,
			  "nome"=> "Verbano-Cusio-Ossola",
			  "pais_id"=> 109
			],
			[
			  "id"=> 412,
			  "nome"=> "Vercelli",
			  "pais_id"=> 109
			],
			[
			  "id"=> 410,
			  "nome"=> "Venezia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 514,
			  "nome"=> "Veracruz",
			  "pais_id"=> 156
			],
			[
			  "id"=> 173,
			  "nome"=> "Volgograd Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 418,
			  "nome"=> "Araba/Álava",
			  "pais_id"=> 68
			],
			[
			  "id"=> 415,
			  "nome"=> "Vicenza",
			  "pais_id"=> 109
			],
			[
			  "id"=> 67,
			  "nome"=> "Virgin Islands",
			  "pais_id"=> 233
			],
			[
			  "id"=> 7,
			  "nome"=> "Victoria",
			  "pais_id"=> 13
			],
			[
			  "id"=> 679,
			  "nome"=> "Vichada",
			  "pais_id"=> 49
			],
			[
			  "id"=> 868,
			  "nome"=> "Vâlcea",
			  "pais_id"=> 188
			],
			[
			  "id"=> 172,
			  "nome"=> "Vladimir Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 174,
			  "nome"=> "Vologda Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 869,
			  "nome"=> "Vrancea",
			  "pais_id"=> 188
			],
			[
			  "id"=> 1080,
			  "nome"=> "Lai Châu",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1079,
			  "nome"=> "Lào Cai",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1069,
			  "nome"=> "Hà Giang",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1055,
			  "nome"=> "Cao Bằng",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1094,
			  "nome"=> "Sơn La",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1106,
			  "nome"=> "Yên Bái",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1101,
			  "nome"=> "Tuyên Quang",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1082,
			  "nome"=> "Lạng Sơn",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1090,
			  "nome"=> "Quảng Ninh",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1065,
			  "nome"=> "Hòa Bình",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1084,
			  "nome"=> "Ninh Bình",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1096,
			  "nome"=> "Thái Bình",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1098,
			  "nome"=> "Thanh Hóa",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1083,
			  "nome"=> "Nghệ An",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1073,
			  "nome"=> "Hà Tĩnh",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1089,
			  "nome"=> "Quảng Bình",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1093,
			  "nome"=> "Quảng Trị",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1102,
			  "nome"=> "Thừa Thiên - Huế",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1091,
			  "nome"=> "Quảng Nam",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1077,
			  "nome"=> "Kon Tum",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1092,
			  "nome"=> "Quảng Ngãi",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1064,
			  "nome"=> "Gia Lai",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1046,
			  "nome"=> "Bình Định",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1088,
			  "nome"=> "Phú Yên",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1059,
			  "nome"=> "Đắk Lắk",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1076,
			  "nome"=> "Khánh Hòa",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1081,
			  "nome"=> "Lâm Đồng",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1086,
			  "nome"=> "Ninh Thuận",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1100,
			  "nome"=> "Tây Ninh",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1061,
			  "nome"=> "Đồng Nai",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1053,
			  "nome"=> "Bình Thuận",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1078,
			  "nome"=> "Long An",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1052,
			  "nome"=> "Bà Rịa - Vũng Tàu",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1044,
			  "nome"=> "An Giang",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1063,
			  "nome"=> "Đồng Tháp",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1097,
			  "nome"=> "Tiền Giang",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1075,
			  "nome"=> "Kiên Giang",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1104,
			  "nome"=> "Vĩnh Long",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1054,
			  "nome"=> "Bến Tre",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1103,
			  "nome"=> "Trà Vinh",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1095,
			  "nome"=> "Sóc Trăng",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1048,
			  "nome"=> "Bắc Kạn",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1047,
			  "nome"=> "Bắc Giang",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1049,
			  "nome"=> "Bạc Liêu",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1050,
			  "nome"=> "Bắc Ninh",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1045,
			  "nome"=> "Bình Dương",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1051,
			  "nome"=> "Bình Phước",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1056,
			  "nome"=> "Cà Mau",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1067,
			  "nome"=> "Hải Dương",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1071,
			  "nome"=> "Hà Nam",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1074,
			  "nome"=> "Hưng Yên",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1085,
			  "nome"=> "Nam Định",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1087,
			  "nome"=> "Phú Thọ",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1099,
			  "nome"=> "Thái Nguyên",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1105,
			  "nome"=> "Vĩnh Phúc",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1058,
			  "nome"=> "Điện Biên",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1062,
			  "nome"=> "Đắk Nông",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1068,
			  "nome"=> "Hậu Giang",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1057,
			  "nome"=> "TP Cần Thơ",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1060,
			  "nome"=> "TP Đà Nẵng",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1070,
			  "nome"=> "Hà Nội",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1072,
			  "nome"=> "TP Hải Phòng",
			  "pais_id"=> 241
			],
			[
			  "id"=> 1066,
			  "nome"=> "TP Hồ Chí Minh",
			  "pais_id"=> 241
			],
			[
			  "id"=> 175,
			  "nome"=> "Voronezh Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 413,
			  "nome"=> "Verona",
			  "pais_id"=> 109
			],
			[
			  "id"=> 361,
			  "nome"=> "Medio Campidano",
			  "pais_id"=> 109
			],
			[
			  "id"=> 870,
			  "nome"=> "Vaslui",
			  "pais_id"=> 188
			],
			[
			  "id"=> 416,
			  "nome"=> "Viterbo",
			  "pais_id"=> 109
			],
			[
			  "id"=> 54,
			  "nome"=> "Vermont",
			  "pais_id"=> 233
			],
			[
			  "id"=> 414,
			  "nome"=> "Vibo Valentia",
			  "pais_id"=> 109
			],
			[
			  "id"=> 1520,
			  "nome"=> "Victoria",
			  "pais_id"=> 194
			],
			[
			  "id"=> 1518,
			  "nome"=> "Viena",
			  "pais_id"=> 12
			],
			[
			  "id"=> 559,
			  "nome"=> "Corrientes",
			  "pais_id"=> 10
			],
			[
			  "id"=> 811,
			  "nome"=> "Surrey",
			  "pais_id"=> 231
			],
			[
			  "id"=> 812,
			  "nome"=> "Sutherland",
			  "pais_id"=> 231
			],
			[
			  "id"=> 813,
			  "nome"=> "Tyne and Wear",
			  "pais_id"=> 231
			],
			[
			  "id"=> 814,
			  "nome"=> "Warwickshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 815,
			  "nome"=> "West Glamorgan",
			  "pais_id"=> 231
			],
			[
			  "id"=> 56,
			  "nome"=> "Washington",
			  "pais_id"=> 233
			],
			[
			  "id"=> 8,
			  "nome"=> "Western Australia",
			  "pais_id"=> 13
			],
			[
			  "id"=> 281,
			  "nome"=> "New Valley",
			  "pais_id"=> 65
			],
			[
			  "id"=> 612,
			  "nome"=> "West Bengal",
			  "pais_id"=> 104
			],
			[
			  "id"=> 305,
			  "nome"=> "Western Cape",
			  "pais_id"=> 247
			],
			[
			  "id"=> 921,
			  "nome"=> "Waterford",
			  "pais_id"=> 101
			],
			[
			  "id"=> 531,
			  "nome"=> "Wellington",
			  "pais_id"=> 170
			],
			[
			  "id"=> 939,
			  "nome"=> "Westmeath",
			  "pais_id"=> 101
			],
			[
			  "id"=> 58,
			  "nome"=> "Wisconsin",
			  "pais_id"=> 233
			],
			[
			  "id"=> 530,
			  "nome"=> "Waikato",
			  "pais_id"=> 170
			],
			[
			  "id"=> 532,
			  "nome"=> "West Coast",
			  "pais_id"=> 170
			],
			[
			  "id"=> 57,
			  "nome"=> "West Virginia",
			  "pais_id"=> 233
			],
			[
			  "id"=> 941,
			  "nome"=> "Wicklow",
			  "pais_id"=> 101
			],
			[
			  "id"=> 940,
			  "nome"=> "Wexford",
			  "pais_id"=> 101
			],
			[
			  "id"=> 59,
			  "nome"=> "Wyoming",
			  "pais_id"=> 233
			],
			[
			  "id"=> 1491,
			  "nome"=> "Willemstad",
			  "pais_id"=> 53
			],
			[
			  "id"=> 558,
			  "nome"=> "Córdoba",
			  "pais_id"=> 10
			],
			[
			  "id"=> 816,
			  "nome"=> "West Lothian",
			  "pais_id"=> 231
			],
			[
			  "id"=> 817,
			  "nome"=> "West Midlands",
			  "pais_id"=> 231
			],
			[
			  "id"=> 818,
			  "nome"=> "West Sussex",
			  "pais_id"=> 231
			],
			[
			  "id"=> 819,
			  "nome"=> "West Yorkshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 820,
			  "nome"=> "Wigtownshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 562,
			  "nome"=> "Jujuy",
			  "pais_id"=> 10
			],
			[
			  "id"=> 821,
			  "nome"=> "Wiltshire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 822,
			  "nome"=> "Worcestershire",
			  "pais_id"=> 231
			],
			[
			  "id"=> 176,
			  "nome"=> "Yamalo-Nenets Autonomous Okrug",
			  "pais_id"=> 190
			],
			[
			  "id"=> 177,
			  "nome"=> "Yaroslavl Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 178,
			  "nome"=> "Jewish Autonomous Oblast",
			  "pais_id"=> 190
			],
			[
			  "id"=> 646,
			  "nome"=> "Yogyakarta",
			  "pais_id"=> 100
			],
			[
			  "id"=> 545,
			  "nome"=> "Yukon",
			  "pais_id"=> 38
			],
			[
			  "id"=> 515,
			  "nome"=> "Yucatán",
			  "pais_id"=> 156
			],
			[
			  "id"=> 1499,
			  "nome"=> "Yamussucro",
			  "pais_id"=> 44
			],
			[
			  "id"=> 572,
			  "nome"=> "Santa Cruz",
			  "pais_id"=> 10
			],
			[
			  "id"=> 468,
			  "nome"=> "Zaragoza",
			  "pais_id"=> 68
			],
			[
			  "id"=> 467,
			  "nome"=> "Zamora",
			  "pais_id"=> 68
			],
			[
			  "id"=> 516,
			  "nome"=> "Zacatecas",
			  "pais_id"=> 156
			],
			[
			  "id"=> 200,
			  "nome"=> "Zacapa",
			  "pais_id"=> 90
			],
			[
			  "id"=> 1418,
			  "nome"=> "Zaire",
			  "pais_id"=> 8
			],
			[
			  "id"=> 958,
			  "nome"=> "Zeeland",
			  "pais_id"=> 165
			],
			[
			  "id"=> 959,
			  "nome"=> "Zuid-Holland",
			  "pais_id"=> 165
			],
			[
			  "id"=> 1489,
			  "nome"=> "Zagrebe",
			  "pais_id"=> 97
			],
			[
			  "id"=> 1469,
			  "nome"=> "Adamstown",
			  "pais_id"=> 180
			],
			[
			  "id"=> 1467,
			  "nome"=> "Assunção",
			  "pais_id"=> 185
			],
			[
			  "id"=> 1432,
			  "nome"=> "Baku",
			  "pais_id"=> 16
			],
			[
			  "id"=> 1476,
			  "nome"=> "Bangui",
			  "pais_id"=> 40
			],
			[
			  "id"=> 1438,
			  "nome"=> "Belmopã",
			  "pais_id"=> 37
			],
			[
			  "id"=> 1436,
			  "nome"=> "Bridgetown",
			  "pais_id"=> 18
			],
			[
			  "id"=> 1482,
			  "nome"=> "Basseterre",
			  "pais_id"=> 119
			],
			[
			  "id"=> 1446,
			  "nome"=> "Bandar Seri Begawan",
			  "pais_id"=> 28
			],
			[
			  "id"=> 1450,
			  "nome"=> "Charlotte Amalie",
			  "pais_id"=> 240
			],
			[
			  "id"=> 1465,
			  "nome"=> "Cidade do Panamá",
			  "pais_id"=> 172
			],
			[
			  "id"=> 1448,
			  "nome"=> "Caracas",
			  "pais_id"=> 238
			],
			[
			  "id"=> 1435,
			  "nome"=> "Daca",
			  "pais_id"=> 19
			],
			[
			  "id"=> 1517,
			  "nome"=> "Dakar",
			  "pais_id"=> 204
			],
			[
			  "id"=> 1445,
			  "nome"=> "Diego Garcia",
			  "pais_id"=> 105
			],
			[
			  "id"=> 1483,
			  "nome"=> "Djamena",
			  "pais_id"=> 214
			],
			[
			  "id"=> 1477,
			  "nome"=> "Doha",
			  "pais_id"=> 186
			],
			[
			  "id"=> 1452,
			  "nome"=> "El Aiune",
			  "pais_id"=> 66
			],
			[
			  "id"=> 1430,
			  "nome"=> "Erevan",
			  "pais_id"=> 7
			],
			[
			  "id"=> 1484,
			  "nome"=> "Flying Fish Cove",
			  "pais_id"=> 54
			],
			[
			  "id"=> 1521,
			  "nome"=> "Freetown",
			  "pais_id"=> 202
			],
			[
			  "id"=> 1444,
			  "nome"=> "Gaborone",
			  "pais_id"=> 35
			],
			[
			  "id"=> 1475,
			  "nome"=> "George Town",
			  "pais_id"=> 123
			],
			[
			  "id"=> 1460,
			  "nome"=> "Gitega",
			  "pais_id"=> 24
			],
			[
			  "id"=> 1480,
			  "nome"=> "Gustávia",
			  "pais_id"=> 26
			],
			[
			  "id"=> 1440,
			  "nome"=> "Hamilton",
			  "pais_id"=> 27
			],
			[
			  "id"=> 1455,
			  "nome"=> "Harare",
			  "pais_id"=> 249
			],
			[
			  "id"=> 1464,
			  "nome"=> "Islamabade",
			  "pais_id"=> 177
			],
			[
			  "id"=> 1481,
			  "nome"=> "Jamestown",
			  "pais_id"=> 198
			],
			[
			  "id"=> 1426,
			  "nome"=> "Kabul",
			  "pais_id"=> 3
			],
			[
			  "id"=> 1478,
			  "nome"=> "Kigali",
			  "pais_id"=> 191
			],
			[
			  "id"=> 1458,
			  "nome"=> "Kingston",
			  "pais_id"=> 162
			],
			[
			  "id"=> 1442,
			  "nome"=> "La Paz",
			  "pais_id"=> 29
			],
			[
			  "id"=> 1457,
			  "nome"=> "Alofi",
			  "pais_id"=> 169
			],
			[
			  "id"=> 1454,
			  "nome"=> "Lusaka",
			  "pais_id"=> 248
			],
			[
			  "id"=> 1434,
			  "nome"=> "Manama",
			  "pais_id"=> 23
			],
			[
			  "id"=> 1468,
			  "nome"=> "Manila",
			  "pais_id"=> 176
			],
			[
			  "id"=> 1456,
			  "nome"=> "Mariehamn",
			  "pais_id"=> 15
			],
			[
			  "id"=> 1463,
			  "nome"=> "Mascate",
			  "pais_id"=> 171
			],
			[
			  "id"=> 1437,
			  "nome"=> "Minsk",
			  "pais_id"=> 36
			],
			[
			  "id"=> 1486,
			  "nome"=> "Moroni",
			  "pais_id"=> 118
			],
			[
			  "id"=> 1451,
			  "nome"=> "Mata-Utu",
			  "pais_id"=> 243
			],
			[
			  "id"=> 1433,
			  "nome"=> "Nassau",
			  "pais_id"=> 32
			],
			[
			  "id"=> 1431,
			  "nome"=> "Oranjestade",
			  "pais_id"=> 14
			],
			[
			  "id"=> 1472,
			  "nome"=> "Phnom Penh",
			  "pais_id"=> 116
			],
			[
			  "id"=> 1466,
			  "nome"=> "Port Moresby",
			  "pais_id"=> 175
			],
			[
			  "id"=> 1427,
			  "nome"=> "Pago Pago",
			  "pais_id"=> 11
			],
			[
			  "id"=> 1474,
			  "nome"=> "Praia",
			  "pais_id"=> 52
			],
			[
			  "id"=> 1439,
			  "nome"=> "Porto Novo",
			  "pais_id"=> 25
			],
			[
			  "id"=> 1461,
			  "nome"=> "Pyongyang",
			  "pais_id"=> 120
			],
			[
			  "id"=> 1449,
			  "nome"=> "Road Town",
			  "pais_id"=> 239
			],
			[
			  "id"=> 1453,
			  "nome"=> "Sanaã",
			  "pais_id"=> 245
			],
			[
			  "id"=> 1447,
			  "nome"=> "Sófia",
			  "pais_id"=> 22
			],
			[
			  "id"=> 1462,
			  "nome"=> "Saipan",
			  "pais_id"=> 148
			],
			[
			  "id"=> 1471,
			  "nome"=> "San Juan",
			  "pais_id"=> 181
			],
			[
			  "id"=> 1515,
			  "nome"=> "San Marino",
			  "pais_id"=> 203
			],
			[
			  "id"=> 1547,
			  "nome"=> "Saint Pierre",
			  "pais_id"=> 215
			],
			[
			  "id"=> 1443,
			  "nome"=> "Sarajevo",
			  "pais_id"=> 17
			],
			[
			  "id"=> 1479,
			  "nome"=> "Saint Denis",
			  "pais_id"=> 187
			],
			[
			  "id"=> 1429,
			  "nome"=> "Saint John",
			  "pais_id"=> 4
			],
			[
			  "id"=> 1428,
			  "nome"=> "The Valley",
			  "pais_id"=> 5
			],
			[
			  "id"=> 1441,
			  "nome"=> "Timbu",
			  "pais_id"=> 33
			],
			[
			  "id"=> 1459,
			  "nome"=> "Uagadugu",
			  "pais_id"=> 21
			],
			[
			  "id"=> 1470,
			  "nome"=> "Varsóvia",
			  "pais_id"=> 178
			],
			[
			  "id"=> 1485,
			  "nome"=> "West Island",
			  "pais_id"=> 39
			],
			[
			  "id"=> 1473,
			  "nome"=> "Yaoundé",
			  "pais_id"=> 47
			],
			[
			  "id"=> 1530,
			  "nome"=> "‎Sri Jaiavardenapura-Cota‎",
			  "pais_id"=> 129
			],
			[
			  "id"=> 871,
			  "nome"=> "北京市",
			  "pais_id"=> 48
			],
			[
			  "id"=> 891,
			  "nome"=> "河北省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 902,
			  "nome"=> "台湾省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 897,
			  "nome"=> "吉林省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 885,
			  "nome"=> "宁夏回族自治区",
			  "pais_id"=> 48
			],
			[
			  "id"=> 883,
			  "nome"=> "新疆维吾尔自治区",
			  "pais_id"=> 48
			],
			[
			  "id"=> 893,
			  "nome"=> "山西省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 889,
			  "nome"=> "广西壮族自治区",
			  "pais_id"=> 48
			],
			[
			  "id"=> 872,
			  "nome"=> "上海市",
			  "pais_id"=> 48
			],
			[
			  "id"=> 874,
			  "nome"=> "天津市",
			  "pais_id"=> 48
			],
			[
			  "id"=> 873,
			  "nome"=> "浙江省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 877,
			  "nome"=> "重庆市",
			  "pais_id"=> 48
			],
			[
			  "id"=> 903,
			  "nome"=> "香港特别行政区",
			  "pais_id"=> 48
			],
			[
			  "id"=> 884,
			  "nome"=> "湖南省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 894,
			  "nome"=> "云南省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 904,
			  "nome"=> "澳门特别行政区",
			  "pais_id"=> 48
			],
			[
			  "id"=> 888,
			  "nome"=> "海南省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 898,
			  "nome"=> "甘肃省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 875,
			  "nome"=> "安徽省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 886,
			  "nome"=> "广东省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 901,
			  "nome"=> "江苏省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 881,
			  "nome"=> "内蒙古自治区",
			  "pais_id"=> 48
			],
			[
			  "id"=> 887,
			  "nome"=> "西藏自治区",
			  "pais_id"=> 48
			],
			[
			  "id"=> 890,
			  "nome"=> "四川省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 880,
			  "nome"=> "河南省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 878,
			  "nome"=> "江西省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 895,
			  "nome"=> "辽宁省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 882,
			  "nome"=> "湖北省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 876,
			  "nome"=> "福建省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 896,
			  "nome"=> "陕西省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 900,
			  "nome"=> "青海省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 879,
			  "nome"=> "山东省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 899,
			  "nome"=> "黑龙江省",
			  "pais_id"=> 48
			],
			[
			  "id"=> 892,
			  "nome"=> "贵州省",
			  "pais_id"=> 48
			],
			[
				"id"=> 1548,
				"nome"=> "__OUTRO",
				"pais_id"=> 251
			  ]
		];
        foreach ($dados as $key => $value) {
        	provincias::create($value);
        }
    }
}

