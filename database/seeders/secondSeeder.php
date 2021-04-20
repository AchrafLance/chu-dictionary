<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Seeder;

class secondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flight = new Flight();
        $flight->fname = "achraf";
        $flight->lname = "elkhandouli"; 
        $flight->photo = "photo"; 
        $flight->save(); 
      
    }
}
