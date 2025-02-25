<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Instrumentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            0 => array('4397 Laboratorio Computación'),
            1 => array('4950 Laboratorio 1'),
            2 => array('4951 Laboratorio Computación 2'),
            3 => array('4952 Laboratorio Computación 3'),
            4 => array('4964 Laboratorio Computación 1'),
            5 => array('4404 Laboratorio 223'),
            6 => array('4405 Laboratorio 301'),
            7 => array('4420 Laboratorio Centro de computación Educativa'),
            8 => array('4425 TIC3'),
            9 => array('4421 Laboratorio Enlaces'),
            10 => array('4424 TIC2'),
            11 => array('4426 Laboratorio Alicia Contreras Durán'),
            12 => array('4907 Laboratorio Educación Básica'),
            13 => array('4437 Laboratorio 1 LSR'),
            14 => array('4438 Laboratorio 2 LSR'),
            15 => array('4454 Laboratorio Pedagogía en Historia y Geografía'),
            16 => array('4455 Laboratorio Pedagogía en Inglés'),
            17 => array('4451 Laboratorio Pedagogía Educación General básica'),
            18 => array('4457 Laboratorios Sala 7 Centro de Lenguaje (CEL)'),
            19 => array('4452 Laboratorios Sala 8 Centro de Lenguaje (CEL)'),
            20 => array('4431 Laboratorio de computación'),
            21 => array('4486 Laboratorio 301'),
            22 => array('4469 SAU C 3 - 4'),
            23 => array('4470 SAU C 3 - 5'),
            24 => array('4467 CU AU 102'),
            25 => array('4490 Creal VPA C306'),
            26 => array('4491 Creal VPA C307'),
            27 => array('4494 Laboratorio Sala 5 Piso 4'),
            28 => array('4495 Laboratorio Sala 6 Piso 4'),
            29 => array('4926 Laboratorio 1 Alumnos'),
            30 => array('4924 Laboratorio 1 Matemática'),
            31 => array('4925 Laboratorio Biblioteca Humanidades'),
            32 => array('4479 Laboratorio COM 413'),
            33 => array('4511 Laboratorio B202'),
            34 => array('4512 Laboratorio B203'),
            35 => array('4497 Laboratorio 7.21'),
            36 => array('4507 Laboratorio (LPC1)'),
            37 => array('4510 Laboratorio Workstation (LPC2)'),
            38 => array('4501 Laboratorio Multimedial -103 / 1 piso'),
            39 => array('4502 Laboratorio Multimedial -104 / 1 piso'),
            40 => array('4504 Laboratorio Multimedial inglés 1 120 / 1 piso'),
            41 => array('4505 Laboratorio Multimedial inglés 2 116 / 1 piso'),
            42 => array('4506 Laboratorio Multimedial inglés 3 124 / 1 piso'),
            43 => array('4519 A-102'),
            44 => array('4922 A-611'),
            45 => array('4520 Laboratorio Computación A-405'),
            46 => array('4966 A405'),
            47 => array('4967 A505'),
            48 => array('4531 Docencia'),
            49 => array('4532 Inglés'),
            50 => array('4533 Prat'),
            51 => array('4965 Laboratorio Computación 1'),
            52 => array('4550 Laboratorio 1'),
            53 => array('4552 Laboratorio 3'),
            54 => array('4536 Infoaula 2'),
            55 => array('4538 Inglés 2'),
            56 => array('4546 Laboratorio de Matemáticas'),
            57 => array('4543 Laboratorio DGE'),
            58 => array('4525 416'),
            59 => array('4528 420'),
            60 => array('4523 414'),
            61 => array('4562 Laboratorio 1 computación'),
            62 => array('4563 Laboratorio 2 computación'),
            63 => array('4564 Laboratorio 3 Computación'),
            64 => array('4565 Laboratorio 4 Computación'),
            65 => array('4566 Laboratorio 5 Computación'),
            66 => array('4600 Laboratorio C309'),
            67 => array('4601 Laboratorio C312'),
            68 => array('4602 Laboratorio C404'),
            69 => array('4595 Laboratorio B108'),
            70 => array('4596 Laboratorio B109'),
            71 => array('4597 Laboratorio B204'),
            72 => array('4567 Laboratorio de computación'),
            73 => array('4941 Biblioteca Municipal Los Ángeles'),
            74 => array('4561 Laboratorio de Computación 1'),
            75 => array('4928 Laboratorio de Computación 2'),
            76 => array('4568 Laboratorio'),
            77 => array('4956 Laboratorio Computación 2'),
            78 => array('4955 Laboratorio Computación 1'),
            79 => array('4559 COM 303'),
            80 => array('4961 Laboratorio Computación 2'),
            81 => array('4962 Laboratorio Computación 3'),
            82 => array('4960 Laboratorio Computación 1'),
            83 => array('4954 Laboratorio Computación 1'),
            84 => array('4958 Laboratorio Computación 2'),
            85 => array('4957 Laboratorio Computación 1'),
            86 => array('4630 EB Computación I'),
            87 => array('4631 EB Computación II'),
            88 => array('4638 EB-Inglés I'),
            89 => array('4625 A-001'),
            90 => array('4626 A-002'),
            91 => array('4628 C-107'),
            92 => array('4629 C-108'),
            93 => array('4641 Idiomas A-201'),
            94 => array('4646 Laboratorio Biblioteca'),
            95 => array('4654 Laboratorio de Idioma Multimedia de Inglés Laboratorio 1'),
            96 => array('4655 Laboratorio de Idioma Multimedia de Inglés Laboratorio 2'),
            97 => array('4937 Contabilidad'),
            98 => array('4936 Conectividad'),
            99 => array('4938 Redes'),
            100 => array('4677 Computación'),
            101 => array('4678 Laboratorio 1'),
            102 => array('4680 Laboratorio 2'),
            103 => array('4684 Laboratorio TIC'),
            104 => array('4660 Laboratorio 2'),
            105 => array('4661 Laboratorio 3'),
            106 => array('4663 Laboratorio de Inglés'),
            107 => array('4685 Laboratorio TIC 2'),
            108 => array('4688 Tic 3'),
            109 => array('4689 Tic 4'),
            110 => array('4687 Laboratorio de Computación 2'),
            111 => array('4930 Liceo Josefina Aguirre de Coyhaique'),
            112 => array('4931 Liceo República Argentina'),
            113 => array('4690 Laboratorio Computación'),
            114 => array('4699 Laboratorio Computación Sala 42'),
            115 => array('4843 Laboratorio B504'),
            116 => array('4844 Laboratorio B507'),
            117 => array('4847 Laboratorio A007'),
            118 => array('4829 Laboratorio computación Escuela de Pregrado'),
            119 => array('4831 Sala computación Biblioteca'),
            120 => array('4833 Sala computación DEP'),
            121 => array('4830 Sala de computación Postgrado'),
            122 => array('4790 Laboratorio Ciencias Básicas -1'),
            123 => array('4792 Laboratorio Ciencias Básicas -3'),
            124 => array('4793 Laboratorio Ciencias Básicas -4'),
            125 => array('4801 Laboratorio de Biblioteca Central-1'),
            126 => array('4795 Laboratorio Lisim-3'),
            127 => array('4796 Laboratorio Lisim-sala 104'),
            128 => array('4797 Laboratorio Lisim-sala 105'),
            129 => array('4798 Laboratorio Pabellón C - 113'),
            130 => array('4799 Laboratorio Pabellón C - 114'),
            131 => array('4803 Laboratorio de Biblioteca DEFDER'),
            132 => array('4804 Laboratorio de Defder'),
            133 => array('4849 Laboratorio J402'),
            134 => array('4848 Laboratorio J411'),
            135 => array('4850 Laboratorio J502'),
            136 => array('4764 Laboratorio 32'),
            137 => array('4765 Laboratorio 33'),
            138 => array('4766 Laboratorio 34'),
            139 => array('4767 Laboratorio 35'),
            140 => array('4768 Laboratorio 36'),
            141 => array('4769 Laboratorio 37'),
            142 => array('4775 MALI-201'),
            143 => array('4776 MALI-202'),
            144 => array('4777 MALI-203'),
            145 => array('4778 MALI-204'),
            146 => array('4779 MALI-206'),
            147 => array('4780 MALI-207'),
            148 => array('4782 MALI-209'),
            149 => array('4786 MALI-308'),
            150 => array('4811 Laboratorio 1 de computación'),
            151 => array('4812 Laboratorio 2 de computación'),
            152 => array('4708 Laboratorio 1'),
            153 => array('4704 Laboratorio 2'),
            154 => array('4908 Laboratorio F-13'),
            155 => array('4909 Laboratorio F-17'),
            156 => array('4734 Laboratorio Geomatica'),
            157 => array('4733 Laboratorio Computación'),
            158 => array('4736 A31 Laboratorio de Computación'),
            159 => array('4737 A32 Laboratorio de Computación Pantalla Interactiva'),
            160 => array('4738 A33 Laboratorio de Computación'),
            161 => array('4739 LDB Laboratorio de Computación Don Bosco'),
            162 => array('4740 Sala Don Bosco'),
            163 => array('4743 Laboratorio 2 Torre C'),
            164 => array('4747 Laboratorio 3 Torre B'),
            165 => array('4752 Laboratorio 4 Torre B'),
            166 => array('4754 Laboratorio 5 Torre B'),
            167 => array('4741 Laboratorio 1 (piso 5)'),
            168 => array('4745 Laboratorio 2'),
            169 => array('4742 Laboratorio 2 (piso 5)'),
            170 => array('4749 Laboratorio 3 (piso 5)'),
            171 => array('4751 Laboratorio 4 (piso 5)'),
            172 => array('4755 Laboratorio 1'),
            173 => array('4744 Laboratorio 2 Torre A'),
            174 => array('4748 Laboratorio 3'),
            175 => array('4750 Laboratorio 4'),
            176 => array('4753 Laboratorio 5'),
            177 => array('4756 Laboratorio 6'),
            178 => array('4851 Laboratorio A223'),
            179 => array('4855 Laboratorio A316'),
            180 => array('4772 Laboratorio 307'),
            181 => array('4773 Laboratorio 308'),
            182 => array('4813 Laboratorio de computación'),
            183 => array('4870 Laboratorio Computación 2'),
            184 => array('4871 Laboratorio de Idiomas'),
            185 => array('4872 Sala 7401'),
            186 => array('4873 Sala 7402'),
            187 => array('4963 Laboratorio Computación 1'),
            188 => array('4885 Centro Computación Educativa'),
            189 => array('4886 Laboratorio 1'),
            190 => array('4888 Laboratorio Computación A'),
            191 => array('4890 Laboratorio Computación C'),
            192 => array('4891 Laboratorio Computación D'),
            193 => array('4893 Sala de Computación 120'),
            194 => array('4892 Sala Multimedia'),
            195 => array('4895 Laboratorio de computación 3'),
            196 => array('4896 Laboratorio de computación 4'),
            197 => array('4897 Laboratorio de computación Inglés y Matemáticas'),
            198 => array('4898 Laboratorio de computación'),
            199 => array('4902 Sala 1'),
            200 => array('4903 Sala 2'),
            201 => array('4929 Esperando datos'),
            202 => array('4905 Sala N° 1'),
            203 => array('4906 Sala N° 3'),
            204 => array('4904 Sala Nº 1'),
        );



        foreach($data as $dat){
            DB::table('laboratorios')->insert([
                'nombre_lab' => $dat[0]
            ]);
        }

        $inst =array(
            0 => array('PCDEP'),
            1 => array('PCDEB'),
            2 => array('CCEM EDUCACIÓN FÍSICA'),
            3 => array('CDDHGCS'),
            4 => array('CCEP'),
            5 => array('CCEB'),
            6 => array('CCEM'),
            7 => array('CPGEB'),
            8 => array('CCEE'),
            9 => array('CPGEP'),
            10 => array('CPGEE'),
            11 => array('CGEE'),
            12 => array('CDDEF'),
            13 => array('CDDMU'),
            14 => array('CDDF'),
            15 => array('CCEM MÚSICA'),
            16 => array('CCEM HISTORIA'),
            17 => array('CCEM BIOLOGÍA'),
            18 => array('CCEM MATEMÁTICAS'),
            19 => array('INSUMOS DE MATEMÁTICAS'),
            20 => array('CCEM FÍSICA'),
            21 => array('CDDAV'),
            22 => array('CCEM ARTES VISUALES'),
            23 => array('INSUMOS DE QUÍMICA'),
            24 => array('CCEM QUÍMICA'),
            25 => array('CCEM LENGUAJE'),
            26 => array('CDDB'),
            27 => array('CPGEM'),
            28 => array('CDDI'),
        );

        foreach($inst as $dat){
            DB::table('items')->insert([
                'description' => $dat[0]
            ]);
        }


    }
}
