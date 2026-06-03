<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //mandatory for using DB facade
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('student')->insert([
        //     ['name' => 'palvi',
        //     'email' => 'palvi@gmail.com',
        //     'subject' => 'Mathematics'
        //     ],
        //     ['name' => 'swami',
        //     'email' => 'swami@gmail.com',
        //     'subject' => 'Science'
        //     ],
        //     ['name' => 'harsha',
        //     'email' => 'harsha@gmail.com',
        //     'subject' => 'English'
        //     ],
        //      ['name' => 'sai',
        //     'email' => 'sai@gmail.com',
        //     'subject' => 'History'
        //     ]   
        // ]);

        for($i=1; $i<=10; $i++){
            DB::table('students')->insert([
                'name' => 'Student'.rand(100,999),
                'email' => 'student'.rand(100,999).'@gmail.com',
                'subject' => 'course'.rand(100,999)
            ]);
        }
    }
}
