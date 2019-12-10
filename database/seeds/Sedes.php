<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sedes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sedes = array(
            0 => array('Universidad Bolivariana Iquique'),
            1 => array('Colegio Inglés Iquique'),
            2 => array('Corona School Iquique'),
            3 => array('Universidad Católica del Norte Antofagasta'),
            4 => array('Universidad de Antofagasta Campus Coloso'),
            5 => array('Universidad de Atacama Copiapó'),
            6 => array('Universidad Central de Chile La Serena'),
            7 => array('Universidad de La Serena Campus Andrés Bello'),
            8 => array('Universidad de La Serena Campus Isabel Bongard'),
            9 => array('Universidad Bolivariana Ovalle'),
            10 => array('Universidad de Playa Ancha Campus San Felipe'),
            11 => array('Pontificia Universidad Católica de Valparaíso Edificio Gimpert'),
            12 => array('Pontificia Universidad Católica de Valparaíso Campus Curauma'),
            13 => array('Universidad de Playa Ancha Casa Central'),
            14 => array('Universidad de Valparaíso Sede Valparaíso'),
            15 => array('Universidad Andrés Bello Campus Viña del Mar'),
            16 => array('Universidad de las Américas Campus Los Castaños'),
            17 => array('Universidad de Valparaíso Campus Salud'),
            18 => array('Universidad de Viña del Mar Campus Miraflores'),
            19 => array('Universidad de Viña del Mar Campus Rodelillo'),
            20 => array('Universidad de O\'Higgins Campus Rancagua'),
            21 => array('Universidad Católica del Maule Campus Carmen'),
            22 => array('Colegio Initec Curicó'),
            23 => array('Universidad de Talca Linares'),
            24 => array('Universidad Católica del Maule San Miguel'),
            25 => array('Universidad Autónoma de Chile Sede Talca'),
            26 => array('Universidad Católica de la Santísima Concepción Edificio Tomás Moro'),
            27 => array('Universidad de las Américas Campus Boldal'),
            28 => array('Universidad de las Américas Campus Chacabuco'),
            29 => array('Universidad La República Campus Concepción'),
            30 => array('Biblioteca Municipal Los Ángeles Los Ángeles'),
            31 => array('Universidad La República Campus Los Ángeles'),
            32 => array('Colegio La Fuente Los Ángeles'),
            33 => array('Universidad Andrés Bello Campus Concepción'),
            34 => array('Liceo Polivalente Las Salinas Talcahuano'),
            35 => array('Colegio San Vicente Talcahuano'),
            36 => array('Liceo Industrial Juan Antonio Ríos Talcahuano'),
            37 => array('Universidad Católica de Temuco Juan Pablo II'),
            38 => array('Universidad Católica de Temuco San Francisco'),
            39 => array('Universidad de La Frontera Andrés Bello'),
            40 => array('Liceo Politecnico Villarrica'),
            41 => array('Universidad de los Lagos Chiloé'),
            42 => array('Universidad de los Lagos Chuyaca / Aulas virtuales'),
            43 => array('Universidad Austral de Chile Puerto Montt'),
            44 => array('Universidad de los Lagos Chinquihue'),
            45 => array('Universidad de los Lagos Guillermo Gallardo'),
            46 => array('Liceo Josefina Aguirre de Coyhaique Coyhaique'),
            47 => array('Liceo República Argentina Coyhaique'),
            48 => array('Universidad Austral de Chile Campus Patagonia'),
            49 => array('Universidad de Magallanes Casa Central'),
            50 => array('Universidad de las Américas La Florida'),
            51 => array('Universidad de las Américas Maipú'),
            52 => array('Universidad de Chile Campus Juan Gómez Millas'),
            53 => array('Universidad Metropolitana de Ciencias de la Educación Campus Macul'),
            54 => array('Universidad Metropolitana de Ciencias de la Educación Joaquin Cabezas'),
            55 => array('Universidad de las Américas Providencia'),
            56 => array('Universidad Gabriela Mistral Casa Central'),
            57 => array('Universidad Mayor Campus Manuel Montt'),
            58 => array('Universidad SEK Campus Providencia'),
            59 => array('Universidad Academia de Humanismo Cristiano Campus Condell'),
            60 => array('Universidad Bernardo O\'Higgins Casa Central'),
            61 => array('Universidad Bernardo O\'Higgins Rondizzoni'),
            62 => array('Universidad Católica Silva Henríquez Casa Central'),
            63 => array('Universidad Central de Chile Gonzalo Hernández Uribe'),
            64 => array('Universidad Central de Chile Vicente Kovacevic I'),
            65 => array('Universidad Central de Chile Vicente Kovacevic II'),
            66 => array('Universidad de las Américas Santiago Centro'),
            67 => array('Universidad Los Leones Casa Central'),
            68 => array('Universidad SEK Campus Santa Ana'),
            69 => array('Universidad Austral de Chile Campus Isla Teja'),
            70 => array('Universidad Austral de Chile Campus Miraflores'),
            71 => array('Colegio Laico Valdivia Valdivia'),
            72 => array('Universidad de Tarapacá Campus Saucache'),
            73 => array('Universidad Adventista de Chile Casa Central'),
            74 => array('Universidad Bolivariana Chillán'),
            75 => array('Universidad del Bío Bío Campus Fernando May'),
            76 => array('Universidad del Bío Bío Campus La Castilla'),
            77 => array('Bernardo Felmer Lanco'),
            78 => array('Escuela Particular Padre Carlos Lanco'),
        );

        foreach($sedes as $dat){
            DB::table('sedes')->insert([
                'nombre_sede' => $dat[0],
                'direccion_sede'=>'N/A',
                'id_users'=>3,
                'id_estado'=>1
            ]);
        }
    }
}
