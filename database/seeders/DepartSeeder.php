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
            ['depart'=>'ortopedic','description'=>'Esteem spirit temper too say adieus who direct esteem','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'eye-care','description'=>'Esteem spirit temper too say adieus who direct esteem','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'cardiologist','description'=>'Esteem spirit temper too say adieus who direct esteem','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'dentist','description'=>'Esteem spirit temper too say adieus who direct esteem','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'child-specialist','description'=>'Esteem spirit temper too say adieus who direct esteem','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
            ['depart'=>'neuro','description'=>'Esteem spirit temper too say adieus who direct esteem','created_at'=>carbon::now(),'updated_at'=>carbon::now()],
           ];
           Depart::insert($depart);
    }
}
