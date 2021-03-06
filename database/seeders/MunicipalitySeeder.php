<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipalities')->delete();

        $rows = [
            [
                'name'        => 'Centro Habana',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Plaza',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Playa',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Arroyo Naranjo',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Boyeros',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cerro',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cotorro',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Diez de Octubre',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guanabacoa',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Habana del Este',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Habana Vieja',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'La Lisa',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Marianao',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Regla',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Miguel del Padr??n',
                'province_id' => 1,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Pinar del R??o',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Consolaci??n del Sur',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guane',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'La Palma',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Los Palacios',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Mantua',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Minas de Matahambre',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Juan y Mart??nez',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Luis',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sandino',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Vi??ales',
                'province_id' => 2,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Artemisa',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Alqu??zar',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bauta',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Caimito',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guanajay',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'G??ira de Melena',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Mariel',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Antonio de los Ba??os',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bah??a Honda',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Candelaria',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Crist??bal',
                'province_id' => 3,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Jos?? de las Lajas',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bataban??',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bejucal',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'G??ines',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jaruco',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Madruga',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Melena del Sur',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Nueva Paz',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Quivic??n',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Nicol??s de Bari',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santa Cruz del Norte',
                'province_id' => 4,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Matanzas',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Calimete',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'C??rdenas',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Ci??naga de Zapata',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Col??n',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jag??ey Grande',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jovellanos',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Limonar',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Los Arabos',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Mart??',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Pedro Betancourt',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Perico',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Uni??n de Reyes',
                'province_id' => 5,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cienfuegos',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Abreus',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cienfuegos',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Abreus',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Aguada de Pasajeros',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cruces',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cumanayagua',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Palmira',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Rodas',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santa Isabel de las Lajas',
                'province_id' => 6,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santa Clara',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Caibarien',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Camajuan??',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cifuentes',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Corralillo',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Encrucijada',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Manicaragua',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Placetas',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Quemado de G??ines',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Ranchuelo',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Remedios',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sagua la Grande',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santo Domingo',
                'province_id' => 7,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sancti Sp??ritus',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cabaigu??n',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Fomento',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jatibonico',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'La Sierpe',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Taguasco',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Trinidad',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Yaguajay',
                'province_id' => 8,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Ciego de ??vila',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Ciro Redondo',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Baragu??',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bolivia',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Chambas',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Florencia',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Majagua',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Mor??n',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Primero de Enero',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Venezuela',
                'province_id' => 9,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Camag??ey',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Carlos Manuel de C??spedes',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Esmeralda',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Florida',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guaimaro',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jimag??ay??',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Minas',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Najasa',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Nuevitas',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santa Cruz del Sur',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sibanic??',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sierra de Cubitas',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Vertientes',
                'province_id' => 10,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Las Tunas',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Amancio Rodr??guez',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Colombia',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jes??s Men??ndez',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jobabo',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Majibacoa',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Manat??',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Puerto Padre',
                'province_id' => 11,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Holgu??n',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Antilla',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'B??guanos',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Banes',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cacocum',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Calixto Garc??a',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cueto',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Frank Pa??s',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Gibara',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Mayar??',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Moa',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Rafael Freyre',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Sagua de T??namo',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Urbano Noris',
                'province_id' => 12,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bayamo',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Bartolom?? Mas??',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Buey Arriba',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Campechuela',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Cauto Cristo',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guisa',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Jiguan??',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Manzanillo',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Media Luna',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Niquero',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Pil??n',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'R??o Cauto',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Yara',
                'province_id' => 13,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Santiago de Cuba',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Contramaestre',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guam??',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Julio Antonio Mella',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Palma Soriano',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Luis',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Segundo Frente',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Songo la Maya',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Tercer Frente',
                'province_id' => 14,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Guant??namo',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Baracoa',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Caimanera',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'El Salvador',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Im??as',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Mais??',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Manuel Tames',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Niceto P??rez',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'San Antonio del Sur',
                'province_id' => 15,
                'created_at'  => now(),
            ],
            [
                'name'        => 'Yateras',
                'province_id' => 15,
                'created_at'  => now(),
            ],
        ];

        foreach ($rows as $row) {
            DB::table('municipalities')->insert($row);
        }
    }
}
