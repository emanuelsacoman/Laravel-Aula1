<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aluno')->insert([
            'name' => 'Emanuel',
            'dateofbirth' => '1980-05-2',
            'email' => 'emanuel@gmail.com',
            'registrationnumber' => '40028922',
            'classcourse' => 'Eng Software',
        ]);
    }
}
