<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert test users.
        // Each user array order
        // name, email, username, school_id, classroom_id, role, password
        $users = array (
            array('admin', 'admin@test.com', 'admin@test.com', 1, 1, '0', bcrypt('adminpass')),
            array('Student One', 'student1@test.com', 'student1@test.com', 1, 1, '1', bcrypt('P@ssw0rd1')),
            array('Student Two', 'student2@test.com', 'student2@test.com', 1, 2, '1', bcrypt('P@ssw0rd2')),
            array('Student Three', 'student3@test.com', 'student3@test.com', 1, 3, '1', bcrypt('P@ssw0rd3')),
            array('Student Four', 'student4@test.com', 'student4@test.com', 1, 4, '1', bcrypt('P@ssw0rd4')),
            array('Student Five', 'student5@test.com', 'student5@test.com', 1, 5, '1', bcrypt('P@ssw0rd5')),
            array('Student Six', 'student6@test.com', 'student6@test.com', 1, 6, '1', bcrypt('P@ssw0rd6')),
            array('Student Seven', 'student7@test.com', 'student7@test.com', 1, 7, '1', bcrypt('P@ssw0rd7')),
            array('Teacher One', 'teacher1@test.com', 'teacher1@test.com', 1, 1, '2', bcrypt('T3@cher1')),
            array('Teacher Two', 'teacher2@test.com', 'teacher2@test.com', 1, 2, '2', bcrypt('T3@cher2')),
            array('Teacher Three', 'teacher3@test.com', 'teacher3@test.com', 1, 3, '2', bcrypt('T3@cher3')),
            array('Teacher Four', 'teacher4@test.com', 'teacher4@test.com', 1, 4, '2', bcrypt('T3@cher4')),
            array('Teacher Five', 'teacher5@test.com', 'teacher5@test.com', 1, 5, '2', bcrypt('T3@cher5')),
            array('Teacher Six', 'teacher6@test.com', 'teacher6@test.com', 1, 6, '2', bcrypt('T3@cher6')),
            array('Teacher Seven', 'teacher7@test.com', 'teacher7@test.com', 1, 7, '2', bcrypt('T3@cher7'))

        );

        foreach($users as $user) {
            DB::table('users')->insert([
                'name' => $user[0],
                'email' => $user[1],
                'username' => $user[2],
                'school_id' => $user[3],
                'classroom_id' => $user[4],
                'role' => $user[5],
                'password' => $user[6],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
             ]);
        }




    }
}
