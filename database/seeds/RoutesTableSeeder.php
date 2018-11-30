<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('routes')->delete();
	DB::table('routes')->insert([
	'routeName'=>'Alicante Loop',
    'distance'=>'5',
    'coordinate'=>'11223',
    'scenery'=>'beach',
    'difficulty'=>'5',
    'popularity'=>'7'
    ]);

    DB::table('routes')->insert([
        'routeName'=>'The Castile',
        'distance'=>'10',
        'coordinate'=>'61223',
        'scenery'=>'Mountain',
        'difficulty'=>'8',
        'popularity'=>'5'
        ]);
        //
    DB::table('routes')->insert([
          'routeName'=>'San Juan',
          'distance'=>'6.7',
          'coordinate'=>'61233',
          'scenery'=>'Beach/City',
          'difficulty'=>'8',
          'popularity'=>'8'
            ]);  
    DB::table('routes')->insert([
           'routeName'=>'Vuelta a Rabasa',
           'distance'=>'4.3',
           'coordinate'=>'61233',
           'scenery'=>'City/Countryside',
           'difficulty'=>'4',
           'popularity'=>'5'
                  ]);    
    DB::table('routes')->insert([
            'routeName'=>'UA Tour',
            'distance'=>'4',
             'coordinate'=>'61533',
             'scenery'=>'City/Campus',
             'difficulty'=>'6',
             'popularity'=>'9'
                ]);
    }
}
