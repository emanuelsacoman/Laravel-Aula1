<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Emanuel Sacoman'),
            'email' => Crypt::encryptString('emanuelsacoman@gmail.com'),
            'telefone' => Crypt::encryptString('(42) 98099371'),
            'data_nascimento' => Crypt::encryptString('2003-11-03')
        ]);

        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Jorge Silva'),
            'email' => Crypt::encryptString('jorges@gmail.com'),
            'telefone' => Crypt::encryptString('(42) 56201484'),
            'data_nascimento' => Crypt::encryptString('2004-05-05')
        ]);
    }
}
