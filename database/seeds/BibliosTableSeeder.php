<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BibliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biblios')->insert([
        	'id'			=> 1,
            'name' 		    => 'Biblioteca Geral',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('biblios')->insert([
            'id'            => 2,
            'name'          => 'Biblioteca Joanina',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);        
    }
}
