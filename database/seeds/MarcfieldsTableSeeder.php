<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MarcfieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcfields')->insert([
        	'id'			=> 1,
            'tagfield' 		=> '001',
            'description' 	=> 'identificador do registo',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);


		DB::table('marcfields')->insert([
        	'id'			=> 2,
            'tagfield' 		=> '010',
            'description' 	=> 'ISBN',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 3,
            'tagfield' 		=> '011',
            'description' 	=> 'ISSN',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 4,
            'tagfield' 		=> '100',
            'description' 	=> 'dados gerais de processamento',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 5,
            'tagfield' 		=> '101',
            'description' 	=> 'língua do documento',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 6,
            'tagfield' 		=> '102 ',
            'description' 	=> 'país de publicação ou produção',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 7,
            'tagfield' 		=> '200',
            'description' 	=> 'título e indicação de responsabilidade',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 8,
            'tagfield' 		=> '205',
            'description' 	=> 'edição',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 9,
            'tagfield' 		=> '207',
            'description' 	=> 'numeração',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 10,
            'tagfield' 		=> '210',
            'description' 	=> 'publicação',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 11,
            'tagfield' 		=> '215',
            'description' 	=> 'descrição física',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 12,
            'tagfield' 		=> '300',
            'description' 	=> 'notas gerais',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 13,
            'tagfield' 		=> '518',
            'description' 	=> 'título na grafia atualizada',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 14,
            'tagfield' 		=> '532',
            'description' 	=> 'título desenvolvido',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 15,
            'tagfield' 		=> '700',
            'description' 	=> 'autor (pessoa física)',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 16,
            'tagfield' 		=> '701',
            'description' 	=> 'coautor',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 17,
            'tagfield' 		=> '702',
            'description' 	=> 'autores secundários',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcfields')->insert([
        	'id'			=> 18,
            'tagfield' 		=> '710',
            'description' 	=> 'autor coletividade',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        
		DB::table('marcfields')->insert([
        	'id'			=> 19,
            'tagfield' 		=> '712',
            'description' 	=> 'autores coletivos secundários',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
		DB::table('marcfields')->insert([
        	'id'			=> 20,
            'tagfield' 		=> '966',
            'description' 	=> 'cota',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('marcfields')->insert([
        	'id'			=> 21,
            'tagfield' 		=> '605',
            'description' 	=> 'Assunto',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
