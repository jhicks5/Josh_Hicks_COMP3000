<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert test userstasks.
        // Each task array order
        // classroom id, title, description, taskfile
        $tasks = array (
            array (1, 'Class One Task One', 'Class One Task One', ''),
            array(1, 'Class One Task Two', 'Class One Task Two', ''),
            array(1, 'Class One Task Three', 'Class One Task Three', ''),
            array(1, 'Class One Task Four', 'Class One Task Four', ''),
            array(2, 'Class Two Task One', 'Class Two Task One', ''),
            array(2, 'Class Two Task Two', 'Class Two Task Two', ''),
            array(2, 'Class Two Task Three', 'Class Two Task Three', ''),
            array(3, 'Class Three Task One', 'Class Three Task One', ''),
            array(3, 'Class Three Task Two', 'Class Three Task Two', ''),
            array(3, 'Class Three Task Three', 'Class Three Task Three', ''),
            array(3, 'Class Three Task Four', 'Class Three Task Four', ''),
            array(4, 'Class Four Task One', 'Class Four Task One', ''),
            array(4, 'Class Four Task Two', 'Class Four Task Two', ''),
            array(4, 'Class Four Task Three', 'Class Four Task Three', ''),
            array(4, 'Class Four Task Four', 'Class Four Task Four', ''),
            array(5, 'Class Five Task One', 'Class Five Task One', ''),
            array(5, 'Class Five Task Two', 'Class Five Task Two', ''),
            array(6, 'Class Six Task One', 'Class Six Task One', ''),
            array(6, 'Class Six Task Two', 'Class Six Task Two', ''),
            array(6, 'Class Six Task Three', 'Class Six Task Three', ''),
            array(7, 'Class Seven Task One', 'Class Seven Task One', ''),
            array(7, 'Class Seven Task Two', 'Class Seven Task Two', ''),
            array(7, 'Class Seven Task Three', 'Class Seven Task Three', ''),
            array(7, 'Class Seven Task Four', 'Class Seven Task Four', ''),
            array(1, 'Amendment test homework', 'Amendment test', ''),
            array(1, 'Delete test homework', 'Delete test', '')

        );

        foreach($tasks as $task) {
            DB::table('tasks')->insert([
                'classroom_id' => $task[0],
                'title' => $task[1],
                'description' => $task[2],
                'taskfile' => $task[3],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
             ]);
        }


    }
}
