<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => 'Emanuel Sacoman',
            'email' => 'emanuelsacoman@gmail.com',
            'telefone' => '(42) 98099371',
            'data_nascimento' => '2003-11-03'
        ]);

        DB::table('contacts')->insert([
            'name' => 'Jorge Silva',
            'email' => 'jorges@gmail.com',
            'telefone' => '(42) 56201484',
            'data_nascimento' => '2004-05-05'
        ]);
    }
}
