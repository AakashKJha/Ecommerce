<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'LG Fridge',
                'price'=>'15000',
                "category"=>"Fridge",
                "gallery"=>"https://drive.google.com/file/d/1hp_uzZNe3GzWFcreNPqUcJfZIpowvE78/view?usp=sharing",
                "discription"=>"a smartphone with 4gb 12gb",
               
                
            ],
            [
                'name'=>'VIO TV',
                'price'=>'10000',
                "category"=>"TV",
                "gallery"=>"https://drive.google.com/file/d/1kQydqW6AaNw40EwD7EIrsi89sDIYClUs/view?usp=sharing",
                "discription"=>"a tv  with 4gb 12gb android OS",
               
                
            ],
            [
                'name'=>'Vivo',
                'price'=>'20000',
                "category"=>"mobile",
                "gallery"=>"https://drive.google.com/file/d/1MVA3vFN95gqw41fumCCcCiDAm-XAcbJ9/view?usp=sharing",
                "discription"=>"a smartphone with 4gb 128gb",
               
                
            ],
            [
                'name'=>'One+',
                'price'=>'35000',
                "category"=>"mobile",
                "gallery"=>"https://drive.google.com/file/d/1tPJdxeAY2D-Y-w9Mz3Ex44C3vpno7n64/view?usp=sharing",
                "discription"=>"a smartphone with 8gb 264gb sd888",
               
                
            ],
            [
                'name'=>'SamSung TV',
                'price'=>'100000',
                "category"=>"tv",
                "gallery"=>"https://drive.google.com/file/d/1GzZJTsUccIH6g1A3-ixWIcIe2jDn93bo/view?usp=sharing",
                "discription"=>"a smartphone with 4gb 12gb",
               
                
            ]
        ]);
    }
        
    
}
