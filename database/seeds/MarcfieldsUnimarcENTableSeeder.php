
<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MarcfieldsUnimarcENTableSeeder extends Seeder
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
                  'description' => 'Version Identifier',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 6, 
                  'tagfield' => '012',
                  'description' => 'Fingerprint Identifier',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 8, 
                  'tagfield' => '014',
                  'description' => 'Article Identifier',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 9, 
                  'tagfield' => '015',
                  'description' => 'International Standard Technical Report Number (ISRN)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 12, 
                  'tagfield' => '022',
                  'description' => 'Government Publication Number',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 18, 
                  'tagfield' => '105',
                  'description' => 'Coded Data Field: Textual Material, Monographic',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 19, 
                  'tagfield' => '106',
                  'description' => 'Coded Data Field: Textual Material - Physical Attributes',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 20, 
                  'tagfield' => '110',
                  'description' => 'Coded Data Field: Continuing Resources',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 21, 
                  'tagfield' => '115',
                  'description' => 'Coded Data Fields: Visual Projections, Videorecordings and Motion Pictures',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 22, 
                  'tagfield' => '116',
                  'description' => 'Coded Data Field: Graphics',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 23, 
                  'tagfield' => '120',
                  'description' => 'Coded Data Field: Cartographic Materials - General',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 24, 
                  'tagfield' => '121',
                  'description' => 'Coded Data Field: Cartographic Materials: Physical Attributes',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 25, 
                  'tagfield' => '122',
                  'description' => 'Coded Data Field: Time Period of Item Content',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 26, 
                  'tagfield' => '123',
                  'description' => 'Coded Data Field: Cartographic Resources - Scale and Co-Ordinates',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 27, 
                  'tagfield' => '124',
                  'description' => 'Coded Data Field: Cartographic Materials - Specific Material Designation Analysis',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 28, 
                  'tagfield' => '125',
                  'description' => 'Coded Data Field: Sound Recordings and Music',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 29, 
                  'tagfield' => '126',
                  'description' => 'Coded Data Field: Sound Recordings - Physical Attributes',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 30, 
                  'tagfield' => '127',
                  'description' => 'Coded Data Field: Duration of Sound Recordings and Printed Music',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 31, 
                  'tagfield' => '128',
                  'description' => 'Coded Data Field: Form of Musical Work and Key or Mode',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 32, 
                  'tagfield' => '130',
                  'description' => 'Coded Data Field: Microforms - Physical Attributes',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 33, 
                  'tagfield' => '131',
                  'description' => 'Coded Data Field: Cartographic Materials: Geodetic, Grid and Vertical Measurement',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 34, 
                  'tagfield' => '135',
                  'description' => 'Coded Data Field: Electronic Resources',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 46, 
                  'tagfield' => '302',
                  'description' => 'Notes Pertaining to Coded Information',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 50, 
                  'tagfield' => '306',
                  'description' => 'Notes Pertaining to Publication, Distribution, etc.',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 51, 
                  'tagfield' => '307',
                  'description' => 'Notes Pertaining to Physical Description',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 52, 
                  'tagfield' => '308',
                  'description' => 'Notes Pertaining to Series',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 53, 
                  'tagfield' => '310',
                  'description' => 'Notes Pertaining to Binding and Availability',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 54, 
                  'tagfield' => '311',
                  'description' => 'Notes Pertaining to Linking Fields',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 55, 
                  'tagfield' => '312',
                  'description' => 'Notes Pertaining to Related Titles',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 56, 
                  'tagfield' => '313',
                  'description' => 'Notes Pertaining to Subject Access',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 57, 
                  'tagfield' => '314',
                  'description' => 'Notes Pertaining to Responsibility',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 58, 
                  'tagfield' => '315',
                  'description' => 'Notes Pertaining to Material (Or Type of Publication) Specific Information',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 59, 
                  'tagfield' => '316',
                  'description' => 'Note Relating to the Copy in Hand',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 60, 
                  'tagfield' => '317',
                  'description' => 'Provenance Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 61, 
                  'tagfield' => '318',
                  'description' => 'Action Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 62, 
                  'tagfield' => '320',
                  'description' => 'Internal Bibliographies/Indexes Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 63, 
                  'tagfield' => '321',
                  'description' => 'External Indexes/Abstracts/References Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 66, 
                  'tagfield' => '324',
                  'description' => 'Original Version Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 72, 
                  'tagfield' => '332',
                  'description' => 'Preferred Citation of Described Materials',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 73, 
                  'tagfield' => '333',
                  'description' => 'Users/Intended Audience Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 76, 
                  'tagfield' => '345',
                  'description' => 'Acquisition Information Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 77, 
                  'tagfield' => '410',
                  'description' => 'Series',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 78, 
                  'tagfield' => '411',
                  'description' => 'Subseries',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 79, 
                  'tagfield' => '421',
                  'description' => 'Supplement',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 80, 
                  'tagfield' => '422',
                  'description' => 'Parent of Supplement',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 81, 
                  'tagfield' => '423',
                  'description' => 'Issued with',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 82, 
                  'tagfield' => '430',
                  'description' => 'Continues',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 83, 
                  'tagfield' => '431',
                  'description' => 'Continues in Part',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 84, 
                  'tagfield' => '432',
                  'description' => 'Supersedes',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 85, 
                  'tagfield' => '433',
                  'description' => 'Supersedes in Part',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 86, 
                  'tagfield' => '434',
                  'description' => 'Absorbed',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 87, 
                  'tagfield' => '435',
                  'description' => 'Absorbed in Part',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 88, 
                  'tagfield' => '436',
                  'description' => 'Formed by Merger of',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 89, 
                  'tagfield' => '437',
                  'description' => 'Separated from',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 90, 
                  'tagfield' => '440',
                  'description' => 'Continued by',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 91, 
                  'tagfield' => '441',
                  'description' => 'Continued in Part by',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 92, 
                  'tagfield' => '442',
                  'description' => 'Superseded by',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 93, 
                  'tagfield' => '443',
                  'description' => 'Superseded in Part by',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 94, 
                  'tagfield' => '444',
                  'description' => 'Absorbed by',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 95, 
                  'tagfield' => '445',
                  'description' => 'Absorbed in Part by',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 96, 
                  'tagfield' => '446',
                  'description' => 'Split into',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 97, 
                  'tagfield' => '447',
                  'description' => 'Merged with XXX to Form',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 98, 
                  'tagfield' => '448',
                  'description' => 'Changed Back to',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 99, 
                  'tagfield' => '451',
                  'description' => 'Other Edition in the Same Medium',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 100, 
                  'tagfield' => '452',
                  'description' => 'Other Edition in Another Medium',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 101, 
                  'tagfield' => '453',
                  'description' => 'Translated as',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 102, 
                  'tagfield' => '454',
                  'description' => 'Translation of',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 103, 
                  'tagfield' => '455',
                  'description' => 'Other Edition, State or Impression in the Same Medium',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 104, 
                  'tagfield' => '456',
                  'description' => 'Reproduced as',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 106, 
                  'tagfield' => '462',
                  'description' => 'Subset Level',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 108, 
                  'tagfield' => '464',
                  'description' => 'Piece-Analytic Level',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 109, 
                  'tagfield' => '470',
                  'description' => 'Item Reviewed',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 110, 
                  'tagfield' => '481',
                  'description' => 'Also Bound with This Volume',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 111, 
                  'tagfield' => '482',
                  'description' => 'Bound with',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 112, 
                  'tagfield' => '488',
                  'description' => 'Other Related Works',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 115, 
                  'tagfield' => '503',
                  'description' => 'Preferred Conventional Heading',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 116, 
                  'tagfield' => '510',
                  'description' => 'Parallel Title Proper',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 118, 
                  'tagfield' => '513',
                  'description' => 'Added Title-Page Title',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 119, 
                  'tagfield' => '514',
                  'description' => 'Caption Title',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 120, 
                  'tagfield' => '515',
                  'description' => 'Running Title',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 121, 
                  'tagfield' => '516',
                  'description' => 'Spine Title',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 123, 
                  'tagfield' => '518',
                  'description' => 'Title in Standard Modern Spelling',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 126, 
                  'tagfield' => '531',
                  'description' => 'Abbreviated Title (Continuing Resources)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 127, 
                  'tagfield' => '532',
                  'description' => 'Expanded Title',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 128, 
                  'tagfield' => '540',
                  'description' => 'Additional Title Supplied by Cataloguer',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 129, 
                  'tagfield' => '541',
                  'description' => 'Translated Title Supplied by Cataloguer',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 130, 
                  'tagfield' => '545',
                  'description' => 'Section Title',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 133, 
                  'tagfield' => '602',
                  'description' => 'Family Name Used as Subject',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 134, 
                  'tagfield' => '604',
                  'description' => 'Name and Title Used as Subject',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 135, 
                  'tagfield' => '605',
                  'description' => 'Title Used as Subject',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 137, 
                  'tagfield' => '607',
                  'description' => 'Geographical Name Used as Subject',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 138, 
                  'tagfield' => '608',
                  'description' => 'Form, Genre or Physical Characteristics Heading',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 140, 
                  'tagfield' => '615',
                  'description' => 'Subject Category (Provisional)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 141, 
                  'tagfield' => '620',
                  'description' => 'Place and Date of Publication, Performance, etc.',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 142, 
                  'tagfield' => '626',
                  'description' => 'Technical Details Access (Electronic Resources) [Obsolete]',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 143, 
                  'tagfield' => '660',
                  'description' => 'Geographic Area Code',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 144, 
                  'tagfield' => '661',
                  'description' => 'Time Period Code',
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
                  'description' => 'Dewey Decimal Classification',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 148, 
                  'tagfield' => '680',
                  'description' => 'Library of Congress Classification',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 156, 
                  'tagfield' => '720',
                  'description' => 'Family Name - Primary Responsibility',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 157, 
                  'tagfield' => '721',
                  'description' => 'Family Name - Alternative Responsibility',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 158, 
                  'tagfield' => '722',
                  'description' => 'Family Name - Secondary Responsibility',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 160, 
                  'tagfield' => '802',
                  'description' => 'National ISSN Centre',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 419, 
                  'tagfield' => '520',
                  'description' => 'Former Title (Continuing Resources)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 425, 
                  'tagfield' => '326',
                  'description' => 'Frequency Statement Note (Continuing Resources)',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 426, 
                  'tagfield' => '303',
                  'description' => 'General Notes Pertaining to Descriptive Information',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 431, 
                  'tagfield' => '207',
                  'description' => 'Material Specific Area: Numbering of Continuing Resources',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 436, 
                  'tagfield' => '040',
                  'description' => 'CODEN (Serials)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 438, 
                  'tagfield' => '011',
                  'description' => 'International Standard Serial Number (ISSN)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 452, 
                  'tagfield' => '463',
                  'description' => 'Piece Level',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 567, 
                  'tagfield' => '325',
                  'description' => 'Reproduction Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 592, 
                  'tagfield' => '013',
                  'description' => 'International Standard Music Number (ISMN)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 593, 
                  'tagfield' => '016',
                  'description' => 'International Standard Recording Code (ISRC)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 594, 
                  'tagfield' => '020',
                  'description' => 'National Bibliography Number',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 596, 
                  'tagfield' => '071',
                  'description' => 'Publisher\'s Number',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 602, 
                  'tagfield' => '208',
                  'description' => 'Material Specific Area: Printed Music Specific Statement',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 606, 
                  'tagfield' => '230',
                  'description' => 'Material Specific Area: Electronic Resource Characteristics',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 608, 
                  'tagfield' => '301',
                  'description' => 'Notes Pertaining to Identification Numbers',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 610, 
                  'tagfield' => '322',
                  'description' => 'Credits Note (Projected and Video Material and Sound Recordings)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 611, 
                  'tagfield' => '323',
                  'description' => 'Cast Note (Projected and Video Material and Sound Recordings)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 614, 
                  'tagfield' => '336',
                  'description' => 'Type of Electronic Resource Note',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 615, 
                  'tagfield' => '337',
                  'description' => 'System Requirements Note (Electronic Resources)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 637, 
                  'tagfield' => '000',
                  'description' => 'Record Label',
                  'repeatable' => 0,
                  'mandatory' => 1,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 638, 
                  'tagfield' => '010',
                  'description' => 'International Standard Book Number (ISBN)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 639, 
                  'tagfield' => '021',
                  'description' => 'Legal Deposit Number',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 640, 
                  'tagfield' => '100',
                  'description' => 'General Processing Data',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 641, 
                  'tagfield' => '101',
                  'description' => 'Language of the Resource',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 642, 
                  'tagfield' => '102',
                  'description' => 'Country of Publication or Production',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 643, 
                  'tagfield' => '200',
                  'description' => 'Title and Statement of Responsibility',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 644, 
                  'tagfield' => '205',
                  'description' => 'Edition Statement',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 645, 
                  'tagfield' => '206',
                  'description' => 'Material Specific Area: Cartographic Resources - Mathematical Data',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 646, 
                  'tagfield' => '210',
                  'description' => 'Publication, Distribution, etc.',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 647, 
                  'tagfield' => '215',
                  'description' => 'Physical Description',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 648, 
                  'tagfield' => '225',
                  'description' => 'Series',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 649, 
                  'tagfield' => '300',
                  'description' => 'General Notes',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 651, 
                  'tagfield' => '305',
                  'description' => 'Notes Pertaining to Edition and Bibliographic History',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 652, 
                  'tagfield' => '327',
                  'description' => 'Contents Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 653, 
                  'tagfield' => '328',
                  'description' => 'Dissertation (Thesis) Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 654, 
                  'tagfield' => '330',
                  'description' => 'Summary or Abstract',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 655, 
                  'tagfield' => '461',
                  'description' => 'Set Level',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 656, 
                  'tagfield' => '500',
                  'description' => 'Preferred Access Point',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 657, 
                  'tagfield' => '501',
                  'description' => 'Collective Preferred Title',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 658, 
                  'tagfield' => '512',
                  'description' => 'Cover Title',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 659, 
                  'tagfield' => '517',
                  'description' => 'Other Variant Titles',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 660, 
                  'tagfield' => '530',
                  'description' => 'Key Title (Continuing Resources)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 661, 
                  'tagfield' => '600',
                  'description' => 'Personal Name Used as Subject',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 662, 
                  'tagfield' => '601',
                  'description' => 'Corporate Body Name Used as Subject',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 663, 
                  'tagfield' => '606',
                  'description' => 'Topical Name Used as Subject',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 664, 
                  'tagfield' => '610',
                  'description' => 'Uncontrolled Subject Terms',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 665, 
                  'tagfield' => '675',
                  'description' => 'Universal Decimal Classification (UDC)',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 666, 
                  'tagfield' => '686',
                  'description' => 'Other Class Numbers',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 667, 
                  'tagfield' => '700',
                  'description' => 'Personal Name - Primary Responsibility',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 668, 
                  'tagfield' => '701',
                  'description' => 'Personal Name - Alternative Responsibility',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 669, 
                  'tagfield' => '702',
                  'description' => 'Personal Name - Secondary Responsibility',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 670, 
                  'tagfield' => '710',
                  'description' => 'Corporate Body Name - Primary Responsibility',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 671, 
                  'tagfield' => '711',
                  'description' => 'Corporate Body Name - Alternative Responsibility',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 672, 
                  'tagfield' => '712',
                  'description' => 'Corporate Body Name - Secondary Responsibility',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 673, 
                  'tagfield' => '740',
                  'description' => 'Uniform Conventional Heading for Legal and Religious Texts - Primary Responsibility',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 674, 
                  'tagfield' => '801',
                  'description' => 'Originating Source',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 675, 
                  'tagfield' => '830',
                  'description' => 'General Cataloguer\'s Note',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 676, 
                  'tagfield' => '856',
                  'description' => 'Electronic Location and Access',
                  'repeatable' => 1,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 677, 
                  'tagfield' => '990',
                  'description' => '',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 678, 
                  'tagfield' => '994',
                  'description' => '',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 681, 
                  'tagfield' => '304',
                  'description' => 'Notes Pertaining to Title and Statement of Responsibility',
                  'repeatable' => 0,
                  'mandatory' => 0,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('marcfields')->insert([
                  'id'  => 686, 
                  'tagfield' => '001',
                  'description' => 'Record Identifier',
                  'repeatable' => 0,
                  'mandatory' => 1,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


    }
}
