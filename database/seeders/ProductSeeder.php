<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('products')->insert([

            [
                'name'=>'oppo Mobile',
                'price'=>'20000',
                'description'=>'A phone have 8g Ram and most powerful phone',
                'category'=>'Mobile Phone',
                'gallery'=>'https://www.shutterstock.com/image-vector/applestyle-smartphone-gold-color-isolated-background-699853585', 
            ],

            [
                'name'=>'Samsung Mobile',
                'price'=>'35000',
                'description'=>'A phone have 10g Ram and most powerful phone',
                'category'=>'Mobile Phone',
                'gallery'=>'https://www.istockphoto.com/photo/man-holding-in-hands-samsung-galaxy-s20-ultra-closeup-gm1217881331-355676918', 
            ],

            [
                'name'=>'TV',
                'price'=>'85000',
                'description'=>'LED: Traditional LED technology for clear and bright pictures.
                 QLED: Quantum Dot technology for enhanced colors and brightness.
                OLED: Organic LED technology for deep blacks and high contrast.',
                'category'=>'Mobile Phone',
                'gallery'=>'https://www.shutterstock.com/image-photo/poland-0726-new-mobile-phone-on-1158088153', 
            ],


      
        ]);
    }
}
