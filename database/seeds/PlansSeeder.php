<?php

use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->delete();
	    DB::table('plans')->insert([
	    'activity'=>'Go for a run',
        'duration'=>'30',
        'repeat'=>'4',
        'calories'=>'270'
        ]);
        //
        DB::table('plans')->insert([
            'activity'=>'Go for a run',
            'duration'=>'35',
            'repeat'=>'5',
            'calories'=>'280'
            ]);

        DB::table('plans')->insert([
            'activity'=>'Go for a run',
            'duration'=>'45',
            'repeat'=>'4',
            'calories'=>'299'
            ]);
        DB::table('plans')->insert([
            'activity'=>'Go for a run',
            'duration'=>'40',
            'repeat'=>'5',
            'calories'=>'290'
            ]);

         DB::table('plans')->insert([
            'activity'=>'Go for a run',
            'duration'=>'50',
            'repeat'=>'6',
            'calories'=>'300'
             ]);
        DB::table('plans')->insert([
            'activity'=>'Go for a run',
            'duration'=>'60',
            'repeat'=>'6',
            'calories'=>'315'
             ]);

        DB::table('plans')->insert([
            'activity'=>'Go for a run',
            'duration'=>'20',
            'repeat'=>'3',
            'calories'=>'200'
             ]);
        

        DB::table('plans')->insert([
            'activity'=>'Weight Lifting!',
            'duration'=>'80',
            'repeat'=>'4',
            'calories'=>'280'
            ]);
            
        DB::table('plans')->insert([
            'activity'=>'Weight Lifting!',
            'duration'=>'60',
            'repeat'=>'5',
            'calories'=>'270'
            ]);

         DB::table('plans')->insert([
                'activity'=>'Weight Lifting!',
                'duration'=>'40',
                'repeat'=>'5',
                'calories'=>'260'
                ]);

        DB::table('plans')->insert([
                'activity'=>'Weight Lifting!',
                'duration'=>'50',
                'repeat'=>'5',
                'calories'=>'280'
                ]);               

        DB::table('plans')->insert([
                'activity'=>'Go for a walk',
                'duration'=>'30',
                'repeat'=>'5',
                'calories'=>'220'
                ]);
        //
    }
}
