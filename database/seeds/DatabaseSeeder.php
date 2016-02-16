<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(BibliosTableSeeder::class);
        $this->call(MarcfieldsTableSeeder::class);
        $this->call(MarcsubfieldsTableSeeder::class);
        $this->call(ItemtypesTableSeeder::class);
        $this->call(RecordsTableSeeder::class);
        $this->call(RecordsFieldsTableSeeder::class);

        Model::reguard();
    }
}
