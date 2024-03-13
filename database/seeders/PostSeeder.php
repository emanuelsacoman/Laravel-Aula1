<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'posttitle' => 'PostMalone',
            'author' => 'PostMalone',
            'publicationdate' => '2003-11-03',
            'content' => 'lorem impsu',
            'tags' => 'post'
        ]);
    }
}
