<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MarcfieldsUnimarcPTTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('marcfields')->insert([
                  'id'  => 3, 
                  'tagfield' => '005',
                  'description' => 'Identificador da versão',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 6, 
                  'tagfield' => '012',
                  'description' => 'Identificador da empreinte ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 8, 
                  'tagfield' => '014',
                  'description' => 'Identificador do artigo ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 9, 
                  'tagfield' => '015',
                  'description' => 'Número internacional normalizado para relatórios técnicos (ISRN) ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 12, 
                  'tagfield' => '022',
                  'description' => 'Número de publicação oficial ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 18, 
                  'tagfield' => '105',
                  'description' => 'Campo de dados codificados: livros',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 19, 
                  'tagfield' => '106',
                  'description' => 'Campo de dados codificados: material textual',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 20, 
                  'tagfield' => '110',
                  'description' => 'Campo de dados codificados: Publicações em Série',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 21, 
                  'tagfield' => '115',
                  'description' => 'Campo de dados codificados: Projecções Visuais, Filmes e Vídeos',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 22, 
                  'tagfield' => '116',
                  'description' => 'Campo de dados codificados: Material Visual Gráfico',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 23, 
                  'tagfield' => '120',
                  'description' => 'Campo de dados codificados: Material Cartografico - Geral',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 24, 
                  'tagfield' => '121',
                  'description' => 'Campo de dados codificados: Material Cartografico - Atributos Físicos',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 25, 
                  'tagfield' => '122',
                  'description' => 'Campo de dados codificados: Material Cartografico - Data de Posicionamento',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 26, 
                  'tagfield' => '123',
                  'description' => 'Campo de dados codificados: Material Cartografico - Escala e Coordenadas',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 27, 
                  'tagfield' => '124',
                  'description' => 'Campo de dados codificados: Material Cartografico - Análise e Designação',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 28, 
                  'tagfield' => '125',
                  'description' => 'Campo de dados codificados: Registos Sonoros e Música Impressa',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 29, 
                  'tagfield' => '126',
                  'description' => 'Campo de dados codificados: Registos Sonoros - Atributos Físicos',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 30, 
                  'tagfield' => '127',
                  'description' => 'Campo de dados codificados: Duração de Registos Sonoros e Música Impressa',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 31, 
                  'tagfield' => '128',
                  'description' => 'Campo de dados codificados: Interpretações Musicais e Partituras',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 32, 
                  'tagfield' => '130',
                  'description' => 'Campo de dados codificados: Microformas - Atributos Físicos',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 33, 
                  'tagfield' => '131',
                  'description' => 'Campo de dados codificados: Material Cartografico - Geodesia, Redes e Medidas Verticais',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 34, 
                  'tagfield' => '135',
                  'description' => 'Campo de dados codificados: Ficheiros de Computador',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 46, 
                  'tagfield' => '302',
                  'description' => 'Notas relativas a informação codificada ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 50, 
                  'tagfield' => '306',
                  'description' => 'Notas relativas a publicação, distribuição, etc. ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 51, 
                  'tagfield' => '307',
                  'description' => 'Notas relativas a descrição física ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 52, 
                  'tagfield' => '308',
                  'description' => 'Notas relativas à colecção',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 53, 
                  'tagfield' => '310',
                  'description' => 'Notas relativas à encadernação e modalidade de aquisição ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 54, 
                  'tagfield' => '311',
                  'description' => 'Notas relativas a campos de entradas relacionadas ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 55, 
                  'tagfield' => '312',
                  'description' => 'Notas relativas a títulos relacionados ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 56, 
                  'tagfield' => '313',
                  'description' => 'Notas relativas a acesso por assunto ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 57, 
                  'tagfield' => '314',
                  'description' => 'Notas relativas a responsabilidade intelectual ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 58, 
                  'tagfield' => '315',
                  'description' => 'Notas relativas a informação específica sobre alguns tipos de materiais (ou tipo de publicação ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 59, 
                  'tagfield' => '316',
                  'description' => 'Nota relativa ao exemplar catalogado (em mão) ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 60, 
                  'tagfield' => '317',
                  'description' => 'Nota de proveniência ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 61, 
                  'tagfield' => '318',
                  'description' => 'Nota de intervenção ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 62, 
                  'tagfield' => '320',
                  'description' => 'Nota relativa a bibliografia e índices internos ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 63, 
                  'tagfield' => '321',
                  'description' => 'Nota relativa a indíces, resumos de autor e referências externas ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 66, 
                  'tagfield' => '324',
                  'description' => 'Nota de versão original',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 72, 
                  'tagfield' => '332',
                  'description' => 'Citação preferencial dos materiais descritos',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 73, 
                  'tagfield' => '333',
                  'description' => 'Nota relativa aos potenciais utilizadores',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 76, 
                  'tagfield' => '345',
                  'description' => 'Nota informativa sobre aquisição',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 77, 
                  'tagfield' => '410',
                  'description' => 'Colecção',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 78, 
                  'tagfield' => '411',
                  'description' => 'Subcolecção',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 79, 
                  'tagfield' => '421',
                  'description' => 'Suplemento de',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 80, 
                  'tagfield' => '422',
                  'description' => 'Filiação do suplemento',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 81, 
                  'tagfield' => '423',
                  'description' => 'Publicado com',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 82, 
                  'tagfield' => '430',
                  'description' => 'Continua',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 83, 
                  'tagfield' => '431',
                  'description' => 'Continua em parte',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 84, 
                  'tagfield' => '432',
                  'description' => 'Substitui',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 85, 
                  'tagfield' => '433',
                  'description' => 'Substitui em parte',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 86, 
                  'tagfield' => '434',
                  'description' => 'Absorve',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 87, 
                  'tagfield' => '435',
                  'description' => 'Absorve em parte',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 88, 
                  'tagfield' => '436',
                  'description' => 'Fusão de',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 89, 
                  'tagfield' => '437',
                  'description' => 'Separado de',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 90, 
                  'tagfield' => '440',
                  'description' => 'Continuado por',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 91, 
                  'tagfield' => '441',
                  'description' => 'Continuado em parte por',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 92, 
                  'tagfield' => '442',
                  'description' => 'Substituído por',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 93, 
                  'tagfield' => '443',
                  'description' => 'Substituído em parte por',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 94, 
                  'tagfield' => '444',
                  'description' => 'Absorvido por',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 95, 
                  'tagfield' => '445',
                  'description' => 'Absorvido em parte por',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 96, 
                  'tagfield' => '446',
                  'description' => 'Cindido em',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 97, 
                  'tagfield' => '447',
                  'description' => 'Fundido com',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 98, 
                  'tagfield' => '448',
                  'description' => 'Mudou de novo para',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 99, 
                  'tagfield' => '451',
                  'description' => 'Outra edição no mesmo suporte',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 100, 
                  'tagfield' => '452',
                  'description' => 'Edição em suporte diferente',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 101, 
                  'tagfield' => '453',
                  'description' => 'Traduzido como',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 102, 
                  'tagfield' => '454',
                  'description' => 'Tradução de',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 103, 
                  'tagfield' => '455',
                  'description' => 'Reprodução de',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 104, 
                  'tagfield' => '456',
                  'description' => 'Reproduzido como',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 106, 
                  'tagfield' => '462',
                  'description' => 'Nível de subconjunto',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 108, 
                  'tagfield' => '464',
                  'description' => 'Nível de parte analítica',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 109, 
                  'tagfield' => '470',
                  'description' => 'Recensão de',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 110, 
                  'tagfield' => '481',
                  'description' => 'Também encadernado neste volume',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 111, 
                  'tagfield' => '482',
                  'description' => 'Encadernado com',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 112, 
                  'tagfield' => '488',
                  'description' => 'Outras obras relacionadas',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 115, 
                  'tagfield' => '503',
                  'description' => 'Cabeçalho convencional uniforme',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 116, 
                  'tagfield' => '510',
                  'description' => 'Título paralelo',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 118, 
                  'tagfield' => '513',
                  'description' => 'Título de página de rosto complementar',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 119, 
                  'tagfield' => '514',
                  'description' => 'Título de apresentação do texto',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 120, 
                  'tagfield' => '515',
                  'description' => 'Título corrente',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 121, 
                  'tagfield' => '516',
                  'description' => 'Título da lombada',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 123, 
                  'tagfield' => '518',
                  'description' => 'Título na grafia actualizada',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 126, 
                  'tagfield' => '531',
                  'description' => 'Título abreviado (publicações em série) ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 127, 
                  'tagfield' => '532',
                  'description' => 'Título desenvolvido',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 128, 
                  'tagfield' => '540',
                  'description' => 'Título adicionado pelo catalogador',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 129, 
                  'tagfield' => '541',
                  'description' => 'Título traduzido pelo catalogador',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 130, 
                  'tagfield' => '545',
                  'description' => 'Título da secção',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 133, 
                  'tagfield' => '602',
                  'description' => 'Nome de família usado como assunto',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 134, 
                  'tagfield' => '604',
                  'description' => 'Autor/título usado como assunto ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 135, 
                  'tagfield' => '605',
                  'description' => 'Título usado como assunto',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 137, 
                  'tagfield' => '607',
                  'description' => 'Nome geográfico usado como assunto',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 138, 
                  'tagfield' => '608',
                  'description' => 'Forma, género ou característica física',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 140, 
                  'tagfield' => '615',
                  'description' => 'Categoria de assunto',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 141, 
                  'tagfield' => '620',
                  'description' => 'Acesso pelo local',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 142, 
                  'tagfield' => '626',
                  'description' => 'Acesso por pormenores técnicos (ficheiros de computador) (provisório) ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 143, 
                  'tagfield' => '660',
                  'description' => 'Código da área geográfica',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 144, 
                  'tagfield' => '661',
                  'description' => 'Código do período de tempo',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 145, 
                  'tagfield' => '670',
                  'description' => 'PRECIS',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 147, 
                  'tagfield' => '676',
                  'description' => 'Classificação Decimal Dewey (CDD)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 148, 
                  'tagfield' => '680',
                  'description' => 'Classificação da Biblioteca do Congresso',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 156, 
                  'tagfield' => '720',
                  'description' => 'Nome de família (responsabilidade principal)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 157, 
                  'tagfield' => '721',
                  'description' => 'Nome de família (co-responsabilidade principal)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 158, 
                  'tagfield' => '722',
                  'description' => 'Nome de família (responsabilidade secundária)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 160, 
                  'tagfield' => '802',
                  'description' => 'Centro ISDS',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 419, 
                  'tagfield' => '520',
                  'description' => 'Título anterior',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 425, 
                  'tagfield' => '326',
                  'description' => 'Nota de Periodicidade',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 426, 
                  'tagfield' => '303',
                  'description' => 'Nota relativa à informação descritiva',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 431, 
                  'tagfield' => '207',
                  'description' => 'Numeração',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 436, 
                  'tagfield' => '040',
                  'description' => 'Número CODEN',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 438, 
                  'tagfield' => '011',
                  'description' => 'Número ISSN',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 452, 
                  'tagfield' => '463',
                  'description' => 'Nível de parte (artigos)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 567, 
                  'tagfield' => '325',
                  'description' => 'Nota da reprodução',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 592, 
                  'tagfield' => '013',
                  'description' => 'Número internacional ISMN',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 593, 
                  'tagfield' => '016',
                  'description' => 'Número internacional ISRC',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 594, 
                  'tagfield' => '020',
                  'description' => 'Número da bibliografia nacional',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 596, 
                  'tagfield' => '071',
                  'description' => 'Número do Editor',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 602, 
                  'tagfield' => '208',
                  'description' => 'Música impressa',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 606, 
                  'tagfield' => '230',
                  'description' => 'Recursos electrónicos',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 608, 
                  'tagfield' => '301',
                  'description' => 'Nota relativa a números de identificação',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 610, 
                  'tagfield' => '322',
                  'description' => 'Nota relativa a responsáveis artisticos e técnicos',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 611, 
                  'tagfield' => '323',
                  'description' => 'Nota relativa ao elenco',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 614, 
                  'tagfield' => '336',
                  'description' => 'Nota relativa ao tipo de ficheiro',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 615, 
                  'tagfield' => '337',
                  'description' => 'Nota relativa a pormenores técnicos',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 637, 
                  'tagfield' => '000',
                  'description' => 'Etiqueta do registo',
                  'repeatable' => 0,
                  'mandatory' => 1,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 638, 
                  'tagfield' => '010',
                  'description' => 'Número ISBN',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 639, 
                  'tagfield' => '021',
                  'description' => 'Número do Depósito Legal',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 640, 
                  'tagfield' => '100',
                  'description' => 'Dados gerais de processamento',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 641, 
                  'tagfield' => '101',
                  'description' => 'Língua de publicação',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 642, 
                  'tagfield' => '102',
                  'description' => 'País de publicação',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 643, 
                  'tagfield' => '200',
                  'description' => 'Titulo e menção de responsabilidade',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 644, 
                  'tagfield' => '205',
                  'description' => 'Menção da edição',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 645, 
                  'tagfield' => '206',
                  'description' => 'Dados cartográficos',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 646, 
                  'tagfield' => '210',
                  'description' => 'Publicação',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 647, 
                  'tagfield' => '215',
                  'description' => 'Descrição física ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 648, 
                  'tagfield' => '225',
                  'description' => 'Colecção ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 649, 
                  'tagfield' => '300',
                  'description' => 'Notas gerais ',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 651, 
                  'tagfield' => '305',
                  'description' => 'Nota relativa à edição da publicação',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 652, 
                  'tagfield' => '327',
                  'description' => 'Nota de conteúdo',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 653, 
                  'tagfield' => '328',
                  'description' => 'Nota de dissertação ou tese',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 654, 
                  'tagfield' => '330',
                  'description' => 'Sumário ou Resumo',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 655, 
                  'tagfield' => '461',
                  'description' => 'Nível de conjunto (monografias)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 656, 
                  'tagfield' => '500',
                  'description' => 'Título uniforme',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 657, 
                  'tagfield' => '501',
                  'description' => 'Título colectivo uniforme',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 658, 
                  'tagfield' => '512',
                  'description' => 'Título da capa',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 659, 
                  'tagfield' => '517',
                  'description' => 'Outras variantes do título',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 660, 
                  'tagfield' => '530',
                  'description' => 'Título chave',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 661, 
                  'tagfield' => '600',
                  'description' => 'Nome de pessoa usado como assunto',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 662, 
                  'tagfield' => '601',
                  'description' => 'Nome de colectividade usado como assunto',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 663, 
                  'tagfield' => '606',
                  'description' => 'Nome comum usado como assunto',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 664, 
                  'tagfield' => '610',
                  'description' => 'Termos não controlados',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 665, 
                  'tagfield' => '675',
                  'description' => 'CDU',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 666, 
                  'tagfield' => '686',
                  'description' => 'Outra Classificação',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 667, 
                  'tagfield' => '700',
                  'description' => 'Autor principal',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 668, 
                  'tagfield' => '701',
                  'description' => 'Autor co-responsavel',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 669, 
                  'tagfield' => '702',
                  'description' => 'Autor secundário',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 670, 
                  'tagfield' => '710',
                  'description' => 'Autor entidade principal',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 671, 
                  'tagfield' => '711',
                  'description' => 'Autor entidade co-responsavel',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 672, 
                  'tagfield' => '712',
                  'description' => 'Autor entidade secundário',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 673, 
                  'tagfield' => '740',
                  'description' => 'Cabeçalho convencional uniforme para textos de carácter legal e religioso',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 674, 
                  'tagfield' => '801',
                  'description' => 'Fonte de origem',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 675, 
                  'tagfield' => '830',
                  'description' => 'Notas gerais do catalogador',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 676, 
                  'tagfield' => '856',
                  'description' => 'Localização e acesso electrónico ',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 678, 
                  'tagfield' => '994',
                  'description' => 'Estado da catalogação',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 679, 
                  'tagfield' => '995',
                  'description' => 'Localização e informação dos exemplares',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 681, 
                  'tagfield' => '304',
                  'description' => 'Notas relativas a título e menção de responsabilidade',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 686, 
                  'tagfield' => '001',
                  'description' => 'Identificador de registo',
                  'repeatable' => 0,
                  'mandatory' => 1,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


    }
}
