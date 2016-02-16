<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
        	'id'			=> 1,
            'biblio'        => 1,
            'itemtype' 		=> 1,
            'hidden'        => 0,
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);  
    }
}
