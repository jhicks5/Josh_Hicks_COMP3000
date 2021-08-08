<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert test classrooms
        $classrooms = array (
            array(1, 'Class One'),
            array(1, 'Class Two'),
            array(1, 'Class Three'),
            array(1, 'Class Four'),
            array(1, 'Class Five'),
            array(1, 'Class Six'),
            array(1, 'Class Seven'),
            array(1, 'Class Amend Test')

        );

        foreach ($classrooms as $room) {
            DB::table('classrooms')->insert([
                'school_id' => $room[0],
                'classname' => $room[1],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

    }
}
