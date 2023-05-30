<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Depart;

class DepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $depart = [
            ['depart'=>'ortopedic','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'eye-care','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'cardiologist','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'dentist','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'child-specialist','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'neuro','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
           ];
           Role::insert($depart);
    }
}
