<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itemtypes')->insert([
        	'id'			=> 1,
            'name' 		    => 'Book',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('itemtypes')->insert([
            'id'            => 2,
            'name'          => 'Generic',
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('itemtype_marcfield')->insert([
            'itemtype_id'   => 1,
            'marcfield_id'  => 1,
        ]);

        DB::table('itemtype_marcfield')->insert([
            'itemtype_id'   => 1,
            'marcfield_id'  => 7,
        ]);

        DB::table('itemtype_marcfield')->insert([
            'itemtype_id'   => 1,
            'marcfield_id'  => 21,
        ]);

        DB::table('itemtype_marcfield')->insert([
            'itemtype_id'   => 1,
            'marcfield_id'  => 15,
        ]);
    }
}
