<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<100; $i++){
            Student::create([
                "nim" => "F1E123038$i",
                "name" => "Putry Maharani ke-$i",
                "prodi" => "Sistem Informasi",
                "angkatan" => 2023 + $i,
                "alamat" => "Jambi"
                ]);
        }

        Student::create([
        "nim" => "F1E123038",
        "name" => "Putry Maharani",
        "prodi" => "Sistem Informasi",
        "angkatan" => 2023,
        "alamat" => "Jambi"
        ]);

        Student::create([
        "nim" => Str::random(8),
        "name" => Str::random(20),
        "prodi" => Str::random(15),
        "angkatan" => rand(2000, 2024),
        "alamat" => Str::random(50)
        ]);
    }
}