<?php

use Illuminate\Database\Seeder;

class FitnessProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('fitness_profiles')->delete();
	DB::table('fitness_profiles')->insert([
    'height'=>'511',
	'weight'=>'150',
    'bloodType'=>'O',
    'gender'=>'Male',
    ]);
        //
    DB::table('fitness_profiles')->insert([
            'height'=>'59',
            'weight'=>'120',
            'bloodType'=>'AB',
            'gender'=>'Female',
     ]);
     DB::table('fitness_profiles')->insert([
        'height'=>'60',

        'weight'=>'190',
        'bloodType'=>'A',
        'gender'=>'Male',
        ]);

    DB::table('fitness_profiles')->insert([
            'height'=>'55',

            'weight'=>'160',
            'bloodType'=>'O',
            'gender'=>'Female',
    ]);
        //
    }
}
