<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MarcsubfieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('marcsubfields')->insert([
        	'id'			=> 1,
        	'tagfield'		=> 1,
            'tagsubfield'	=> '',
            'description' 	=> 'identificador do registo',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);


		DB::table('marcsubfields')->insert([
        	'id'			=> 2,
            'tagfield' 		=> 2,
            'tagsubfield'	=> 'a',
            'description' 	=> 'ISBN',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 3,
            'tagfield' 		=> 3,
            'tagsubfield'	=> 'a',
            'description' 	=> 'ISSN',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 4,
            'tagfield' 		=> 4,
            'tagsubfield'	=> '',
            'description' 	=> 'dados gerais de processamento',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 5,
            'tagfield' 		=> 5,
            'tagsubfield'	=> 'a',
            'description' 	=> 'língua do documento',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

   		DB::table('marcsubfields')->insert([
        	'id'			=> 6,
            'tagfield' 		=> 5,
            'tagsubfield'	=> 'c',
            'description' 	=> 'língua do texto original',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 7,
            'tagfield' 		=> 6,
            'tagsubfield'	=> '',
            'description' 	=> 'país de publicação ou produção',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 8,
            'tagfield' 		=> 7,
            'tagsubfield'	=> 'a',
            'description' 	=> 'título próprio',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 9,
            'tagfield' 		=> 7,
            'tagsubfield'	=> 'e',
            'description' 	=> 'complementos de título',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 10,
            'tagfield' 		=> 7,
            'tagsubfield'	=> 'f',
            'description' 	=> 'indicação de responsabilidade',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);        


		DB::table('marcsubfields')->insert([
        	'id'			=> 11,
            'tagfield' 		=> 8,
            'tagsubfield'	=> '',
            'description' 	=> 'edição',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 12,
            'tagfield' 		=> 9,
            'tagsubfield'	=> '',
            'description' 	=> 'numeração',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 13,
            'tagfield' 		=> 10,
            'tagsubfield'	=> 'a',
            'description' 	=> 'local de publicação',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 14,
            'tagfield' 		=> 10,
            'tagsubfield'	=> 'c',
            'description' 	=> 'editor',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

   		DB::table('marcsubfields')->insert([
        	'id'			=> 15,
            'tagfield' 		=> 10,
            'tagsubfield'	=> 'd',
            'description' 	=> 'data',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 16,
            'tagfield' 		=> 11,
            'tagsubfield'	=> 'a',
            'description' 	=> 'extensão do documento',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 17,
            'tagfield' 		=> 11,
            'tagsubfield'	=> 'd',
            'description' 	=> 'dimensões',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

   		DB::table('marcsubfields')->insert([
        	'id'			=> 18,
            'tagfield' 		=> 11,
            'tagsubfield'	=> 'e',
            'description' 	=> 'material acompanhante',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);        


		DB::table('marcsubfields')->insert([
        	'id'			=> 19,
            'tagfield' 		=> 12,
            'tagsubfield'	=> '',
            'description' 	=> 'notas gerais',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 20,
            'tagfield' 		=> 13,
            'tagsubfield'	=> '',
            'description' 	=> 'título na grafia atualizada',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 21,
            'tagfield' 		=> 14,
            'tagsubfield'	=> '',
            'description' 	=> 'título desenvolvido',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 22,
            'tagfield' 		=> 15,
            'tagsubfield'	=> 'a',
            'description' 	=> 'palavra de entrada',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('marcsubfields')->insert([
        	'id'			=> 23,
            'tagfield' 		=> 15,
            'tagsubfield'	=> 'b',
            'description' 	=> 'resto do nome',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('marcsubfields')->insert([
        	'id'			=> 24,
            'tagfield' 		=> 15,
            'tagsubfield'	=> 'f',
            'description' 	=> 'datas',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);        

		DB::table('marcsubfields')->insert([
        	'id'			=> 25,
            'tagfield' 		=> 16,
            'tagsubfield'	=> '',
            'description' 	=> 'coautor',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 26,
            'tagfield' 		=> 17,
            'tagsubfield'	=> '',
            'description' 	=> 'autores secundários',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('marcsubfields')->insert([
        	'id'			=> 27,
            'tagfield' 		=> 18,
            'tagsubfield'	=> '',
            'description' 	=> 'autor coletividade',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        
		DB::table('marcsubfields')->insert([
        	'id'			=> 28,
            'tagfield' 		=> 19,
            'tagsubfield'	=> '',
            'description' 	=> 'autores coletivos secundários',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
		DB::table('marcsubfields')->insert([
        	'id'			=> 29,
            'tagfield' 		=> 20,
            'tagsubfield'	=> '',
            'description' 	=> 'cota',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('marcsubfields')->insert([
        	'id'			=> 30,
        	'tagfield'		=> 21,
            'tagsubfield' 	=> 'a',
            'description' 	=> 'Elemento de entrada',
            'created_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
