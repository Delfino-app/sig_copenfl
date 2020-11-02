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
              "id"=> 3,
              "nome"=> "Afghanistan"
            ],
            [
              "id"=> 6,
              "nome"=> "Albania"
            ],
            [
              "id"=> 62,
              "nome"=> "Algeria"
            ],
            [
              "id"=> 11,
              "nome"=> "American Samoa"
            ],
            [
              "id"=> 1,
              "nome"=> "Andorra"
            ],
            [
              "id"=> 8,
              "nome"=> "Angola"
            ],
            [
              "id"=> 5,
              "nome"=> "Anguilla"
            ],
            [
              "id"=> 9,
              "nome"=> "Antarctica"
            ],
            [
              "id"=> 4,
              "nome"=> "Antigua and Barbuda"
            ],
            [
              "id"=> 10,
              "nome"=> "Argentina"
            ],
            [
              "id"=> 7,
              "nome"=> "Armenia"
            ],
            [
              "id"=> 14,
              "nome"=> "Aruba"
            ],
            [
              "id"=> 13,
              "nome"=> "Australia"
            ],
            [
              "id"=> 12,
              "nome"=> "Austria"
            ],
            [
              "id"=> 16,
              "nome"=> "Azerbaijan"
            ],
            [
              "id"=> 32,
              "nome"=> "Bahamas"
            ],
            [
              "id"=> 23,
              "nome"=> "Bahrain"
            ],
            [
              "id"=> 19,
              "nome"=> "Bangladesh"
            ],
            [
              "id"=> 18,
              "nome"=> "Barbados"
            ],
            [
              "id"=> 36,
              "nome"=> "Belarus"
            ],
            [
              "id"=> 20,
              "nome"=> "Belgium"
            ],
            [
              "id"=> 37,
              "nome"=> "Belize"
            ],
            [
              "id"=> 25,
              "nome"=> "Benin"
            ],
            [
              "id"=> 27,
              "nome"=> "Bermuda"
            ],
            [
              "id"=> 33,
              "nome"=> "Bhutan"
            ],
            [
              "id"=> 29,
              "nome"=> "Bolivia"
            ],
            [
              "id"=> 30,
              "nome"=> "Bonaire, Sint Eustatius and Saba"
            ],
            [
              "id"=> 17,
              "nome"=> "Bosnia and Herzegovina"
            ],
            [
              "id"=> 35,
              "nome"=> "Botswana"
            ],
            [
              "id"=> 34,
              "nome"=> "Bouvet Island"
            ],
            [
              "id"=> 31,
              "nome"=> "Brazil"
            ],
            [
              "id"=> 105,
              "nome"=> "British Indian Ocean Territory"
            ],
            [
              "id"=> 28,
              "nome"=> "Brunei Darussalam"
            ],
            [
              "id"=> 22,
              "nome"=> "Bulgaria"
            ],
            [
              "id"=> 21,
              "nome"=> "Burkina Faso"
            ],
            [
              "id"=> 24,
              "nome"=> "Burundi"
            ],
            [
              "id"=> 116,
              "nome"=> "Cambodia"
            ],
            [
              "id"=> 47,
              "nome"=> "Cameroon"
            ],
            [
              "id"=> 38,
              "nome"=> "Canada"
            ],
            [
              "id"=> 52,
              "nome"=> "Cape Verde"
            ],
            [
              "id"=> 123,
              "nome"=> "Cayman Islands"
            ],
            [
              "id"=> 40,
              "nome"=> "Central African Republic"
            ],
            [
              "id"=> 214,
              "nome"=> "Chad"
            ],
            [
              "id"=> 46,
              "nome"=> "Chile"
            ],
            [
              "id"=> 48,
              "nome"=> "China"
            ],
            [
              "id"=> 54,
              "nome"=> "Christmas Island"
            ],
            [
              "id"=> 39,
              "nome"=> "Cocos (Keeling) Islands"
            ],
            [
              "id"=> 49,
              "nome"=> "Colombia"
            ],
            [
              "id"=> 118,
              "nome"=> "Comoros"
            ],
            [
              "id"=> 42,
              "nome"=> "Congo"
            ],
            [
              "id"=> 45,
              "nome"=> "Cook Islands"
            ],
            [
              "id"=> 50,
              "nome"=> "Costa Rica"
            ],
            [
              "id"=> 97,
              "nome"=> "Croatia"
            ],
            [
              "id"=> 51,
              "nome"=> "Cuba"
            ],
            [
              "id"=> 53,
              "nome"=> "Curaçao"
            ],
            [
              "id"=> 55,
              "nome"=> "Cyprus"
            ],
            [
              "id"=> 56,
              "nome"=> "Czech Republic"
            ],
            [
              "id"=> 44,
              "nome"=> "Côte d'Ivoire"
            ],
            [
              "id"=> 41,
              "nome"=> "Democratic Republic of the Congo"
            ],
            [
              "id"=> 59,
              "nome"=> "Denmark"
            ],
            [
              "id"=> 58,
              "nome"=> "Djibouti"
            ],
            [
              "id"=> 60,
              "nome"=> "Dominica"
            ],
            [
              "id"=> 61,
              "nome"=> "Dominican Republic"
            ],
            [
              "id"=> 63,
              "nome"=> "Ecuador"
            ],
            [
              "id"=> 65,
              "nome"=> "Egypt"
            ],
            [
              "id"=> 209,
              "nome"=> "El Salvador"
            ],
            [
              "id"=> 87,
              "nome"=> "Equatorial Guinea"
            ],
            [
              "id"=> 67,
              "nome"=> "Eritrea"
            ],
            [
              "id"=> 64,
              "nome"=> "Estonia"
            ],
            [
              "id"=> 69,
              "nome"=> "Ethiopia"
            ],
            [
              "id"=> 72,
              "nome"=> "Falkland Islands"
            ],
            [
              "id"=> 74,
              "nome"=> "Faroe Islands"
            ],
            [
              "id"=> 71,
              "nome"=> "Fiji"
            ],
            [
              "id"=> 70,
              "nome"=> "Finland"
            ],
            [
              "id"=> 75,
              "nome"=> "France"
            ],
            [
              "id"=> 79,
              "nome"=> "French Guiana"
            ],
            [
              "id"=> 174,
              "nome"=> "French Polynesia"
            ],
            [
              "id"=> 215,
              "nome"=> "French Southern Territories"
            ],
            [
              "id"=> 76,
              "nome"=> "Gabon"
            ],
            [
              "id"=> 84,
              "nome"=> "Gambia"
            ],
            [
              "id"=> 78,
              "nome"=> "Georgia"
            ],
            [
              "id"=> 57,
              "nome"=> "Germany"
            ],
            [
              "id"=> 80,
              "nome"=> "Ghana"
            ],
            [
              "id"=> 81,
              "nome"=> "Gibraltar"
            ],
            [
              "id"=> 88,
              "nome"=> "Greece"
            ],
            [
              "id"=> 83,
              "nome"=> "Greenland"
            ],
            [
              "id"=> 77,
              "nome"=> "Grenada"
            ],
            [
              "id"=> 86,
              "nome"=> "Guadeloupe"
            ],
            [
              "id"=> 91,
              "nome"=> "Guam"
            ],
            [
              "id"=> 90,
              "nome"=> "Guatemala"
            ],
            [
              "id"=> 82,
              "nome"=> "Guernsey"
            ],
            [
              "id"=> 85,
              "nome"=> "Guinea"
            ],
            [
              "id"=> 92,
              "nome"=> "Guinea-Bissau"
            ],
            [
              "id"=> 93,
              "nome"=> "Guyana"
            ],
            [
              "id"=> 98,
              "nome"=> "Haiti"
            ],
            [
              "id"=> 95,
              "nome"=> "Heard Island and McDonald Islands"
            ],
            [
              "id"=> 236,
              "nome"=> "Holy See (Vatican City State)"
            ],
            [
              "id"=> 96,
              "nome"=> "Honduras"
            ],
            [
              "id"=> 94,
              "nome"=> "Hong Kong"
            ],
            [
              "id"=> 99,
              "nome"=> "Hungary"
            ],
            [
              "id"=> 108,
              "nome"=> "Iceland"
            ],
            [
              "id"=> 104,
              "nome"=> "India"
            ],
            [
              "id"=> 100,
              "nome"=> "Indonesia"
            ],
            [
              "id"=> 107,
              "nome"=> "Iran"
            ],
            [
              "id"=> 106,
              "nome"=> "Iraq"
            ],
            [
              "id"=> 101,
              "nome"=> "Ireland"
            ],
            [
              "id"=> 103,
              "nome"=> "Isle of Man"
            ],
            [
              "id"=> 102,
              "nome"=> "Israel"
            ],
            [
              "id"=> 109,
              "nome"=> "Italy"
            ],
            [
              "id"=> 111,
              "nome"=> "Jamaica"
            ],
            [
              "id"=> 113,
              "nome"=> "Japan"
            ],
            [
              "id"=> 110,
              "nome"=> "Jersey"
            ],
            [
              "id"=> 112,
              "nome"=> "Jordan"
            ],
            [
              "id"=> 124,
              "nome"=> "Kazakhstan"
            ],
            [
              "id"=> 114,
              "nome"=> "Kenya"
            ],
            [
              "id"=> 117,
              "nome"=> "Kiribati"
            ],
            [
              "id"=> 250,
              "nome"=> "Kosovo"
            ],
            [
              "id"=> 122,
              "nome"=> "Kuwait"
            ],
            [
              "id"=> 115,
              "nome"=> "Kyrgyzstan"
            ],
            [
              "id"=> 125,
              "nome"=> "Laos"
            ],
            [
              "id"=> 134,
              "nome"=> "Latvia"
            ],
            [
              "id"=> 126,
              "nome"=> "Lebanon"
            ],
            [
              "id"=> 131,
              "nome"=> "Lesotho"
            ],
            [
              "id"=> 130,
              "nome"=> "Liberia"
            ],
            [
              "id"=> 135,
              "nome"=> "Libya"
            ],
            [
              "id"=> 128,
              "nome"=> "Liechtenstein"
            ],
            [
              "id"=> 132,
              "nome"=> "Lithuania"
            ],
            [
              "id"=> 133,
              "nome"=> "Luxembourg"
            ],
            [
              "id"=> 147,
              "nome"=> "Macau"
            ],
            [
              "id"=> 143,
              "nome"=> "Macedonia, the former Yugoslav Republic of"
            ],
            [
              "id"=> 141,
              "nome"=> "Madagascar"
            ],
            [
              "id"=> 155,
              "nome"=> "Malawi"
            ],
            [
              "id"=> 157,
              "nome"=> "Malaysia"
            ],
            [
              "id"=> 154,
              "nome"=> "Maldives"
            ],
            [
              "id"=> 144,
              "nome"=> "Mali"
            ],
            [
              "id"=> 152,
              "nome"=> "Malta"
            ],
            [
              "id"=> 142,
              "nome"=> "Marshall Islands"
            ],
            [
              "id"=> 149,
              "nome"=> "Martinique"
            ],
            [
              "id"=> 150,
              "nome"=> "Mauritania"
            ],
            [
              "id"=> 153,
              "nome"=> "Mauritius"
            ],
            [
              "id"=> 246,
              "nome"=> "Mayotte"
            ],
            [
              "id"=> 156,
              "nome"=> "Mexico"
            ],
            [
              "id"=> 73,
              "nome"=> "Micronesia"
            ],
            [
              "id"=> 138,
              "nome"=> "Moldova"
            ],
            [
              "id"=> 137,
              "nome"=> "Monaco"
            ],
            [
              "id"=> 146,
              "nome"=> "Mongolia"
            ],
            [
              "id"=> 139,
              "nome"=> "Montenegro"
            ],
            [
              "id"=> 151,
              "nome"=> "Montserrat"
            ],
            [
              "id"=> 136,
              "nome"=> "Morocco"
            ],
            [
              "id"=> 158,
              "nome"=> "Mozambique"
            ],
            [
              "id"=> 145,
              "nome"=> "Myanmar"
            ],
            [
              "id"=> 159,
              "nome"=> "Namibia"
            ],
            [
              "id"=> 168,
              "nome"=> "Nauru"
            ],
            [
              "id"=> 167,
              "nome"=> "Nepal"
            ],
            [
              "id"=> 165,
              "nome"=> "Netherlands"
            ],
            [
              "id"=> 160,
              "nome"=> "New Caledonia"
            ],
            [
              "id"=> 170,
              "nome"=> "New Zealand"
            ],
            [
              "id"=> 164,
              "nome"=> "Nicaragua"
            ],
            [
              "id"=> 161,
              "nome"=> "Niger"
            ],
            [
              "id"=> 163,
              "nome"=> "Nigeria"
            ],
            [
              "id"=> 169,
              "nome"=> "Niue"
            ],
            [
              "id"=> 162,
              "nome"=> "Norfolk Island"
            ],
            [
              "id"=> 120,
              "nome"=> "North Korea"
            ],
            [
              "id"=> 148,
              "nome"=> "Northern Mariana Islands"
            ],
            [
              "id"=> 166,
              "nome"=> "Norway"
            ],
            [
              "id"=> 171,
              "nome"=> "Oman"
            ],
            [
              "id"=> 177,
              "nome"=> "Pakistan"
            ],
            [
              "id"=> 184,
              "nome"=> "Palau"
            ],
            [
              "id"=> 172,
              "nome"=> "Panama"
            ],
            [
              "id"=> 175,
              "nome"=> "Papua New Guinea"
            ],
            [
              "id"=> 185,
              "nome"=> "Paraguay"
            ],
            [
              "id"=> 173,
              "nome"=> "Peru"
            ],
            [
              "id"=> 176,
              "nome"=> "Philippines"
            ],
            [
              "id"=> 180,
              "nome"=> "Pitcairn Islands"
            ],
            [
              "id"=> 178,
              "nome"=> "Poland"
            ],
            [
              "id"=> 183,
              "nome"=> "Portugal"
            ],
            [
              "id"=> 181,
              "nome"=> "Puerto Rico"
            ],
            [
              "id"=> 186,
              "nome"=> "Qatar"
            ],
            [
              "id"=> 188,
              "nome"=> "Romania"
            ],
            [
              "id"=> 190,
              "nome"=> "Russian Federation"
            ],
            [
              "id"=> 191,
              "nome"=> "Rwanda"
            ],
            [
              "id"=> 187,
              "nome"=> "Réunion"
            ],
            [
              "id"=> 26,
              "nome"=> "Saint Barthélémy"
            ],
            [
              "id"=> 198,
              "nome"=> "Saint Helena, Ascension and Tristan da Cunha"
            ],
            [
              "id"=> 119,
              "nome"=> "Saint Kitts and Nevis"
            ],
            [
              "id"=> 127,
              "nome"=> "Saint Lucia"
            ],
            [
              "id"=> 140,
              "nome"=> "Saint Martin (French part)"
            ],
            [
              "id"=> 179,
              "nome"=> "Saint Pierre and Miquelon"
            ],
            [
              "id"=> 237,
              "nome"=> "Saint Vincent and the Grenadines"
            ],
            [
              "id"=> 244,
              "nome"=> "Samoa"
            ],
            [
              "id"=> 203,
              "nome"=> "San Marino"
            ],
            [
              "id"=> 192,
              "nome"=> "Saudi Arabia"
            ],
            [
              "id"=> 204,
              "nome"=> "Senegal"
            ],
            [
              "id"=> 189,
              "nome"=> "Serbia"
            ],
            [
              "id"=> 194,
              "nome"=> "Seychelles"
            ],
            [
              "id"=> 202,
              "nome"=> "Sierra Leone"
            ],
            [
              "id"=> 197,
              "nome"=> "Singapore"
            ],
            [
              "id"=> 210,
              "nome"=> "Sint Maarten (Dutch part)"
            ],
            [
              "id"=> 201,
              "nome"=> "Slovakia"
            ],
            [
              "id"=> 199,
              "nome"=> "Slovenia"
            ],
            [
              "id"=> 193,
              "nome"=> "Solomon Islands"
            ],
            [
              "id"=> 205,
              "nome"=> "Somalia"
            ],
            [
              "id"=> 247,
              "nome"=> "South Africa"
            ],
            [
              "id"=> 89,
              "nome"=> "South Georgia and the South Sandwich Islands"
            ],
            [
              "id"=> 121,
              "nome"=> "South Korea"
            ],
            [
              "id"=> 207,
              "nome"=> "South Sudan"
            ],
            [
              "id"=> 68,
              "nome"=> "Spain"
            ],
            [
              "id"=> 129,
              "nome"=> "Sri Lanka"
            ],
            [
              "id"=> 182,
              "nome"=> "State of Palestine"
            ],
            [
              "id"=> 195,
              "nome"=> "Sudan"
            ],
            [
              "id"=> 206,
              "nome"=> "Surinome"
            ],
            [
              "id"=> 200,
              "nome"=> "Svalbard and Jan Mayen"
            ],
            [
              "id"=> 212,
              "nome"=> "Swaziland"
            ],
            [
              "id"=> 196,
              "nome"=> "Sweden"
            ],
            [
              "id"=> 43,
              "nome"=> "Switzerland"
            ],
            [
              "id"=> 211,
              "nome"=> "Syria"
            ],
            [
              "id"=> 208,
              "nome"=> "São Tomé and Príncipe"
            ],
            [
              "id"=> 227,
              "nome"=> "Taiwan"
            ],
            [
              "id"=> 218,
              "nome"=> "Tajikistan"
            ],
            [
              "id"=> 228,
              "nome"=> "Tanzania"
            ],
            [
              "id"=> 217,
              "nome"=> "Thailand"
            ],
            [
              "id"=> 223,
              "nome"=> "Timor-Leste"
            ],
            [
              "id"=> 216,
              "nome"=> "Togo"
            ],
            [
              "id"=> 219,
              "nome"=> "Tokelau"
            ],
            [
              "id"=> 222,
              "nome"=> "Tonga"
            ],
            [
              "id"=> 225,
              "nome"=> "Trinidad and Tobago"
            ],
            [
              "id"=> 221,
              "nome"=> "Tunisia"
            ],
            [
              "id"=> 224,
              "nome"=> "Turkey"
            ],
            [
              "id"=> 220,
              "nome"=> "Turkmenistan"
            ],
            [
              "id"=> 213,
              "nome"=> "Turks and Caicos Islands"
            ],
            [
              "id"=> 226,
              "nome"=> "Tuvalu"
            ],
            [
              "id"=> 232,
              "nome"=> "USA Minor Outlying Islands"
            ],
            [
              "id"=> 230,
              "nome"=> "Uganda"
            ],
            [
              "id"=> 229,
              "nome"=> "Ukraine"
            ],
            [
              "id"=> 2,
              "nome"=> "United Arab Emirates"
            ],
            [
              "id"=> 231,
              "nome"=> "United Kingdom"
            ],
            [
              "id"=> 233,
              "nome"=> "United States"
            ],
            [
              "id"=> 234,
              "nome"=> "Uruguay"
            ],
            [
              "id"=> 235,
              "nome"=> "Uzbekistan"
            ],
            [
              "id"=> 242,
              "nome"=> "Vanuatu"
            ],
            [
              "id"=> 238,
              "nome"=> "Venezuela"
            ],
            [
              "id"=> 241,
              "nome"=> "Vietnam"
            ],
            [
              "id"=> 239,
              "nome"=> "Virgin Islands (British)"
            ],
            [
              "id"=> 240,
              "nome"=> "Virgin Islands (USA)"
            ],
            [
              "id"=> 243,
              "nome"=> "Wallis and Futuna"
            ],
            [
              "id"=> 66,
              "nome"=> "Western Sahara"
            ],
            [
              "id"=> 245,
              "nome"=> "Yemen"
            ],
            [
              "id"=> 248,
              "nome"=> "Zambia"
            ],
            [
              "id"=> 249,
              "nome"=> "Zimbabwe"
            ],
            [
              "id"=> 15,
              "nome"=> "Åland Islands"
            ],
            [
                "id"=> 251,
                "nome"=> "__OUTRO"
            ]
        ];
        
        foreach ($dados as $key => $value) {
        	paises::create($value);
        }
    }
}

