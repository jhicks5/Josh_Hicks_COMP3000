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
            array('Class One', 1),
            array('Class Two', 1),
            array('Class Three', 1),
            array('Class Four', 1),
            array('Class Five', 1),
            array('Class Six', 1),
            array('Class Seven', 1),
            array('Class Amend Test', 1)

        );

        foreach ($classrooms as $room) {
            DB::table('classrooms')->insert([
                'classname' => $room[0],
                'school_id' => $room[1],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

    }
}
