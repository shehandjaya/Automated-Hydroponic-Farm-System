<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => '1',
            'name' => 'Apple Mint seeds',
            'description' => '200 seeds Germination rate > 90%',
            'image' => 'webSiteImages\store\I001.png',
            'price' => 775.00,
            'discount' => 11.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '2',
            'name' => 'Arugala (rocket) seeds',
            'description' => '100 seeds Germination rate > 90%',
            'image' => 'webSiteImages\store\I002.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '3',
            'name' => 'Arugala Microgreen',
            'description' => 'Spicy, nutty flavor. Purple stems and dark-green leaves',
            'image' => 'webSiteImages\store\I003.png',
            'price' => 1300.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '4',
            'name' => 'Basil seeds - Basil Super Sweet',
            'description' => '50 seeds Germination rate > 90%',
            'image' => 'webSiteImages\store\I004.png',
            'price' => 390.00,
            'discount' => 10.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '5',
            'name' => 'Bok Choy seeds',
            'description' => '50 seeds Germination rate > 85%',
            'image' => 'webSiteImages\store\I005.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '6',
            'name' => 'Broccoli “Miranda” seeds ',
            'description' => '25 seeds Germination rate > 80% ',
            'image' => 'webSiteImages\store\I006.png',
            'price' => 450.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '7',
            'name' => 'Broccoli Microgreen',
            'description' => '100 seeds Germination rate > 80% ',
            'image' => 'webSiteImages\store\I007.png',
            'price' => 2500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '8',
            'name' => 'Broccoli seeds',
            'description' => '30 seeds Germination rate > 80% ',
            'image' => 'webSiteImages\store\I008.png',
            'price' => 450.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '9',
            'name' => 'Butter head lettuce “red” seeds',
            'description' => '100 seeds Germination rate > 85% ',
            'image' => 'webSiteImages\store\I009.png',
            'price' => 400.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '10',
            'name' => 'Butter head Lettuce Hodar seeds',
            'description' => '100 seeds Germination rate > 92% ',
            'image' => 'webSiteImages\store\I010.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '11',
            'name' => 'Butter head lettuce Sanguine Ameliore variety',
            'description' => '100 seeds Germination rate > 80%',
            'image' => 'webSiteImages\store\I011.png',
            'price' => 400.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '12',
            'name' => 'Cauliflower Seeds',
            'description' => '50 seeds Germination rate > 85% ',
            'image' => 'webSiteImages\store\I012.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '13',
            'name' => 'Cherry tomato orange seeds',
            'description' => '10 seeds Germination rate > 90% ',
            'image' => 'webSiteImages\store\I013.png',
            'price' => 400.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '14',
            'name' => 'Cherry Tomato Rosa seeds',
            'description' => '10 seeds Germination rate > 80% ',
            'image' => 'webSiteImages\store\I014.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '15',
            'name' => 'Cherry Tomato snow white seeds',
            'description' => '10 seeds Germination rate > 90% ',
            'image' => 'webSiteImages\store\I015.png',
            'price' => 420.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '16',
            'name' => 'Chives - Garlic Chives',
            'description' => '50 seeds Germination rate > 75% ',
            'image' => 'webSiteImages\store\I016.png',
            'price' => 300.00,
            'discount' => 14.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '17',
            'name' => 'Dill seeds',
            'description' => '100 seeds Germination rate > 80% ',
            'image' => 'webSiteImages\store\I017.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '18',
            'name' => 'Dwarf Cherry Tomato Bajaja seeds',
            'description' => '10 seeds Germination rate > 80% ',
            'image' => 'webSiteImages\store\I018.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '19',
            'name' => 'Garden Thyme seeds',
            'description' => '50 seeds Germination rate > 80% ',
            'image' => 'webSiteImages\store\I019.png',
            'price' => 550.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '20',
            'name' => 'Jalapeno Pepper seeds',
            'description' => '10 seeds Germination rate > 85% ',
            'image' => 'webSiteImages\store\I020.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '21',
            'name' => 'Kale “Curly” seeds',
            'description' => '50 seeds Germination rate > 90% ',
            'image' => 'webSiteImages\store\I021.png',
            'price' => 450.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '22',
            'name' => 'Kale Curly Scarlet seeds',
            'description' => '40 seeds Germination rate > 90% ',
            'image' => 'webSiteImages\store\I022.png',
            'price' => 450.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '23',
            'name' => 'Lavender seeds',
            'description' => '50 seeds Germination rate > 85% ',
            'image' => 'webSiteImages\store\I023.png',
            'price' => 450.00,
            'discount' => 10.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '24',
            'name' => 'Lemon Balm seeds',
            'description' => '50 seeds Germination rate > 85% ',
            'image' => 'webSiteImages\store\I024.png',
            'price' => 400.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '25',
            'name' => 'Lettuce Lollo Bionda seeds',
            'description' => '100 seeds Germination rate > 85% ',
            'image' => 'webSiteImages\store\I025.png',
            'price' => 360.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '26',
            'name' => 'Lettuce Lollo Rosso Crimson seeds',
            'description' => '100 seeds Germination rate > 85%',
            'image' => 'webSiteImages\store\I026.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '27',
            'name' => 'Lettuce Lollo rosso seeds',
            'description' => '100 seeds Germination rate > 85%',
            'image' => 'webSiteImages\store\I027.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '28',
            'name' => 'Microgreen Red Cabbage',
            'description' => '1000 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I028.png',
            'price' => 1750.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '29',
            'name' => 'Mizuna (Japanese Mustard)',
            'description' => '50 seeds
            Germination rate > 85%
            ',
            'image' => 'webSiteImages\store\I029.png',
            'price' => 400.00,
            'discount' => 20.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '30',
            'name' => 'Mizuna Mix Microgreen',
            'description' => '21000 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I030.png',
            'price' => 1000.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '31',
            'name' => 'Oak Leaf Lettuce “Red” seeds',
            'description' => '100 seeds
            Germination rate > 95%
            ',
            'image' => 'webSiteImages\store\I031.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '32',
            'name' => 'Oregano seeds',
            'description' => '100 seeds
            Germination rate > 85%
            ',
            'image' => 'webSiteImages\store\I032.png',
            'price' => 375.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '33',
            'name' => 'Parsley triples',
            'description' => '100 seeds
            Germination rate > 90%
            ',
            'image' => 'webSiteImages\store\I033.png',
            'price' => 375.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '34',
            'name' => 'Petunia Blue Beder seeds',
            'description' => '100 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I034.png',
            'price' => 450.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '35',
            'name' => 'Petunia mix seeds',
            'description' => '100 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I035.png',
            'price' => 550.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '36',
            'name' => 'Petunia Snow Ball seeds',
            'description' => '100 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I036.png',
            'price' => 450.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '37',
            'name' => 'Purple Basil seeds',
            'description' => '50 seeds
            Germination rate > 95%
            ',
            'image' => 'webSiteImages\store\I037.png',
            'price' => 350.00,
            'discount' => 8.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '38',
            'name' => 'Red Basil Microgreen',
            'description' => '1000 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I038.png',
            'price' => 1300.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '39',
            'name' => 'Red Cabbage seeds',
            'description' => '50 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I039.png',
            'price' => 320.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '40',
            'name' => 'Romaine Lettuce (Cos Lettuce) seeds',
            'description' => '100 seeds
            Germination rate > 90%
            ',
            'image' => 'webSiteImages\store\I040.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '41',
            'name' => 'Rosemary seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I041.png',
            'price' => 500.00,
            'discount' => 9.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '42',
            'name' => 'Summer Savory Oster seeds',
            'description' => '100 seeds
            Germination rate > 85%
            ',
            'image' => 'webSiteImages\store\I042.png',
            'price' => 400.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '43',
            'name' => 'Sweet Marjoram seeds',
            'description' => '100 seeds
            Germination rate > 85%
            ',
            'image' => 'webSiteImages\store\I043.png',
            'price' => 350.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '44',
            'name' => 'Sweet Pepper “Black Square” seeds',
            'description' => '10 seeds
            Germination rate > 95%
            ',
            'image' => 'webSiteImages\store\I044.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '45',
            'name' => 'Sweet Pepper “California Miracle Orange” seeds',
            'description' => '10 seeds
            Germination rate > 90%
            ',
            'image' => 'webSiteImages\store\I045.png',
            'price' => 490.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '46',
            'name' => 'Sweet Pepper Sunny Twins seeds',
            'description' => '10 seeds
            Germination rate > 90%
            ',
            'image' => 'webSiteImages\store\I046.png',
            'price' => 450.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '47',
            'name' => 'Tomato American Blue seeds',
            'description' => '10 seeds
            Germination rate > 90%
            ',
            'image' => 'webSiteImages\store\I047.png',
            'price' => 420.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '48',
            'name' => 'Tomato Amethyst Jewel seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I048.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '49',
            'name' => 'Tomato Balcony Miracle Golden seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I049.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '50',
            'name' => 'Tomato Balcony Miracle Red seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I050.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '51',
            'name' => 'Tomato British Breakfast seeds',
            'description' => '15 seeds
            Germination rate > 90%
            ',
            'image' => 'webSiteImages\store\I051.png',
            'price' => 400.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '52',
            'name' => 'Tomato Dixi Golden Giant seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I052.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '53',
            'name' => 'Tomato Golden Cherry seeds',
            'description' => '10 seeds
            Germination rate > 90%
            ',
            'image' => 'webSiteImages\store\I053.png',
            'price' => 400.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '54',
            'name' => 'Tomato Grape seeds',
            'description' => '10 seeds
            Germination rate > 90%
            ',
            'image' => 'webSiteImages\store\I054.png',
            'price' => 400.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '55',
            'name' => 'Tomato Green Tiger seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I055.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '56',
            'name' => 'Tomato Hundreds and Thousands seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I056.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '57',
            'name' => 'Tomato Paradise Candles seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I057.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '58',
            'name' => 'Tomato Raspberry Giant seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I058.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '59',
            'name' => 'Tomato Vernissage Yellow seeds',
            'description' => '10 seeds
            Germination rate > 80%
            ',
            'image' => 'webSiteImages\store\I059.png',
            'price' => 500.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('items')->insert([
            'id' => '60',
            'name' => 'Tomato Cherry Yubbi seeds',
            'description' => '10 seeds
            Germination rate > 90%
            ',
            'image' => 'webSiteImages\store\I060.png',
            'price' => 400.00,
            'discount' => 0.00,
            'created_at' => now(),
            'updated_at' => now()
        ]);





    }
}
