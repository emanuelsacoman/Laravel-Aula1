<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biblioteca')->insert([
            'title' => 'O homem que sabia Javanês',
            'authorpublisher' => 'José',
            'publicationdate' =>  '1946-03-2',
            'availablecopies' => '500',
        ]);
    }
}
