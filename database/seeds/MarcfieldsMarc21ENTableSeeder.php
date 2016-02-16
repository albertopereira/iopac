<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MarcfieldsMarc21ENTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('marcfields')->insert([
              'id'  => 4, 
              'tagfield' => '000',
              'description' => 'LEADER',
              'repeatable' => 0,
              'mandatory' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 5, 
              'tagfield' => '001',
              'description' => 'CONTROL NUMBER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 6, 
              'tagfield' => '003',
              'description' => 'CONTROL NUMBER IDENTIFIER',
              'repeatable' => 0,
              'mandatory' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 7, 
              'tagfield' => '005',
              'description' => 'DATE AND TIME OF LATEST TRANSACTION',
              'repeatable' => 0,
              'mandatory' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 8, 
              'tagfield' => '006',
              'description' => 'FIXED-LENGTH DATA ELEMENTS--ADDITIONAL MATERIAL CHARACTERISTICS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 9, 
              'tagfield' => '007',
              'description' => 'PHYSICAL DESCRIPTION FIXED FIELD--GENERAL INFORMATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 10, 
              'tagfield' => '008',
              'description' => 'FIXED-LENGTH DATA ELEMENTS--GENERAL INFORMATION',
              'repeatable' => 0,
              'mandatory' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 11, 
              'tagfield' => '009',
              'description' => 'PHYSICAL DESCRIPTION FIXED-FIELD FOR ARCHIVAL COLLECTION (VM) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 12, 
              'tagfield' => '010',
              'description' => 'LIBRARY OF CONGRESS CONTROL NUMBER',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 13, 
              'tagfield' => '011',
              'description' => 'LINKING LIBRARY OF CONGRESS CONTROL NUMBER [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 14, 
              'tagfield' => '013',
              'description' => 'PATENT CONTROL INFORMATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 15, 
              'tagfield' => '015',
              'description' => 'NATIONAL BIBLIOGRAPHY NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 16, 
              'tagfield' => '016',
              'description' => 'NATIONAL BIBLIOGRAPHIC AGENCY CONTROL NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 17, 
              'tagfield' => '017',
              'description' => 'COPYRIGHT OR LEGAL DEPOSIT NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 18, 
              'tagfield' => '018',
              'description' => 'COPYRIGHT ARTICLE-FEE CODE',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 19, 
              'tagfield' => '01e',
              'description' => 'CODED FIELD ERROR (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 20, 
              'tagfield' => '020',
              'description' => 'INTERNATIONAL STANDARD BOOK NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 21, 
              'tagfield' => '022',
              'description' => 'INTERNATIONAL STANDARD SERIAL NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 22, 
              'tagfield' => '023',
              'description' => 'STANDARD FILM NUMBER (VM) [DELETED]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 23, 
              'tagfield' => '024',
              'description' => 'OTHER STANDARD IDENTIFIER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 24, 
              'tagfield' => '025',
              'description' => 'OVERSEAS ACQUISITION NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 25, 
              'tagfield' => '026',
              'description' => 'FINGERPRINT IDENTIFIER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 26, 
              'tagfield' => '027',
              'description' => 'STANDARD TECHNICAL REPORT NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 27, 
              'tagfield' => '028',
              'description' => 'PUBLISHER NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 28, 
              'tagfield' => '029',
              'description' => 'OTHER SYSTEM CONTROL NUMBER (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 29, 
              'tagfield' => '030',
              'description' => 'CODEN DESIGNATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 30, 
              'tagfield' => '031',
              'description' => 'MUSICAL INCIPITS INFORMATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 31, 
              'tagfield' => '032',
              'description' => 'POSTAL REGISTRATION NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 32, 
              'tagfield' => '033',
              'description' => 'DATE/TIME AND PLACE OF AN EVENT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 33, 
              'tagfield' => '034',
              'description' => 'CODED CARTOGRAPHIC MATHEMATICAL DATA',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 34, 
              'tagfield' => '035',
              'description' => 'SYSTEM CONTROL NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 35, 
              'tagfield' => '036',
              'description' => 'ORIGINAL STUDY NUMBER FOR COMPUTER DATA FILES',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 36, 
              'tagfield' => '037',
              'description' => 'SOURCE OF ACQUISITION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 37, 
              'tagfield' => '038',
              'description' => 'RECORD CONTENT LICENSOR',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 38, 
              'tagfield' => '039',
              'description' => 'LEVEL OF BIBLIOGRAPHIC CONTROL AND CODING DETAIL [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 39, 
              'tagfield' => '040',
              'description' => 'CATALOGING SOURCE',
              'repeatable' => 0,
              'mandatory' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 40, 
              'tagfield' => '041',
              'description' => 'LANGUAGE CODE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 41, 
              'tagfield' => '042',
              'description' => 'AUTHENTICATION CODE',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 42, 
              'tagfield' => '043',
              'description' => 'GEOGRAPHIC AREA CODE',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 43, 
              'tagfield' => '044',
              'description' => 'COUNTRY OF PUBLISHING/PRODUCING ENTITY CODE',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 44, 
              'tagfield' => '045',
              'description' => 'TIME PERIOD OF CONTENT',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 45, 
              'tagfield' => '046',
              'description' => 'SPECIAL CODED DATES',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 46, 
              'tagfield' => '047',
              'description' => 'FORM OF MUSICAL COMPOSITION CODE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 47, 
              'tagfield' => '048',
              'description' => 'NUMBER OF MUSICAL INSTRUMENTS OR VOICES CODE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 48, 
              'tagfield' => '049',
              'description' => 'LOCAL HOLDINGS (OCLC)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 49, 
              'tagfield' => '050',
              'description' => 'LIBRARY OF CONGRESS CALL NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 50, 
              'tagfield' => '051',
              'description' => 'LIBRARY OF CONGRESS COPY, ISSUE, OFFPRINT STATEMENT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 51, 
              'tagfield' => '052',
              'description' => 'GEOGRAPHIC CLASSIFICATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 52, 
              'tagfield' => '055',
              'description' => 'CLASSIFICATION NUMBERS ASSIGNED IN CANADA',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 53, 
              'tagfield' => '060',
              'description' => 'NATIONAL LIBRARY OF MEDICINE CALL NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 54, 
              'tagfield' => '061',
              'description' => 'NATIONAL LIBRARY OF MEDICINE COPY STATEMENT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 55, 
              'tagfield' => '066',
              'description' => 'CHARACTER SETS PRESENT',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 56, 
              'tagfield' => '070',
              'description' => 'NATIONAL AGRICULTURAL LIBRARY CALL NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 57, 
              'tagfield' => '071',
              'description' => 'NATIONAL AGRICULTURAL LIBRARY COPY STATEMENT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 58, 
              'tagfield' => '072',
              'description' => 'SUBJECT CATEGORY CODE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 59, 
              'tagfield' => '074',
              'description' => 'GPO ITEM NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 60, 
              'tagfield' => '080',
              'description' => 'UNIVERSAL DECIMAL CLASSIFICATION NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 61, 
              'tagfield' => '082',
              'description' => 'DEWEY DECIMAL CLASSIFICATION NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 62, 
              'tagfield' => '083',
              'description' => 'ADDITIONAL DEWEY DECIMAL CLASSIFICATION NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 63, 
              'tagfield' => '084',
              'description' => 'OTHER CLASSIFICATION NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 64, 
              'tagfield' => '085',
              'description' => 'SYNTHESIZED CLASSIFICATION NUMBER COMPONENTS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 65, 
              'tagfield' => '086',
              'description' => 'GOVERNMENT DOCUMENT CLASSIFICATION NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 66, 
              'tagfield' => '087',
              'description' => 'REPORT NUMBER [OBSOLETE, CAN/MARC]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 67, 
              'tagfield' => '088',
              'description' => 'REPORT NUMBER',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 68, 
              'tagfield' => '090',
              'description' => 'LOCALLY ASSIGNED LC-TYPE CALL NUMBER (OCLC); LOCAL CALL NUMBER (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 69, 
              'tagfield' => '091',
              'description' => 'MICROFILM SHELF LOCATION (AM) [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 70, 
              'tagfield' => '092',
              'description' => 'LOCALLY ASSIGNED DEWEY CALL NUMBER (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 71, 
              'tagfield' => '096',
              'description' => 'LOCALLY ASSIGNED NLM-TYPE CALL NUMBER (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 72, 
              'tagfield' => '098',
              'description' => 'OTHER CLASSIFICATION SCHEMES (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 73, 
              'tagfield' => '099',
              'description' => 'LOCAL FREE-TEXT CALL NUMBER (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 74, 
              'tagfield' => '100',
              'description' => 'MAIN ENTRY--PERSONAL NAME',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 75, 
              'tagfield' => '110',
              'description' => 'MAIN ENTRY--CORPORATE NAME',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 76, 
              'tagfield' => '111',
              'description' => 'MAIN ENTRY--MEETING NAME',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 77, 
              'tagfield' => '130',
              'description' => 'MAIN ENTRY--UNIFORM TITLE',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 78, 
              'tagfield' => '210',
              'description' => 'ABBREVIATED TITLE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 79, 
              'tagfield' => '211',
              'description' => 'ACRONYM OR SHORTENED TITLE [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 80, 
              'tagfield' => '212',
              'description' => 'VARIANT ACCESS TITLE [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 81, 
              'tagfield' => '214',
              'description' => 'AUGMENTED TITLE [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 82, 
              'tagfield' => '222',
              'description' => 'KEY TITLE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 83, 
              'tagfield' => '240',
              'description' => 'UNIFORM TITLE',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 84, 
              'tagfield' => '241',
              'description' => 'ROMANIZED TITLE (BK AM CF MP MU VM) [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 85, 
              'tagfield' => '242',
              'description' => 'TRANSLATION OF TITLE BY CATALOGING AGENCY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 86, 
              'tagfield' => '243',
              'description' => 'COLLECTIVE UNIFORM TITLE',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 87, 
              'tagfield' => '245',
              'description' => 'TITLE STATEMENT',
              'repeatable' => 0,
              'mandatory' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 88, 
              'tagfield' => '246',
              'description' => 'VARYING FORM OF TITLE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 89, 
              'tagfield' => '247',
              'description' => 'FORMER TITLE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 90, 
              'tagfield' => '250',
              'description' => 'EDITION STATEMENT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 91, 
              'tagfield' => '254',
              'description' => 'MUSICAL PRESENTATION STATEMENT',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 92, 
              'tagfield' => '255',
              'description' => 'CARTOGRAPHIC MATHEMATICAL DATA',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 93, 
              'tagfield' => '256',
              'description' => 'COMPUTER FILE CHARACTERISTICS',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 94, 
              'tagfield' => '257',
              'description' => 'COUNTRY OF PRODUCING ENTITY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 95, 
              'tagfield' => '258',
              'description' => 'PHILATELIC ISSUE DATA',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 96, 
              'tagfield' => '260',
              'description' => 'PUBLICATION, DISTRIBUTION, ETC.',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 97, 
              'tagfield' => '261',
              'description' => 'IMPRINT STATEMENT FOR FILMS (Pre-AACR 1 Revised) [OBSOLETE, CAN/MARC], [LOCAL, USA]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 98, 
              'tagfield' => '262',
              'description' => 'IMPRINT STATEMENT FOR SOUND RECORDINGS (Pre-AACR 2) [LOCAL, USA]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 99, 
              'tagfield' => '263',
              'description' => 'PROJECTED PUBLICATION DATE',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 100, 
              'tagfield' => '264',
              'description' => 'PRODUCTION, PUBLICATION, DISTRIBUTION, MANUFACTURE, AND COPYRIGHT NOTICE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 101, 
              'tagfield' => '265',
              'description' => 'SOURCE FOR ACQUISITION/SUBSCRIPTION ADDRESS [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 102, 
              'tagfield' => '270',
              'description' => 'ADDRESS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 103, 
              'tagfield' => '300',
              'description' => 'PHYSICAL DESCRIPTION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 104, 
              'tagfield' => '301',
              'description' => 'PHYSICAL DESCRIPTION FOR FILMS (PRE-AACR 2) (VM) [OBSOLETE, USMARC]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 105, 
              'tagfield' => '302',
              'description' => 'PAGE OR ITEM COUNT (BK AM) [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 106, 
              'tagfield' => '303',
              'description' => 'UNIT COUNT (AM) [OBSOLETE, USMARC]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 107, 
              'tagfield' => '304',
              'description' => 'LINEAR FOOTAGE (AM) [OBSOLETE, USMARC]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 108, 
              'tagfield' => '305',
              'description' => 'PHYSICAL DESCRIPTION FOR SOUND RECORDINGS (Pre-AACR 2) (MU) [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 109, 
              'tagfield' => '306',
              'description' => 'PLAYING TIME',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 110, 
              'tagfield' => '307',
              'description' => 'HOURS, ETC.',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 111, 
              'tagfield' => '308',
              'description' => 'PHYSICAL DESCRIPTION FOR FILMS (ARCHIVAL) (VM) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 112, 
              'tagfield' => '310',
              'description' => 'CURRENT PUBLICATION FREQUENCY',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 113, 
              'tagfield' => '315',
              'description' => 'FREQUENCY (CF MP) [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 114, 
              'tagfield' => '321',
              'description' => 'FORMER PUBLICATION FREQUENCY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 115, 
              'tagfield' => '336',
              'description' => 'CONTENT TYPE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 116, 
              'tagfield' => '337',
              'description' => 'MEDIA TYPE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 117, 
              'tagfield' => '338',
              'description' => 'CARRIER TYPE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 118, 
              'tagfield' => '340',
              'description' => 'PHYSICAL MEDIUM',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 119, 
              'tagfield' => '342',
              'description' => 'GEOSPATIAL REFERENCE DATA',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 120, 
              'tagfield' => '343',
              'description' => 'PLANAR COORDINATE DATA',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 121, 
              'tagfield' => '344',
              'description' => 'SOUND CHARACTERISTICS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 122, 
              'tagfield' => '345',
              'description' => 'PROJECTION CHARACTERISTICS OF MOVING IMAGE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 123, 
              'tagfield' => '346',
              'description' => 'VIDEO CHARACTERISTICS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 124, 
              'tagfield' => '347',
              'description' => 'DIGITAL FILE CHARACTERISTICS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 125, 
              'tagfield' => '348',
              'description' => 'FORMAT OF NOTATED MUSIC',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 126, 
              'tagfield' => '350',
              'description' => 'PRICE (NR) (BK AM CF MU VM SE) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 127, 
              'tagfield' => '351',
              'description' => 'ORGANIZATION AND ARRANGEMENT OF MATERIALS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 128, 
              'tagfield' => '352',
              'description' => 'DIGITAL GRAPHIC REPRESENTATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 129, 
              'tagfield' => '355',
              'description' => 'SECURITY CLASSIFICATION CONTROL',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 130, 
              'tagfield' => '357',
              'description' => 'ORIGINATOR DISSEMINATION CONTROL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 131, 
              'tagfield' => '359',
              'description' => 'RENTAL PRICE (VM) [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 132, 
              'tagfield' => '362',
              'description' => 'DATES OF PUBLICATION AND/OR SEQUENTIAL DESIGNATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 133, 
              'tagfield' => '363',
              'description' => 'NORMALIZED DATE AND SEQUENTIAL DESIGNATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 134, 
              'tagfield' => '365',
              'description' => 'TRADE PRICE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 135, 
              'tagfield' => '366',
              'description' => 'TRADE AVAILABILITY INFORMATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 136, 
              'tagfield' => '370',
              'description' => 'ASSOCIATED PLACE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 137, 
              'tagfield' => '377',
              'description' => 'ASSOCIATED LANGUAGE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 138, 
              'tagfield' => '380',
              'description' => 'FORM OF WORK',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 139, 
              'tagfield' => '381',
              'description' => 'OTHER DISTINGUISHING CHARACTERISTICS OF WORK OR EXPRESSION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 140, 
              'tagfield' => '382',
              'description' => 'MEDIUM OF PERFORMANCE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 141, 
              'tagfield' => '383',
              'description' => 'NUMERIC DESIGNATION OF MUSICAL WORK',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 142, 
              'tagfield' => '384',
              'description' => 'KEY',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 143, 
              'tagfield' => '385',
              'description' => 'AUDIENCE CHARACTERISTICS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 144, 
              'tagfield' => '386',
              'description' => 'CREATOR/CONTRIBUTOR CHARACTERISTICS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 145, 
              'tagfield' => '388',
              'description' => 'TIME PERIOD OF CREATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 146, 
              'tagfield' => '400',
              'description' => 'SERIES STATEMENT/ADDED ENTRY--PERSONAL NAME [OBSOLETE, CAN/MARC], [LOCAL, USA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 147, 
              'tagfield' => '410',
              'description' => 'SERIES STATEMENT/ADDED ENTRY--CORPORATE NAME [OBSOLETE, CAN/MARC], [LOCAL, USA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 148, 
              'tagfield' => '411',
              'description' => 'SERIES STATEMENT/ADDED ENTRY--MEETING NAME [OBSOLETE, CAN/MARC], [LOCAL, USA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 149, 
              'tagfield' => '440',
              'description' => 'SERIES STATEMENT/ADDED ENTRY--TITLE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 150, 
              'tagfield' => '490',
              'description' => 'SERIES STATEMENT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 151, 
              'tagfield' => '500',
              'description' => 'GENERAL NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 152, 
              'tagfield' => '501',
              'description' => 'WITH NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 153, 
              'tagfield' => '502',
              'description' => 'DISSERTATION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 154, 
              'tagfield' => '503',
              'description' => 'BIBLIOGRAPHIC HISTORY NOTE (BK CF MU) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 155, 
              'tagfield' => '504',
              'description' => 'BIBLIOGRAPHY, ETC. NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 156, 
              'tagfield' => '505',
              'description' => 'FORMATTED CONTENTS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 157, 
              'tagfield' => '506',
              'description' => 'RESTRICTIONS ON ACCESS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 158, 
              'tagfield' => '507',
              'description' => 'SCALE NOTE FOR GRAPHIC MATERIAL',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 159, 
              'tagfield' => '508',
              'description' => 'CREATION/PRODUCTION CREDITS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 160, 
              'tagfield' => '509',
              'description' => 'INFORMAL NOTES (RLIN)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 161, 
              'tagfield' => '510',
              'description' => 'CITATION/REFERENCES NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 162, 
              'tagfield' => '511',
              'description' => 'PARTICIPANT OR PERFORMER NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 163, 
              'tagfield' => '512',
              'description' => 'EARLIER OR LATER VOLUMES SEPARATELY CATALOGED NOTE (SE) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 164, 
              'tagfield' => '513',
              'description' => 'TYPE OF REPORT AND PERIOD COVERED NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 165, 
              'tagfield' => '514',
              'description' => 'DATA QUALITY NOTE',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 166, 
              'tagfield' => '515',
              'description' => 'NUMBERING PECULIARITIES NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 167, 
              'tagfield' => '516',
              'description' => 'TYPE OF COMPUTER FILE OR DATA NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 168, 
              'tagfield' => '517',
              'description' => 'CATEGORIES OF FILMS NOTE (ARCHIVAL) (VM) [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 169, 
              'tagfield' => '518',
              'description' => 'DATE/TIME AND PLACE OF AN EVENT NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 170, 
              'tagfield' => '520',
              'description' => 'SUMMARY, ETC.',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 171, 
              'tagfield' => '521',
              'description' => 'TARGET AUDIENCE NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 172, 
              'tagfield' => '522',
              'description' => 'GEOGRAPHIC COVERAGE NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 173, 
              'tagfield' => '523',
              'description' => 'TIME PERIOD OF CONTENT NOTE (CF) [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 174, 
              'tagfield' => '524',
              'description' => 'PREFERRED CITATION OF DESCRIBED MATERIALS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 175, 
              'tagfield' => '525',
              'description' => 'SUPPLEMENT NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 176, 
              'tagfield' => '526',
              'description' => 'STUDY PROGRAM INFORMATION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 177, 
              'tagfield' => '527',
              'description' => 'CENSORSHIP NOTE (VM) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 178, 
              'tagfield' => '530',
              'description' => 'ADDITIONAL PHYSICAL FORM AVAILABLE NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 179, 
              'tagfield' => '533',
              'description' => 'REPRODUCTION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 180, 
              'tagfield' => '534',
              'description' => 'ORIGINAL VERSION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 181, 
              'tagfield' => '535',
              'description' => 'LOCATION OF ORIGINALS/DUPLICATES NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 182, 
              'tagfield' => '536',
              'description' => 'FUNDING INFORMATION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 183, 
              'tagfield' => '537',
              'description' => 'SOURCE OF DATA NOTE (CF) [OBSOLETE]',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 184, 
              'tagfield' => '538',
              'description' => 'SYSTEM DETAILS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 185, 
              'tagfield' => '540',
              'description' => 'TERMS GOVERNING USE AND REPRODUCTION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 186, 
              'tagfield' => '541',
              'description' => 'IMMEDIATE SOURCE OF ACQUISITION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 187, 
              'tagfield' => '542',
              'description' => 'INFORMATION RELATING TO COPYRIGHT STATUS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 188, 
              'tagfield' => '543',
              'description' => 'SOLICITATION INFORMATION NOTE (AM) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 189, 
              'tagfield' => '544',
              'description' => 'LOCATION OF OTHER ARCHIVAL MATERIALS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 190, 
              'tagfield' => '545',
              'description' => 'BIOGRAPHICAL OR HISTORICAL DATA',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 191, 
              'tagfield' => '546',
              'description' => 'LANGUAGE NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 192, 
              'tagfield' => '547',
              'description' => 'FORMER TITLE COMPLEXITY NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 193, 
              'tagfield' => '550',
              'description' => 'ISSUING BODY NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 194, 
              'tagfield' => '552',
              'description' => 'ENTITY AND ATTRIBUTE INFORMATION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 195, 
              'tagfield' => '555',
              'description' => 'CUMULATIVE INDEX/FINDING AIDS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 196, 
              'tagfield' => '556',
              'description' => 'INFORMATION ABOUT DOCUMENTATION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 197, 
              'tagfield' => '561',
              'description' => 'OWNERSHIP AND CUSTODIAL HISTORY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 198, 
              'tagfield' => '562',
              'description' => 'COPY AND VERSION IDENTIFICATION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 199, 
              'tagfield' => '563',
              'description' => 'BINDING INFORMATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 200, 
              'tagfield' => '565',
              'description' => 'CASE FILE CHARACTERISTICS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 201, 
              'tagfield' => '567',
              'description' => 'METHODOLOGY NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 202, 
              'tagfield' => '570',
              'description' => 'EDITOR NOTE (SE) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 203, 
              'tagfield' => '580',
              'description' => 'LINKING ENTRY COMPLEXITY NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 204, 
              'tagfield' => '581',
              'description' => 'PUBLICATIONS ABOUT DESCRIBED MATERIALS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 205, 
              'tagfield' => '582',
              'description' => 'RELATED COMPUTER FILES NOTE (CF) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 206, 
              'tagfield' => '583',
              'description' => 'ACTION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 207, 
              'tagfield' => '584',
              'description' => 'ACCUMULATION AND FREQUENCY OF USE NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 208, 
              'tagfield' => '585',
              'description' => 'EXHIBITIONS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 209, 
              'tagfield' => '586',
              'description' => 'AWARDS NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 210, 
              'tagfield' => '588',
              'description' => 'SOURCE OF DESCRIPTION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 211, 
              'tagfield' => '590',
              'description' => 'LOCAL NOTE (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 212, 
              'tagfield' => '600',
              'description' => 'SUBJECT ADDED ENTRY--PERSONAL NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 213, 
              'tagfield' => '610',
              'description' => 'SUBJECT ADDED ENTRY--CORPORATE NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 214, 
              'tagfield' => '611',
              'description' => 'SUBJECT ADDED ENTRY--MEETING NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 215, 
              'tagfield' => '630',
              'description' => 'SUBJECT ADDED ENTRY--UNIFORM TITLE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 216, 
              'tagfield' => '648',
              'description' => 'SUBJECT ADDED ENTRY--CHRONOLOGICAL TERM',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 217, 
              'tagfield' => '650',
              'description' => 'SUBJECT ADDED ENTRY--TOPICAL TERM',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 218, 
              'tagfield' => '651',
              'description' => 'SUBJECT ADDED ENTRY--GEOGRAPHIC NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 219, 
              'tagfield' => '652',
              'description' => 'SUBJECT ADDED ENTRY--REVERSE GEOGRAPHIC (BK MP SE) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 220, 
              'tagfield' => '653',
              'description' => 'INDEX TERM--UNCONTROLLED',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 221, 
              'tagfield' => '654',
              'description' => 'SUBJECT ADDED ENTRY--FACETED TOPICAL TERM',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 222, 
              'tagfield' => '655',
              'description' => 'INDEX TERM--GENRE/FORM',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 223, 
              'tagfield' => '656',
              'description' => 'INDEX TERM--OCCUPATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 224, 
              'tagfield' => '657',
              'description' => 'INDEX TERM--FUNCTION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 225, 
              'tagfield' => '658',
              'description' => 'INDEX TERM--CURRICULUM OBJECTIVE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 226, 
              'tagfield' => '662',
              'description' => 'SUBJECT ADDED ENTRY--HIERARCHICAL PLACE NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 227, 
              'tagfield' => '690',
              'description' => 'LOCAL SUBJECT ADDED ENTRY--TOPICAL TERM (OCLC, RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 228, 
              'tagfield' => '691',
              'description' => 'LOCAL SUBJECT ADDED ENTRY--GEOGRAPHIC NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 229, 
              'tagfield' => '696',
              'description' => 'LOCAL SUBJECT ADDED ENTRY--PERSONAL NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 230, 
              'tagfield' => '697',
              'description' => 'LOCAL SUBJECT ADDED ENTRY--CORPORATE NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 231, 
              'tagfield' => '698',
              'description' => 'LOCAL SUBJECT ADDED ENTRY--MEETING NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 232, 
              'tagfield' => '699',
              'description' => 'LOCAL SUBJECT ADDED ENTRY--UNIFORM TITLE (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 233, 
              'tagfield' => '700',
              'description' => 'ADDED ENTRY--PERSONAL NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 234, 
              'tagfield' => '705',
              'description' => 'ADDED ENTRY--PERSONAL NAME (PERFORMER) (MU) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 235, 
              'tagfield' => '710',
              'description' => 'ADDED ENTRY--CORPORATE NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 236, 
              'tagfield' => '711',
              'description' => 'ADDED ENTRY--MEETING NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 237, 
              'tagfield' => '715',
              'description' => 'ADDED ENTRY--CORPORATE NAME (PERFORMER) (MU) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 238, 
              'tagfield' => '720',
              'description' => 'ADDED ENTRY--UNCONTROLLED NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 239, 
              'tagfield' => '730',
              'description' => 'ADDED ENTRY--UNIFORM TITLE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 240, 
              'tagfield' => '740',
              'description' => 'ADDED ENTRY--UNCONTROLLED RELATED/ANALYTICAL TITLE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 241, 
              'tagfield' => '751',
              'description' => 'ADDED ENTRY-GEOGRAPHIC NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 242, 
              'tagfield' => '752',
              'description' => 'ADDED ENTRY--HIERARCHICAL PLACE NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 243, 
              'tagfield' => '753',
              'description' => 'SYSTEM DETAILS ACCESS TO COMPUTER FILES',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 244, 
              'tagfield' => '754',
              'description' => 'ADDED ENTRY--TAXONOMIC IDENTIFICATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 245, 
              'tagfield' => '755',
              'description' => 'ADDED ENTRY--PHYSICAL CHARACTERISTICS [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 246, 
              'tagfield' => '760',
              'description' => 'MAIN SERIES ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 247, 
              'tagfield' => '762',
              'description' => 'SUBSERIES ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 248, 
              'tagfield' => '765',
              'description' => 'ORIGINAL LANGUAGE ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 249, 
              'tagfield' => '767',
              'description' => 'TRANSLATION ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 250, 
              'tagfield' => '770',
              'description' => 'SUPPLEMENT/SPECIAL ISSUE ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 251, 
              'tagfield' => '772',
              'description' => 'SUPPLEMENT PARENT ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 252, 
              'tagfield' => '773',
              'description' => 'HOST ITEM ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 253, 
              'tagfield' => '774',
              'description' => 'CONSTITUENT UNIT ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 254, 
              'tagfield' => '775',
              'description' => 'OTHER EDITION ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 255, 
              'tagfield' => '776',
              'description' => 'ADDITIONAL PHYSICAL FORM ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 256, 
              'tagfield' => '777',
              'description' => 'ISSUED WITH ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 257, 
              'tagfield' => '780',
              'description' => 'PRECEDING ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 258, 
              'tagfield' => '785',
              'description' => 'SUCCEEDING ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 259, 
              'tagfield' => '786',
              'description' => 'DATA SOURCE ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 260, 
              'tagfield' => '787',
              'description' => 'OTHER RELATIONSHIP ENTRY',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 261, 
              'tagfield' => '789',
              'description' => 'COMPONENT ITEM ENTRY (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 262, 
              'tagfield' => '796',
              'description' => 'LOCAL ADDED ENTRY--PERSONAL NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 263, 
              'tagfield' => '797',
              'description' => 'LOCAL ADDED ENTRY--CORPORATE NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 264, 
              'tagfield' => '798',
              'description' => 'LOCAL ADDED ENTRY--MEETING NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 265, 
              'tagfield' => '799',
              'description' => 'LOCAL ADDED ENTRY--UNIFORM TITLE (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 266, 
              'tagfield' => '800',
              'description' => 'SERIES ADDED ENTRY--PERSONAL NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 267, 
              'tagfield' => '810',
              'description' => 'SERIES ADDED ENTRY--CORPORATE NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 268, 
              'tagfield' => '811',
              'description' => 'SERIES ADDED ENTRY--MEETING NAME',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 269, 
              'tagfield' => '830',
              'description' => 'SERIES ADDED ENTRY--UNIFORM TITLE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 270, 
              'tagfield' => '840',
              'description' => 'SERIES ADDED ENTRY--TITLE [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 271, 
              'tagfield' => '841',
              'description' => 'HOLDINGS CODED DATA VALUES',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 272, 
              'tagfield' => '842',
              'description' => 'TEXTUAL PHYSICAL FORM DESIGNATOR',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 273, 
              'tagfield' => '843',
              'description' => 'REPRODUCTION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 274, 
              'tagfield' => '844',
              'description' => 'NAME OF UNIT',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 275, 
              'tagfield' => '845',
              'description' => 'TERMS GOVERNING USE AND REPRODUCTION NOTE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 276, 
              'tagfield' => '850',
              'description' => 'HOLDING INSTITUTION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 277, 
              'tagfield' => '851',
              'description' => 'LOCATION [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 278, 
              'tagfield' => '852',
              'description' => 'LOCATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 279, 
              'tagfield' => '853',
              'description' => 'CAPTIONS AND PATTERN--BASIC BIBLIOGRAPHIC UNIT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 280, 
              'tagfield' => '854',
              'description' => 'CAPTIONS AND PATTERN--SUPPLEMENTARY MATERIAL',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 281, 
              'tagfield' => '855',
              'description' => 'CAPTIONS AND PATTERN--INDEXES',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 282, 
              'tagfield' => '856',
              'description' => 'ELECTRONIC LOCATION AND ACCESS',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 283, 
              'tagfield' => '859',
              'description' => 'LOCAL CONTROL INFORMATION (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 284, 
              'tagfield' => '863',
              'description' => 'ENUMERATION AND CHRONOLOGY--BASIC BIBLIOGRAPHIC UNIT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 285, 
              'tagfield' => '864',
              'description' => 'ENUMERATION AND CHRONOLOGY--SUPPLEMENTARY MATERIAL',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 286, 
              'tagfield' => '865',
              'description' => 'ENUMERATION AND CHRONOLOGY--INDEXES',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 287, 
              'tagfield' => '866',
              'description' => 'TEXTUAL HOLDINGS--BASIC BIBLIOGRAPHIC UNIT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 288, 
              'tagfield' => '867',
              'description' => 'TEXTUAL HOLDINGS--SUPPLEMENTARY MATERIAL',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 289, 
              'tagfield' => '868',
              'description' => 'TEXTUAL HOLDINGS--INDEXES',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 290, 
              'tagfield' => '870',
              'description' => 'VARIANT PERSONAL NAME (SE) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 291, 
              'tagfield' => '871',
              'description' => 'VARIANT CORPORATE NAME (SE)[OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 292, 
              'tagfield' => '872',
              'description' => 'VARIANT CONFERENCE OR MEETING NAME (SE) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 293, 
              'tagfield' => '873',
              'description' => 'VARIANT UNIFORM TITLE HEADING (SE) [OBSOLETE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 294, 
              'tagfield' => '876',
              'description' => 'ITEM INFORMATION--BASIC BIBLIOGRAPHIC UNIT',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 295, 
              'tagfield' => '877',
              'description' => 'ITEM INFORMATION--SUPPLEMENTARY MATERIAL',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 296, 
              'tagfield' => '878',
              'description' => 'ITEM INFORMATION--INDEXES',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 297, 
              'tagfield' => '880',
              'description' => 'ALTERNATE GRAPHIC REPRESENTATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 298, 
              'tagfield' => '882',
              'description' => 'REPLACEMENT RECORD INFORMATION',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 299, 
              'tagfield' => '883',
              'description' => 'MACHINE-GENERATED METADATA PROVENANCE',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 300, 
              'tagfield' => '884',
              'description' => 'DESCRIPTION CONVERSION INFORMATION',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 301, 
              'tagfield' => '886',
              'description' => 'FOREIGN MARC INFORMATION FIELD',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 302, 
              'tagfield' => '887',
              'description' => 'NON-MARC INFORMATION FIELD',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 303, 
              'tagfield' => '896',
              'description' => 'LOCAL SERIES ADDED ENTRY--PERSONAL NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 304, 
              'tagfield' => '897',
              'description' => 'LOCAL SERIES ADDED ENTRY--CORPORATE NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 305, 
              'tagfield' => '898',
              'description' => 'LOCAL SERIES ADDED ENTRY--MEETING NAME (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 306, 
              'tagfield' => '899',
              'description' => 'LOCAL SERIES ADDED ENTRY--UNIFORM TITLE (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 307, 
              'tagfield' => '900',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE-PERSONAL NAME [LOCAL, CANADA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 308, 
              'tagfield' => '901',
              'description' => 'LOCAL DATA ELEMENT A, LDA (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 309, 
              'tagfield' => '902',
              'description' => 'LOCAL DATA ELEMENT B, LDB (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 310, 
              'tagfield' => '903',
              'description' => 'LOCAL DATA ELEMENT C, LDC (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 311, 
              'tagfield' => '904',
              'description' => 'LOCAL DATA ELEMENT D, LDD (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 312, 
              'tagfield' => '905',
              'description' => 'LOCAL DATA ELEMENT E, LDE (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 313, 
              'tagfield' => '906',
              'description' => 'LOCAL DATA ELEMENT F, LDF (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 314, 
              'tagfield' => '907',
              'description' => 'LOCAL DATA ELEMENT G, LDG (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 315, 
              'tagfield' => '908',
              'description' => 'PUT COMMAND PARAMETER (RLIN)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 316, 
              'tagfield' => '910',
              'description' => 'USER-OPTION DATA (OCLC)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 317, 
              'tagfield' => '911',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE-CONFERENCE OR MEETING NAME [LOCAL, CANADA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 318, 
              'tagfield' => '930',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE-UNIFORM TITLE HEADING [LOCAL, CANADA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 319, 
              'tagfield' => '936',
              'description' => 'OCLC/CONSER MISCELLANEOUS DATA (OCLC); PIECE USED FOR CATALOGING (pre-AACR2) (RLIN)',
              'repeatable' => 0,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 320, 
              'tagfield' => '940',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE--UNIFORM TITLE [OBSOLETE] [CAN/MARC only]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 321, 
              'tagfield' => '941',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE--ROMANIZED TITLE [OBSOLETE] [CAN/MARC only]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 322, 
              'tagfield' => '943',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE--COLLECTIVE TITLE [OBSOLETE] [CAN/MARC only]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 323, 
              'tagfield' => '945',
              'description' => 'LOCAL PROCESSING INFORMATION (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 324, 
              'tagfield' => '946',
              'description' => 'LOCAL PROCESSING INFORMATION (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 325, 
              'tagfield' => '947',
              'description' => 'LOCAL PROCESSING INFORMATION (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 326, 
              'tagfield' => '948',
              'description' => 'LOCAL PROCESSING INFORMATION (OCLC); SERIES PART DESIGNATOR (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 327, 
              'tagfield' => '949',
              'description' => 'LOCAL PROCESSING INFORMATION (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 328, 
              'tagfield' => '950',
              'description' => 'LOCAL HOLDINGS (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 329, 
              'tagfield' => '951',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE--GEOGRAPHIC NAME/AREA NAME [OBSOLETE] [CAN/MARC only]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 330, 
              'tagfield' => '955',
              'description' => 'COPY-LEVEL INFORMATION (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 331, 
              'tagfield' => '956',
              'description' => 'LOCAL ELECTRONIC LOCATION AND ACCESS (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 332, 
              'tagfield' => '960',
              'description' => 'PHYSICAL LOCATION (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 333, 
              'tagfield' => '967',
              'description' => 'ADDITIONAL ESTC CODES (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 334, 
              'tagfield' => '980',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE-SERIES STATEMENT--PERSONAL NAME/TITLE [LOCAL, CANADA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 335, 
              'tagfield' => '981',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE-SERIES STATEMENT--CORPORATE NAME/TITLE [LOCAL, CANADA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 336, 
              'tagfield' => '982',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE-SERIES STATEMENT--CONFERENCE OR MEETING NAME/TITLE [LOCAL, CANADA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 337, 
              'tagfield' => '983',
              'description' => 'EQUIVALENCE OR CROSS-REFERENCE-SERIES STATEMENT--TITLE/UNIFORM TITLE [LOCAL, CANADA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 338, 
              'tagfield' => '984',
              'description' => 'WLN AUTOMATIC HOLDINGS STATEMENT (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 339, 
              'tagfield' => '987',
              'description' => 'LOCAL ROMANIZATION/CONVERSION HISTORY (OCLC)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 340, 
              'tagfield' => '990',
              'description' => 'EQUIVALENCES OR CROSS-REFERENCES [LOCAL, CANADA]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 341, 
              'tagfield' => '995',
              'description' => 'RECOMMENDATION 995 [LOCAL, UNIMARC FRANCE]',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('marcfields')->insert([
              'id'  => 342, 
              'tagfield' => '998',
              'description' => 'LOCAL CONTROL INFORMATION (RLIN)',
              'repeatable' => 1,
              'mandatory' => 0,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
