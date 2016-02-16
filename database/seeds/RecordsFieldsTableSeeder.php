<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RecordsFieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records_fields')->insert([
        	'id'			=> 1,
            'record_id'     => 1,
            'tagfield' 		=> 1,
            'tagsubfield'   => 1,
            'value'         => 'a1',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('records_fields')->insert([
            'id'            => 2,
            'record_id'     => 1,
            'tagfield'      => 7,
            'tagsubfield'   => 8,
            'value'         => 'Título do livro',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('records_fields')->insert([
            'id'            => 3,
            'record_id'     => 1,
            'tagfield'      => 7,
            'tagsubfield'   => 9,
            'value'         => 'Complementos de título',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('records_fields')->insert([
            'id'            => 4,
            'record_id'     => 1,
            'tagfield'      => 7,
            'tagsubfield'   => 10,
            'value'         => 'Responsabilidade',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('records_fields')->insert([
            'id'            => 5,
            'record_id'     => 1,
            'tagfield'      => 21,
            'tagsubfield'   => 30,
            'value'         => 'Assunto 1',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('records_fields')->insert([
            'id'            => 6,
            'record_id'     => 1,
            'tagfield'      => 15,
            'tagsubfield'   => 22,
            'value'         => 'Nome do autor',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('records_fields')->insert([
            'id'            => 7,
            'record_id'     => 1,
            'tagfield'      => 15,
            'tagsubfield'   => 23,
            'value'         => 'Resto do nome',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('records_fields')->insert([
            'id'            => 8,
            'record_id'     => 1,
            'tagfield'      => 15,
            'tagsubfield'   => 24,
            'value'         => '',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);        
    }
}
