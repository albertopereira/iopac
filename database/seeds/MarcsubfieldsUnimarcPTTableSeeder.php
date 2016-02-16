<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MarcsubfieldsUnimarcPTTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('marcsubfields')->insert([
              'id'  => 3, 
              'tagfield' => '3',
              'tagsubfield' => '@',
              'description' => 'Campo de controlo',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 13, 
              'tagfield' => '6',
              'tagsubfield' => '2',
              'description' => 'Código de empreinte',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 14, 
              'tagfield' => '6',
              'tagsubfield' => '5',
              'description' => 'Instituição à qual se aplica',
              'repeatable' => 0,
              'mandatory' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 15, 
              'tagfield' => '6',
              'tagsubfield' => 'a',
              'description' => 'Empreinte',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 20, 
              'tagfield' => '8',
              'tagsubfield' => '2',
              'description' => 'Código do sistema',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 21, 
              'tagfield' => '8',
              'tagsubfield' => 'a',
              'description' => 'Identificador do artigo',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 22, 
              'tagfield' => '8',
              'tagsubfield' => 'z',
              'description' => 'Identificador do artrigo errado',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 23, 
              'tagfield' => '9',
              'tagsubfield' => 'a',
              'description' => 'Número (ISRN)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 24, 
              'tagfield' => '9',
              'tagsubfield' => 'b',
              'description' => 'Qualificação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 25, 
              'tagfield' => '9',
              'tagsubfield' => 'd',
              'description' => 'Modalidade de aquisição e/ou preço',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 32, 
              'tagfield' => '12',
              'tagsubfield' => 'a',
              'description' => 'Código do país',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 33, 
              'tagfield' => '12',
              'tagsubfield' => 'b',
              'description' => 'Número',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 34, 
              'tagfield' => '12',
              'tagsubfield' => 'z',
              'description' => 'Número errado',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 52, 
              'tagfield' => '18',
              'tagsubfield' => 'a',
              'description' => 'Dados codificados dos livros ',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 53, 
              'tagfield' => '19',
              'tagsubfield' => 'a',
              'description' => 'Dados codificados do material textual',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 54, 
              'tagfield' => '20',
              'tagsubfield' => 'a',
              'description' => 'Dados codificados das publicações em série',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 55, 
              'tagfield' => '21',
              'tagsubfield' => 'a',
              'description' => 'Dados modificados - geral',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 56, 
              'tagfield' => '21',
              'tagsubfield' => 'b',
              'description' => 'Dados codificados dos filmes animado - Arquivo',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 57, 
              'tagfield' => '22',
              'tagsubfield' => 'a',
              'description' => 'Dados codificados para material visual gráfico',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 59, 
              'tagfield' => '23',
              'tagsubfield' => 'a',
              'description' => 'Dados codificados para o material cartográfico (geral)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 60, 
              'tagfield' => '24',
              'tagsubfield' => 'a',
              'description' => 'Dados codificados para o material cartográfico: atributos físicos (gerais)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 61, 
              'tagfield' => '24',
              'tagsubfield' => 'b',
              'description' => 'Aerial Photography and Remote Sensing Coded Data: Physical Attributes',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 62, 
              'tagfield' => '25',
              'tagsubfield' => 'a',
              'description' => 'Time Period, 9999 B.C. to Present',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 63, 
              'tagfield' => '26',
              'tagsubfield' => 'a',
              'description' => 'Type of Scale',
              'repeatable' => 0,
              'mandatory' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 64, 
              'tagfield' => '26',
              'tagsubfield' => 'b',
              'description' => 'Constant Ratio Linear Horizontal Scale',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 65, 
              'tagfield' => '26',
              'tagsubfield' => 'c',
              'description' => 'Constant Ratio Linear Vertical Scale',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 66, 
              'tagfield' => '26',
              'tagsubfield' => 'd',
              'description' => 'Coordinates - Westernmost Longitude',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 67, 
              'tagfield' => '26',
              'tagsubfield' => 'e',
              'description' => 'Coordinates - Easternmost Longitude',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 68, 
              'tagfield' => '26',
              'tagsubfield' => 'f',
              'description' => 'Coordinates - Northernmost Latitude',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 69, 
              'tagfield' => '26',
              'tagsubfield' => 'g',
              'description' => 'Coordinates - Southernmost Latitude',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 70, 
              'tagfield' => '26',
              'tagsubfield' => 'h',
              'description' => 'Angular Scale',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 71, 
              'tagfield' => '26',
              'tagsubfield' => 'i',
              'description' => 'Declination - Northern Limit',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 72, 
              'tagfield' => '26',
              'tagsubfield' => 'j',
              'description' => 'Declination - Southern Limit',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 73, 
              'tagfield' => '26',
              'tagsubfield' => 'k',
              'description' => 'Right Ascension - Eastern Limits',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 74, 
              'tagfield' => '26',
              'tagsubfield' => 'm',
              'description' => 'Right Ascension - Western Limits',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 75, 
              'tagfield' => '26',
              'tagsubfield' => 'n',
              'description' => 'Equinox',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 76, 
              'tagfield' => '26',
              'tagsubfield' => 'o',
              'description' => 'Epoch',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 77, 
              'tagfield' => '27',
              'tagsubfield' => 'a',
              'description' => 'Character of Image',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 78, 
              'tagfield' => '27',
              'tagsubfield' => 'b',
              'description' => 'Form of Cartographic Item',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 79, 
              'tagfield' => '27',
              'tagsubfield' => 'c',
              'description' => 'Presentation Technique for Photographic or Non-Photographic Image',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 80, 
              'tagfield' => '27',
              'tagsubfield' => 'd',
              'description' => 'Position of Platform for Photographic or Remote Sensing Image',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 81, 
              'tagfield' => '27',
              'tagsubfield' => 'e',
              'description' => 'Category of Satellite for Remote Sensing Image',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 82, 
              'tagfield' => '27',
              'tagsubfield' => 'f',
              'description' => 'Name of Satellite for Remote Sensing Image',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 83, 
              'tagfield' => '27',
              'tagsubfield' => 'g',
              'description' => 'Recording Technique for Remote Sensing Image',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 84, 
              'tagfield' => '28',
              'tagsubfield' => 'a',
              'description' => 'Format of Printed Music',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 85, 
              'tagfield' => '28',
              'tagsubfield' => 'b',
              'description' => 'Literary Text Indicator (Non-Music Performance)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 86, 
              'tagfield' => '29',
              'tagsubfield' => 'a',
              'description' => 'Dados codificados dos de registos sonoros',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 87, 
              'tagfield' => '29',
              'tagsubfield' => 'b',
              'description' => 'Sound Recordings Coded Data (Detail)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 88, 
              'tagfield' => '30',
              'tagsubfield' => 'a',
              'description' => 'Duration',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 89, 
              'tagfield' => '31',
              'tagsubfield' => 'a',
              'description' => 'Form of Composition',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 90, 
              'tagfield' => '31',
              'tagsubfield' => 'b',
              'description' => 'Instruments or Voices for Ensemble',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 91, 
              'tagfield' => '31',
              'tagsubfield' => 'c',
              'description' => 'Instruments or Voices for Soloists',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 92, 
              'tagfield' => '32',
              'tagsubfield' => 'a',
              'description' => 'Microform Coded Data - Physical Attributes',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 93, 
              'tagfield' => '33',
              'tagsubfield' => 'a',
              'description' => 'Spheroid',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 94, 
              'tagfield' => '33',
              'tagsubfield' => 'b',
              'description' => 'Horizontal Datum',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 95, 
              'tagfield' => '33',
              'tagsubfield' => 'c',
              'description' => 'Grid and Referencing System',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 96, 
              'tagfield' => '33',
              'tagsubfield' => 'd',
              'description' => 'Overlapping and Referencing System',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 97, 
              'tagfield' => '33',
              'tagsubfield' => 'e',
              'description' => 'Secondary Grid and Referencing System',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 98, 
              'tagfield' => '33',
              'tagsubfield' => 'f',
              'description' => 'Vertical Datum',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 99, 
              'tagfield' => '33',
              'tagsubfield' => 'g',
              'description' => 'altitudeUnit of Measurement of Heighting',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 100, 
              'tagfield' => '33',
              'tagsubfield' => 'h',
              'description' => 'Contour Interval',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 101, 
              'tagfield' => '33',
              'tagsubfield' => 'i',
              'description' => 'Supplementary Contour Interval',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 102, 
              'tagfield' => '33',
              'tagsubfield' => 'j',
              'description' => 'Unit of Measurement',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 103, 
              'tagfield' => '33',
              'tagsubfield' => 'k',
              'description' => 'Bathymetric Interval',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 104, 
              'tagfield' => '33',
              'tagsubfield' => 'l',
              'description' => 'Supplementary Bathymetric Interval',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 105, 
              'tagfield' => '34',
              'tagsubfield' => 'a',
              'description' => 'Coded Data for Computer Files',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 156, 
              'tagfield' => '46',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 160, 
              'tagfield' => '50',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 161, 
              'tagfield' => '51',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 162, 
              'tagfield' => '52',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 163, 
              'tagfield' => '53',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 164, 
              'tagfield' => '54',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 165, 
              'tagfield' => '55',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 166, 
              'tagfield' => '56',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 167, 
              'tagfield' => '57',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 168, 
              'tagfield' => '58',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 169, 
              'tagfield' => '59',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 170, 
              'tagfield' => '60',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 171, 
              'tagfield' => '61',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 172, 
              'tagfield' => '61',
              'tagsubfield' => 'a',
              'description' => 'Intervenção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 173, 
              'tagfield' => '61',
              'tagsubfield' => 'b',
              'description' => 'Identificação da intervenção',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 174, 
              'tagfield' => '61',
              'tagsubfield' => 'c',
              'description' => 'Tempo da intervenção',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 175, 
              'tagfield' => '61',
              'tagsubfield' => 'd',
              'description' => 'Intervalo da intervenção',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 176, 
              'tagfield' => '61',
              'tagsubfield' => 'e',
              'description' => 'Contingência da intervenção',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 177, 
              'tagfield' => '61',
              'tagsubfield' => 'f',
              'description' => 'Autorização',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 178, 
              'tagfield' => '61',
              'tagsubfield' => 'h',
              'description' => 'Jurisdição',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 179, 
              'tagfield' => '61',
              'tagsubfield' => 'i',
              'description' => 'Método da intervenção',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 180, 
              'tagfield' => '61',
              'tagsubfield' => 'j',
              'description' => 'Local da intervenção',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 181, 
              'tagfield' => '61',
              'tagsubfield' => 'k',
              'description' => 'Agente da intervenção',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 182, 
              'tagfield' => '61',
              'tagsubfield' => 'l',
              'description' => 'Estado do material',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 183, 
              'tagfield' => '61',
              'tagsubfield' => 'n',
              'description' => 'Extensão da intervenção',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 184, 
              'tagfield' => '61',
              'tagsubfield' => 'o',
              'description' => 'Tipo da unidade',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 185, 
              'tagfield' => '61',
              'tagsubfield' => 'p',
              'description' => 'Nota para informação interna',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 186, 
              'tagfield' => '61',
              'tagsubfield' => 'r',
              'description' => 'Nota para informação ao público',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 187, 
              'tagfield' => '62',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 188, 
              'tagfield' => '63',
              'tagsubfield' => 'a',
              'description' => 'Notas sobre índices, resumos e referências',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 189, 
              'tagfield' => '63',
              'tagsubfield' => 'b',
              'description' => 'Datas de cobertura',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 190, 
              'tagfield' => '63',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 193, 
              'tagfield' => '66',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 200, 
              'tagfield' => '72',
              'tagsubfield' => 'a',
              'description' => 'Citação preferencial',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 201, 
              'tagfield' => '73',
              'tagsubfield' => 'a',
              'description' => 'Texto da nota',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 204, 
              'tagfield' => '76',
              'tagsubfield' => 'a',
              'description' => 'Endereço da fonte de aquisição/assinatura',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 205, 
              'tagfield' => '76',
              'tagsubfield' => 'b',
              'description' => 'Número de existências',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 206, 
              'tagfield' => '76',
              'tagsubfield' => 'c',
              'description' => 'Tipo de material',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 207, 
              'tagfield' => '76',
              'tagsubfield' => 'd',
              'description' => 'Modalidades de aquisição',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 208, 
              'tagfield' => '77',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 209, 
              'tagfield' => '77',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 210, 
              'tagfield' => '77',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 211, 
              'tagfield' => '77',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 212, 
              'tagfield' => '77',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 213, 
              'tagfield' => '77',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 214, 
              'tagfield' => '77',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 215, 
              'tagfield' => '77',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 216, 
              'tagfield' => '77',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 217, 
              'tagfield' => '77',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 218, 
              'tagfield' => '77',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 219, 
              'tagfield' => '77',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 220, 
              'tagfield' => '77',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 221, 
              'tagfield' => '77',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 222, 
              'tagfield' => '77',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 223, 
              'tagfield' => '77',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 224, 
              'tagfield' => '78',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 225, 
              'tagfield' => '78',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 226, 
              'tagfield' => '78',
              'tagsubfield' => '5',
              'description' => 'Instituição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 227, 
              'tagfield' => '78',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 228, 
              'tagfield' => '78',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 229, 
              'tagfield' => '78',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 230, 
              'tagfield' => '78',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 231, 
              'tagfield' => '78',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 232, 
              'tagfield' => '78',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 233, 
              'tagfield' => '78',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 234, 
              'tagfield' => '78',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 235, 
              'tagfield' => '78',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 236, 
              'tagfield' => '78',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 237, 
              'tagfield' => '78',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 238, 
              'tagfield' => '78',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 239, 
              'tagfield' => '78',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 240, 
              'tagfield' => '79',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 241, 
              'tagfield' => '79',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 242, 
              'tagfield' => '79',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 243, 
              'tagfield' => '79',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 244, 
              'tagfield' => '79',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 245, 
              'tagfield' => '79',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 246, 
              'tagfield' => '79',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 247, 
              'tagfield' => '79',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 248, 
              'tagfield' => '79',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 249, 
              'tagfield' => '79',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 250, 
              'tagfield' => '79',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 251, 
              'tagfield' => '79',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 252, 
              'tagfield' => '79',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 253, 
              'tagfield' => '79',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 254, 
              'tagfield' => '79',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 255, 
              'tagfield' => '79',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 256, 
              'tagfield' => '80',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 257, 
              'tagfield' => '80',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 258, 
              'tagfield' => '80',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 259, 
              'tagfield' => '80',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 260, 
              'tagfield' => '80',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 261, 
              'tagfield' => '80',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 262, 
              'tagfield' => '80',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 263, 
              'tagfield' => '80',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 264, 
              'tagfield' => '80',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 265, 
              'tagfield' => '80',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 266, 
              'tagfield' => '80',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 267, 
              'tagfield' => '80',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 268, 
              'tagfield' => '80',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 269, 
              'tagfield' => '80',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 270, 
              'tagfield' => '80',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 271, 
              'tagfield' => '80',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 272, 
              'tagfield' => '81',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 273, 
              'tagfield' => '81',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 274, 
              'tagfield' => '81',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 275, 
              'tagfield' => '81',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 276, 
              'tagfield' => '81',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 277, 
              'tagfield' => '81',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 278, 
              'tagfield' => '81',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 279, 
              'tagfield' => '81',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 280, 
              'tagfield' => '81',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 281, 
              'tagfield' => '81',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 282, 
              'tagfield' => '81',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 283, 
              'tagfield' => '81',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 284, 
              'tagfield' => '81',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 285, 
              'tagfield' => '81',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 286, 
              'tagfield' => '81',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 287, 
              'tagfield' => '81',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 288, 
              'tagfield' => '82',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 289, 
              'tagfield' => '82',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 290, 
              'tagfield' => '82',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 291, 
              'tagfield' => '82',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 292, 
              'tagfield' => '82',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 293, 
              'tagfield' => '82',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 294, 
              'tagfield' => '82',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 295, 
              'tagfield' => '82',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 296, 
              'tagfield' => '82',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 297, 
              'tagfield' => '82',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 298, 
              'tagfield' => '82',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 299, 
              'tagfield' => '82',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 300, 
              'tagfield' => '82',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 301, 
              'tagfield' => '82',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 302, 
              'tagfield' => '82',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 303, 
              'tagfield' => '82',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 304, 
              'tagfield' => '83',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 305, 
              'tagfield' => '83',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 306, 
              'tagfield' => '83',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 307, 
              'tagfield' => '83',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 308, 
              'tagfield' => '83',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 309, 
              'tagfield' => '83',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 310, 
              'tagfield' => '83',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 311, 
              'tagfield' => '83',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 312, 
              'tagfield' => '83',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 313, 
              'tagfield' => '83',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 314, 
              'tagfield' => '83',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 315, 
              'tagfield' => '83',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 316, 
              'tagfield' => '83',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 317, 
              'tagfield' => '83',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 318, 
              'tagfield' => '83',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 319, 
              'tagfield' => '83',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 320, 
              'tagfield' => '84',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 321, 
              'tagfield' => '84',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 322, 
              'tagfield' => '84',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 323, 
              'tagfield' => '84',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 324, 
              'tagfield' => '84',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 325, 
              'tagfield' => '84',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 326, 
              'tagfield' => '84',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 327, 
              'tagfield' => '84',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 328, 
              'tagfield' => '84',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 329, 
              'tagfield' => '84',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 330, 
              'tagfield' => '84',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 331, 
              'tagfield' => '84',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 332, 
              'tagfield' => '84',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 333, 
              'tagfield' => '84',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 334, 
              'tagfield' => '84',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 335, 
              'tagfield' => '84',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 336, 
              'tagfield' => '85',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 337, 
              'tagfield' => '85',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 338, 
              'tagfield' => '85',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 339, 
              'tagfield' => '85',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 340, 
              'tagfield' => '85',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 341, 
              'tagfield' => '85',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 342, 
              'tagfield' => '85',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 343, 
              'tagfield' => '85',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 344, 
              'tagfield' => '85',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 345, 
              'tagfield' => '85',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 346, 
              'tagfield' => '85',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 347, 
              'tagfield' => '85',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 348, 
              'tagfield' => '85',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 349, 
              'tagfield' => '85',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 350, 
              'tagfield' => '85',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 351, 
              'tagfield' => '85',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 352, 
              'tagfield' => '86',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 353, 
              'tagfield' => '86',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 354, 
              'tagfield' => '86',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 355, 
              'tagfield' => '86',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 356, 
              'tagfield' => '86',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 357, 
              'tagfield' => '86',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 358, 
              'tagfield' => '86',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 359, 
              'tagfield' => '86',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 360, 
              'tagfield' => '86',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 361, 
              'tagfield' => '86',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 362, 
              'tagfield' => '86',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 363, 
              'tagfield' => '86',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 364, 
              'tagfield' => '86',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 365, 
              'tagfield' => '86',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 366, 
              'tagfield' => '86',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 367, 
              'tagfield' => '86',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 368, 
              'tagfield' => '87',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 369, 
              'tagfield' => '87',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 370, 
              'tagfield' => '87',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 371, 
              'tagfield' => '87',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 372, 
              'tagfield' => '87',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 373, 
              'tagfield' => '87',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 374, 
              'tagfield' => '87',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 375, 
              'tagfield' => '87',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 376, 
              'tagfield' => '87',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 377, 
              'tagfield' => '87',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 378, 
              'tagfield' => '87',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 379, 
              'tagfield' => '87',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 380, 
              'tagfield' => '87',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 381, 
              'tagfield' => '87',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 382, 
              'tagfield' => '87',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 383, 
              'tagfield' => '87',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 384, 
              'tagfield' => '88',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 385, 
              'tagfield' => '88',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 386, 
              'tagfield' => '88',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 387, 
              'tagfield' => '88',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 388, 
              'tagfield' => '88',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 389, 
              'tagfield' => '88',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 390, 
              'tagfield' => '88',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 391, 
              'tagfield' => '88',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 392, 
              'tagfield' => '88',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 393, 
              'tagfield' => '88',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 394, 
              'tagfield' => '88',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 395, 
              'tagfield' => '88',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 396, 
              'tagfield' => '88',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 397, 
              'tagfield' => '88',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 398, 
              'tagfield' => '88',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 399, 
              'tagfield' => '88',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 400, 
              'tagfield' => '89',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 401, 
              'tagfield' => '89',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 402, 
              'tagfield' => '89',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 403, 
              'tagfield' => '89',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 404, 
              'tagfield' => '89',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 405, 
              'tagfield' => '89',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 406, 
              'tagfield' => '89',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 407, 
              'tagfield' => '89',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 408, 
              'tagfield' => '89',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 409, 
              'tagfield' => '89',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 410, 
              'tagfield' => '89',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 411, 
              'tagfield' => '89',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 412, 
              'tagfield' => '89',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 413, 
              'tagfield' => '89',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 414, 
              'tagfield' => '89',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 415, 
              'tagfield' => '89',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 416, 
              'tagfield' => '90',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 417, 
              'tagfield' => '90',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 418, 
              'tagfield' => '90',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 419, 
              'tagfield' => '90',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 420, 
              'tagfield' => '90',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 421, 
              'tagfield' => '90',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 422, 
              'tagfield' => '90',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 423, 
              'tagfield' => '90',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 424, 
              'tagfield' => '90',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 425, 
              'tagfield' => '90',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 426, 
              'tagfield' => '90',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 427, 
              'tagfield' => '90',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 428, 
              'tagfield' => '90',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 429, 
              'tagfield' => '90',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 430, 
              'tagfield' => '90',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 431, 
              'tagfield' => '90',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 432, 
              'tagfield' => '91',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 433, 
              'tagfield' => '91',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 434, 
              'tagfield' => '91',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 435, 
              'tagfield' => '91',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 436, 
              'tagfield' => '91',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 437, 
              'tagfield' => '91',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 438, 
              'tagfield' => '91',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 439, 
              'tagfield' => '91',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 440, 
              'tagfield' => '91',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 441, 
              'tagfield' => '91',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 442, 
              'tagfield' => '91',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 443, 
              'tagfield' => '91',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 444, 
              'tagfield' => '91',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 445, 
              'tagfield' => '91',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 446, 
              'tagfield' => '91',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 447, 
              'tagfield' => '91',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 448, 
              'tagfield' => '92',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 449, 
              'tagfield' => '92',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 450, 
              'tagfield' => '92',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 451, 
              'tagfield' => '92',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 452, 
              'tagfield' => '92',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 453, 
              'tagfield' => '92',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 454, 
              'tagfield' => '92',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 455, 
              'tagfield' => '92',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 456, 
              'tagfield' => '92',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 457, 
              'tagfield' => '92',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 458, 
              'tagfield' => '92',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 459, 
              'tagfield' => '92',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 460, 
              'tagfield' => '92',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 461, 
              'tagfield' => '92',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 462, 
              'tagfield' => '92',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 463, 
              'tagfield' => '92',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 464, 
              'tagfield' => '93',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 465, 
              'tagfield' => '93',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 466, 
              'tagfield' => '93',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 467, 
              'tagfield' => '93',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 468, 
              'tagfield' => '93',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 469, 
              'tagfield' => '93',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 470, 
              'tagfield' => '93',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 471, 
              'tagfield' => '93',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 472, 
              'tagfield' => '93',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 473, 
              'tagfield' => '93',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 474, 
              'tagfield' => '93',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 475, 
              'tagfield' => '93',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 476, 
              'tagfield' => '93',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 477, 
              'tagfield' => '93',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 478, 
              'tagfield' => '93',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 479, 
              'tagfield' => '93',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 480, 
              'tagfield' => '94',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 481, 
              'tagfield' => '94',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 482, 
              'tagfield' => '94',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 483, 
              'tagfield' => '94',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 484, 
              'tagfield' => '94',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 485, 
              'tagfield' => '94',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 486, 
              'tagfield' => '94',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 487, 
              'tagfield' => '94',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 488, 
              'tagfield' => '94',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 489, 
              'tagfield' => '94',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 490, 
              'tagfield' => '94',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 491, 
              'tagfield' => '94',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 492, 
              'tagfield' => '94',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 493, 
              'tagfield' => '94',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 494, 
              'tagfield' => '94',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 495, 
              'tagfield' => '94',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 496, 
              'tagfield' => '95',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 497, 
              'tagfield' => '95',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 498, 
              'tagfield' => '95',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 499, 
              'tagfield' => '95',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 500, 
              'tagfield' => '95',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 501, 
              'tagfield' => '95',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 502, 
              'tagfield' => '95',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 503, 
              'tagfield' => '95',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 504, 
              'tagfield' => '95',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 505, 
              'tagfield' => '95',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 506, 
              'tagfield' => '95',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 507, 
              'tagfield' => '95',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 508, 
              'tagfield' => '95',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 509, 
              'tagfield' => '95',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 510, 
              'tagfield' => '95',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 511, 
              'tagfield' => '95',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 512, 
              'tagfield' => '96',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 513, 
              'tagfield' => '96',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 514, 
              'tagfield' => '96',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 515, 
              'tagfield' => '96',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 516, 
              'tagfield' => '96',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 517, 
              'tagfield' => '96',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 518, 
              'tagfield' => '96',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 519, 
              'tagfield' => '96',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 520, 
              'tagfield' => '96',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 521, 
              'tagfield' => '96',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 522, 
              'tagfield' => '96',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 523, 
              'tagfield' => '96',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 524, 
              'tagfield' => '96',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 525, 
              'tagfield' => '96',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 526, 
              'tagfield' => '96',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 527, 
              'tagfield' => '96',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 528, 
              'tagfield' => '97',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 529, 
              'tagfield' => '97',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 530, 
              'tagfield' => '97',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 531, 
              'tagfield' => '97',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 532, 
              'tagfield' => '97',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 533, 
              'tagfield' => '97',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 534, 
              'tagfield' => '97',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 535, 
              'tagfield' => '97',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 536, 
              'tagfield' => '97',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 537, 
              'tagfield' => '97',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 538, 
              'tagfield' => '97',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 539, 
              'tagfield' => '97',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 540, 
              'tagfield' => '97',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 541, 
              'tagfield' => '97',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 542, 
              'tagfield' => '97',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 543, 
              'tagfield' => '97',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 544, 
              'tagfield' => '98',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 545, 
              'tagfield' => '98',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 546, 
              'tagfield' => '98',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 547, 
              'tagfield' => '98',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 548, 
              'tagfield' => '98',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 549, 
              'tagfield' => '98',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 550, 
              'tagfield' => '98',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 551, 
              'tagfield' => '98',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 552, 
              'tagfield' => '98',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 553, 
              'tagfield' => '98',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 554, 
              'tagfield' => '98',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 555, 
              'tagfield' => '98',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 556, 
              'tagfield' => '98',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 557, 
              'tagfield' => '98',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 558, 
              'tagfield' => '98',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 559, 
              'tagfield' => '98',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 560, 
              'tagfield' => '99',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 561, 
              'tagfield' => '99',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 562, 
              'tagfield' => '99',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 563, 
              'tagfield' => '99',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 564, 
              'tagfield' => '99',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 565, 
              'tagfield' => '99',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 566, 
              'tagfield' => '99',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 567, 
              'tagfield' => '99',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 568, 
              'tagfield' => '99',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 569, 
              'tagfield' => '99',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 570, 
              'tagfield' => '99',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 571, 
              'tagfield' => '99',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 572, 
              'tagfield' => '99',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 573, 
              'tagfield' => '99',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 574, 
              'tagfield' => '99',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 575, 
              'tagfield' => '99',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 576, 
              'tagfield' => '100',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 577, 
              'tagfield' => '100',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 578, 
              'tagfield' => '100',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 579, 
              'tagfield' => '100',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 580, 
              'tagfield' => '100',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 581, 
              'tagfield' => '100',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 582, 
              'tagfield' => '100',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 583, 
              'tagfield' => '100',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 584, 
              'tagfield' => '100',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 585, 
              'tagfield' => '100',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 586, 
              'tagfield' => '100',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 587, 
              'tagfield' => '100',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 588, 
              'tagfield' => '100',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 589, 
              'tagfield' => '100',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 590, 
              'tagfield' => '100',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 591, 
              'tagfield' => '100',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 592, 
              'tagfield' => '101',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 593, 
              'tagfield' => '101',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 594, 
              'tagfield' => '101',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 595, 
              'tagfield' => '101',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 596, 
              'tagfield' => '101',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 597, 
              'tagfield' => '101',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 598, 
              'tagfield' => '101',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 599, 
              'tagfield' => '101',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 600, 
              'tagfield' => '101',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 601, 
              'tagfield' => '101',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 602, 
              'tagfield' => '101',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 603, 
              'tagfield' => '101',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 604, 
              'tagfield' => '101',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 605, 
              'tagfield' => '101',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 606, 
              'tagfield' => '101',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 607, 
              'tagfield' => '101',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 608, 
              'tagfield' => '102',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 609, 
              'tagfield' => '102',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 610, 
              'tagfield' => '102',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 611, 
              'tagfield' => '102',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 612, 
              'tagfield' => '102',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 613, 
              'tagfield' => '102',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 614, 
              'tagfield' => '102',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 615, 
              'tagfield' => '102',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 616, 
              'tagfield' => '102',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 617, 
              'tagfield' => '102',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 618, 
              'tagfield' => '102',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 619, 
              'tagfield' => '102',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 620, 
              'tagfield' => '102',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 621, 
              'tagfield' => '102',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 622, 
              'tagfield' => '102',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 623, 
              'tagfield' => '102',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 624, 
              'tagfield' => '103',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 625, 
              'tagfield' => '103',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 626, 
              'tagfield' => '103',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 627, 
              'tagfield' => '103',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 628, 
              'tagfield' => '103',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 629, 
              'tagfield' => '103',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 630, 
              'tagfield' => '103',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 631, 
              'tagfield' => '103',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 632, 
              'tagfield' => '103',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 633, 
              'tagfield' => '103',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 634, 
              'tagfield' => '103',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 635, 
              'tagfield' => '103',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 636, 
              'tagfield' => '103',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 637, 
              'tagfield' => '103',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 638, 
              'tagfield' => '103',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 639, 
              'tagfield' => '103',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 640, 
              'tagfield' => '104',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 641, 
              'tagfield' => '104',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 642, 
              'tagfield' => '104',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 643, 
              'tagfield' => '104',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 644, 
              'tagfield' => '104',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 645, 
              'tagfield' => '104',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 646, 
              'tagfield' => '104',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 647, 
              'tagfield' => '104',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 648, 
              'tagfield' => '104',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 649, 
              'tagfield' => '104',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 650, 
              'tagfield' => '104',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 651, 
              'tagfield' => '104',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 652, 
              'tagfield' => '104',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 653, 
              'tagfield' => '104',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 654, 
              'tagfield' => '104',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 655, 
              'tagfield' => '104',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 672, 
              'tagfield' => '106',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 673, 
              'tagfield' => '106',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 674, 
              'tagfield' => '106',
              'tagsubfield' => '5',
              'description' => 'Instituição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 675, 
              'tagfield' => '106',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 676, 
              'tagfield' => '106',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 677, 
              'tagfield' => '106',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 678, 
              'tagfield' => '106',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 679, 
              'tagfield' => '106',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 680, 
              'tagfield' => '106',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 681, 
              'tagfield' => '106',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 682, 
              'tagfield' => '106',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 683, 
              'tagfield' => '106',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 684, 
              'tagfield' => '106',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 685, 
              'tagfield' => '106',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 686, 
              'tagfield' => '106',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 687, 
              'tagfield' => '106',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 704, 
              'tagfield' => '108',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 705, 
              'tagfield' => '108',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 706, 
              'tagfield' => '108',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 707, 
              'tagfield' => '108',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 708, 
              'tagfield' => '108',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 709, 
              'tagfield' => '108',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 710, 
              'tagfield' => '108',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 711, 
              'tagfield' => '108',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 712, 
              'tagfield' => '108',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 713, 
              'tagfield' => '108',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 714, 
              'tagfield' => '108',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 715, 
              'tagfield' => '108',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 716, 
              'tagfield' => '108',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 717, 
              'tagfield' => '108',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 718, 
              'tagfield' => '108',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 719, 
              'tagfield' => '108',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 720, 
              'tagfield' => '109',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 721, 
              'tagfield' => '109',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 722, 
              'tagfield' => '109',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 723, 
              'tagfield' => '109',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 724, 
              'tagfield' => '109',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 725, 
              'tagfield' => '109',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 726, 
              'tagfield' => '109',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 727, 
              'tagfield' => '109',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 728, 
              'tagfield' => '109',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 729, 
              'tagfield' => '109',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 730, 
              'tagfield' => '109',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 731, 
              'tagfield' => '109',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 732, 
              'tagfield' => '109',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 733, 
              'tagfield' => '109',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 734, 
              'tagfield' => '109',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 735, 
              'tagfield' => '109',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 736, 
              'tagfield' => '110',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 737, 
              'tagfield' => '110',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 738, 
              'tagfield' => '110',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 739, 
              'tagfield' => '110',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 740, 
              'tagfield' => '110',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 741, 
              'tagfield' => '110',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 742, 
              'tagfield' => '110',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 743, 
              'tagfield' => '110',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 744, 
              'tagfield' => '110',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 745, 
              'tagfield' => '110',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 746, 
              'tagfield' => '110',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 747, 
              'tagfield' => '110',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 748, 
              'tagfield' => '110',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 749, 
              'tagfield' => '110',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 750, 
              'tagfield' => '110',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 751, 
              'tagfield' => '110',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 752, 
              'tagfield' => '111',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 753, 
              'tagfield' => '111',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 754, 
              'tagfield' => '111',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 755, 
              'tagfield' => '111',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 756, 
              'tagfield' => '111',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 757, 
              'tagfield' => '111',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 758, 
              'tagfield' => '111',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 759, 
              'tagfield' => '111',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 760, 
              'tagfield' => '111',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 761, 
              'tagfield' => '111',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 762, 
              'tagfield' => '111',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 763, 
              'tagfield' => '111',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 764, 
              'tagfield' => '111',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 765, 
              'tagfield' => '111',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 766, 
              'tagfield' => '111',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 767, 
              'tagfield' => '111',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 768, 
              'tagfield' => '112',
              'tagsubfield' => '0',
              'description' => 'Identificação do registo bibliográfico',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 769, 
              'tagfield' => '112',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 770, 
              'tagfield' => '112',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 771, 
              'tagfield' => '112',
              'tagsubfield' => 'a',
              'description' => 'PER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 772, 
              'tagfield' => '112',
              'tagsubfield' => 'c',
              'description' => 'Local da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 773, 
              'tagfield' => '112',
              'tagsubfield' => 'd',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 774, 
              'tagfield' => '112',
              'tagsubfield' => 'e',
              'description' => 'Estado da edição',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 775, 
              'tagfield' => '112',
              'tagsubfield' => 'h',
              'description' => 'Número da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 776, 
              'tagfield' => '112',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte ou secção',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 777, 
              'tagfield' => '112',
              'tagsubfield' => 'p',
              'description' => 'Descrição física',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 778, 
              'tagfield' => '112',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 779, 
              'tagfield' => '112',
              'tagsubfield' => 'u',
              'description' => 'URL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 780, 
              'tagfield' => '112',
              'tagsubfield' => 'v',
              'description' => 'Número do volume',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 781, 
              'tagfield' => '112',
              'tagsubfield' => 'x',
              'description' => 'ISSN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 782, 
              'tagfield' => '112',
              'tagsubfield' => 'y',
              'description' => 'ISBN/ISMN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 783, 
              'tagfield' => '112',
              'tagsubfield' => 'z',
              'description' => 'CODEN',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 817, 
              'tagfield' => '115',
              'tagsubfield' => 'a',
              'description' => 'Forma do cabeçalho',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 818, 
              'tagfield' => '115',
              'tagsubfield' => 'b',
              'description' => 'Subrubrica de forma',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 819, 
              'tagfield' => '115',
              'tagsubfield' => 'd',
              'description' => 'Month and Day',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 820, 
              'tagfield' => '115',
              'tagsubfield' => 'e',
              'description' => 'Surname of Person',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 821, 
              'tagfield' => '115',
              'tagsubfield' => 'f',
              'description' => 'Forename',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 822, 
              'tagfield' => '115',
              'tagsubfield' => 'h',
              'description' => 'Personal Name Qualifier',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 823, 
              'tagfield' => '115',
              'tagsubfield' => 'i',
              'description' => 'Ttle of Part',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 824, 
              'tagfield' => '115',
              'tagsubfield' => 'j',
              'description' => 'Year',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 825, 
              'tagfield' => '115',
              'tagsubfield' => 'k',
              'description' => 'Numeration (Arabic)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 826, 
              'tagfield' => '115',
              'tagsubfield' => 'l',
              'description' => 'Numeration (Roman)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 827, 
              'tagfield' => '115',
              'tagsubfield' => 'm',
              'description' => 'Locality',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 828, 
              'tagfield' => '115',
              'tagsubfield' => 'n',
              'description' => 'Institution in Locality',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 829, 
              'tagfield' => '116',
              'tagsubfield' => 'a',
              'description' => 'Título paralelo',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 830, 
              'tagfield' => '116',
              'tagsubfield' => 'e',
              'description' => 'Informação de outro título',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 831, 
              'tagfield' => '116',
              'tagsubfield' => 'h',
              'description' => 'Número da parte',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 832, 
              'tagfield' => '116',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 833, 
              'tagfield' => '116',
              'tagsubfield' => 'j',
              'description' => 'Volume or Dates Associated with Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 834, 
              'tagfield' => '116',
              'tagsubfield' => 'n',
              'description' => 'Informação vária',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 835, 
              'tagfield' => '116',
              'tagsubfield' => 'z',
              'description' => 'Language of Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 838, 
              'tagfield' => '118',
              'tagsubfield' => 'a',
              'description' => 'Added Title - Page Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 839, 
              'tagfield' => '118',
              'tagsubfield' => 'e',
              'description' => 'Informação de outro título',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 840, 
              'tagfield' => '118',
              'tagsubfield' => 'h',
              'description' => 'Número da parte',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 841, 
              'tagfield' => '118',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 842, 
              'tagfield' => '119',
              'tagsubfield' => 'a',
              'description' => 'Caption Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 843, 
              'tagfield' => '119',
              'tagsubfield' => 'e',
              'description' => 'Informação de outro título',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 844, 
              'tagfield' => '120',
              'tagsubfield' => 'a',
              'description' => 'Running Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 845, 
              'tagfield' => '121',
              'tagsubfield' => 'a',
              'description' => 'Spine Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 846, 
              'tagfield' => '121',
              'tagsubfield' => 'e',
              'description' => 'Informação de outro título',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 849, 
              'tagfield' => '123',
              'tagsubfield' => 'a',
              'description' => 'Title Proper, Variant Title or Uniform Title in Standard Modern Spelling',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 850, 
              'tagfield' => '123',
              'tagsubfield' => 'e',
              'description' => 'Informação de outro título',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 851, 
              'tagfield' => '123',
              'tagsubfield' => 'h',
              'description' => 'Número da parte',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 852, 
              'tagfield' => '123',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 853, 
              'tagfield' => '123',
              'tagsubfield' => 'j',
              'description' => 'Volume or Dates Associated with Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 854, 
              'tagfield' => '123',
              'tagsubfield' => 'n',
              'description' => 'Informação vária',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 855, 
              'tagfield' => '123',
              'tagsubfield' => 'z',
              'description' => 'Language of Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 867, 
              'tagfield' => '126',
              'tagsubfield' => 'a',
              'description' => 'Abbreviated Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 868, 
              'tagfield' => '126',
              'tagsubfield' => 'b',
              'description' => 'Qualifier',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 869, 
              'tagfield' => '126',
              'tagsubfield' => 'v',
              'description' => 'Volume Designation',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 870, 
              'tagfield' => '127',
              'tagsubfield' => 'a',
              'description' => 'Expanded Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 871, 
              'tagfield' => '127',
              'tagsubfield' => 'z',
              'description' => 'Language of Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 872, 
              'tagfield' => '128',
              'tagsubfield' => 'a',
              'description' => 'Additional Title Supplied by Cataloguer',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 873, 
              'tagfield' => '129',
              'tagsubfield' => 'a',
              'description' => 'Translated Title Supplied by Cataloguer',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 874, 
              'tagfield' => '129',
              'tagsubfield' => 'e',
              'description' => 'Informação de outro título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 875, 
              'tagfield' => '129',
              'tagsubfield' => 'h',
              'description' => 'Número da parte',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 876, 
              'tagfield' => '129',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 877, 
              'tagfield' => '129',
              'tagsubfield' => 'z',
              'description' => 'Language of Translated Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 878, 
              'tagfield' => '130',
              'tagsubfield' => 'a',
              'description' => 'Section Title',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 902, 
              'tagfield' => '133',
              'tagsubfield' => '2',
              'description' => 'Número de registo de entrada de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 903, 
              'tagfield' => '133',
              'tagsubfield' => '3',
              'description' => 'Código do sistema',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 904, 
              'tagfield' => '133',
              'tagsubfield' => 'a',
              'description' => 'Palavra de ordem',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 905, 
              'tagfield' => '133',
              'tagsubfield' => 'f',
              'description' => 'Datas',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 906, 
              'tagfield' => '133',
              'tagsubfield' => 'x',
              'description' => 'Subdivisão de assunto',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 907, 
              'tagfield' => '133',
              'tagsubfield' => 'y',
              'description' => 'Subdivisão geográfica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 908, 
              'tagfield' => '133',
              'tagsubfield' => 'z',
              'description' => 'Subdivisão cronológica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 909, 
              'tagfield' => '134',
              'tagsubfield' => '1',
              'description' => 'Linking Data',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 910, 
              'tagfield' => '135',
              'tagsubfield' => '2',
              'description' => 'Número de registo de entrada de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 911, 
              'tagfield' => '135',
              'tagsubfield' => '3',
              'description' => 'Código do sistema',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 912, 
              'tagfield' => '135',
              'tagsubfield' => 'a',
              'description' => 'Palavra de ordem',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 913, 
              'tagfield' => '135',
              'tagsubfield' => 'h',
              'description' => 'Número da parte',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 914, 
              'tagfield' => '135',
              'tagsubfield' => 'i',
              'description' => 'Nome da parte',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 915, 
              'tagfield' => '135',
              'tagsubfield' => 'k',
              'description' => 'Data da publicação',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 916, 
              'tagfield' => '135',
              'tagsubfield' => 'l',
              'description' => 'Subrubrica de forma',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 917, 
              'tagfield' => '135',
              'tagsubfield' => 'm',
              'description' => 'Language (when Part of Heading)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 918, 
              'tagfield' => '135',
              'tagsubfield' => 'n',
              'description' => 'Informação vária',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 919, 
              'tagfield' => '135',
              'tagsubfield' => 'q',
              'description' => 'Versão (ou data da versão)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 920, 
              'tagfield' => '135',
              'tagsubfield' => 'x',
              'description' => 'Subdivisão de assunto',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 921, 
              'tagfield' => '135',
              'tagsubfield' => 'y',
              'description' => 'Subdivisão geográfica',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 922, 
              'tagfield' => '135',
              'tagsubfield' => 'z',
              'description' => 'Subdivisão cronológica',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 930, 
              'tagfield' => '137',
              'tagsubfield' => '2',
              'description' => 'Número de registo de entrada de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 931, 
              'tagfield' => '137',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 932, 
              'tagfield' => '137',
              'tagsubfield' => 'a',
              'description' => 'Palavra de ordem',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 933, 
              'tagfield' => '137',
              'tagsubfield' => 'x',
              'description' => 'Subdivisão de assunto',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 934, 
              'tagfield' => '137',
              'tagsubfield' => 'y',
              'description' => 'Subdivisão geográfica',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 935, 
              'tagfield' => '137',
              'tagsubfield' => 'z',
              'description' => 'Subdivisão cronológica',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 936, 
              'tagfield' => '138',
              'tagsubfield' => '2',
              'description' => 'Número de registo de entrada de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 937, 
              'tagfield' => '138',
              'tagsubfield' => '3',
              'description' => 'Número do registo de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 938, 
              'tagfield' => '138',
              'tagsubfield' => '5',
              'description' => 'Institutição à qual o campo se aplica',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 939, 
              'tagfield' => '138',
              'tagsubfield' => 'a',
              'description' => 'Palavra de ordem',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 940, 
              'tagfield' => '138',
              'tagsubfield' => 'x',
              'description' => 'Subdivisão de assunto',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 941, 
              'tagfield' => '138',
              'tagsubfield' => 'y',
              'description' => 'Subdivisão geográfica',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 942, 
              'tagfield' => '138',
              'tagsubfield' => 'z',
              'description' => 'Subdivisão cronológica',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 944, 
              'tagfield' => '140',
              'tagsubfield' => '2',
              'description' => 'Número de registo de entrada de autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 945, 
              'tagfield' => '140',
              'tagsubfield' => '3',
              'description' => 'Código do sistema',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 946, 
              'tagfield' => '140',
              'tagsubfield' => 'a',
              'description' => 'Subject Category Entry Element Text',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 947, 
              'tagfield' => '140',
              'tagsubfield' => 'm',
              'description' => 'Subject Category Subdivision Text',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 948, 
              'tagfield' => '140',
              'tagsubfield' => 'n',
              'description' => 'Subject Category Code',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 949, 
              'tagfield' => '140',
              'tagsubfield' => 'x',
              'description' => 'Subject Category Subdivision Code',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 950, 
              'tagfield' => '141',
              'tagsubfield' => '3',
              'description' => 'Código do sistema',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 951, 
              'tagfield' => '141',
              'tagsubfield' => 'a',
              'description' => 'Country',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 952, 
              'tagfield' => '141',
              'tagsubfield' => 'b',
              'description' => 'State or Province, etc.',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 953, 
              'tagfield' => '141',
              'tagsubfield' => 'c',
              'description' => 'County',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 954, 
              'tagfield' => '141',
              'tagsubfield' => 'd',
              'description' => 'City',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 955, 
              'tagfield' => '142',
              'tagsubfield' => 'a',
              'description' => 'Make and Model of Machines',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 956, 
              'tagfield' => '142',
              'tagsubfield' => 'b',
              'description' => 'Programming Language',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 957, 
              'tagfield' => '142',
              'tagsubfield' => 'c',
              'description' => 'Operating System',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 958, 
              'tagfield' => '143',
              'tagsubfield' => 'a',
              'description' => 'Geographic Area Code',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 959, 
              'tagfield' => '144',
              'tagsubfield' => 'a',
              'description' => 'Time Period Code',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 960, 
              'tagfield' => '145',
              'tagsubfield' => 'b',
              'description' => 'Subject Indicator Number',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 961, 
              'tagfield' => '145',
              'tagsubfield' => 'c',
              'description' => 'String',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 962, 
              'tagfield' => '145',
              'tagsubfield' => 'e',
              'description' => 'Reference Indicator Number',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 963, 
              'tagfield' => '145',
              'tagsubfield' => 'z',
              'description' => 'Language of Terms',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 967, 
              'tagfield' => '147',
              'tagsubfield' => 'a',
              'description' => 'Number',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 968, 
              'tagfield' => '147',
              'tagsubfield' => 'v',
              'description' => 'Edition',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 969, 
              'tagfield' => '147',
              'tagsubfield' => 'z',
              'description' => 'Language of Edition',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 970, 
              'tagfield' => '148',
              'tagsubfield' => 'a',
              'description' => 'Class Number',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 971, 
              'tagfield' => '148',
              'tagsubfield' => 'b',
              'description' => 'Book Number',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1040, 
              'tagfield' => '156',
              'tagsubfield' => '3',
              'description' => 'Código do sistema',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1041, 
              'tagfield' => '156',
              'tagsubfield' => '4',
              'description' => 'Código de função',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1042, 
              'tagfield' => '156',
              'tagsubfield' => 'a',
              'description' => 'Palavra de ordem',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1043, 
              'tagfield' => '156',
              'tagsubfield' => 'f',
              'description' => 'Datas',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1044, 
              'tagfield' => '157',
              'tagsubfield' => '3',
              'description' => 'Código do sistema',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1045, 
              'tagfield' => '157',
              'tagsubfield' => '4',
              'description' => 'Código de função',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1046, 
              'tagfield' => '157',
              'tagsubfield' => 'a',
              'description' => 'Palavra de ordem',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1047, 
              'tagfield' => '157',
              'tagsubfield' => 'f',
              'description' => 'Datas',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1048, 
              'tagfield' => '158',
              'tagsubfield' => '3',
              'description' => 'Código do sistema',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1049, 
              'tagfield' => '158',
              'tagsubfield' => '4',
              'description' => 'Código de função',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1050, 
              'tagfield' => '158',
              'tagsubfield' => 'a',
              'description' => 'Palavra de ordem',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1051, 
              'tagfield' => '158',
              'tagsubfield' => 'f',
              'description' => 'Datas',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1057, 
              'tagfield' => '160',
              'tagsubfield' => 'a',
              'description' => 'Código do centro',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1180, 
              'tagfield' => '134',
              'tagsubfield' => 'a',
              'description' => 'Palavra de ordem - nome',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1181, 
              'tagfield' => '134',
              'tagsubfield' => 't',
              'description' => 'Título',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcsubfields')->insert([
              'id'  => 1190, 
              'tagfield' => '137',
              'tagsubfield' => '9',
              'description' => 'ID Autoridade',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);



    }
}
