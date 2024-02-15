<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('pegawai')->insert(
            [
            'nip' => rand(),
            'nama' => uniqid('nama_'),
            'alamat' => uniqid('alamat_'),
            'email' => uniqid().'@gmail.com',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ]);
            }
    }
}
