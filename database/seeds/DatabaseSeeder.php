<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(BasicDataSeeder::class);

        Model::reguard();
    }
}

class BasicDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete old record
        DB::table('promotions')->delete();
        DB::table('products')->delete();
        DB::table('category')->delete();
        DB::table('shops')->delete();

        //Category Table
        $category =[
            ['id' => 1,'name' => 'Baby Product'],
            ['id' => 2,'name' => 'Detergent/Softener'],
            ['id' => 3,'name' => 'Drink'],
            ['id' => 4,'name' => 'Food'],
            ['id' => 5,'name' => 'Personal Care'],
        ];
        DB::table('category')->insert($category);

        //Product Table
        $products =[
            ['id' => 1,'category_id' => 1,'name' => 'Pet Pet Daypants'],
            ['id' => 2,'category_id' => 1,'name' => 'Huggies Dry'],
            ['id' => 3,'category_id' => 1,'name' => 'Johnson 500ml'],
            ['id' => 4,'category_id' => 5,'name' => 'May Body Wash 3x85gm'],
            ['id' => 5,'category_id' => 1,'name' => 'Carrie Junior Hair & Body 700ml'],
            ['id' => 6,'category_id' => 1,'name' => 'Syampu Bayi Johnson 800ml'],
        ];
        DB::table('products')->insert($products);

        //Shop Table
        $shops = [
            ['id' => 1,'name' => 'TESCO'],
            ['id' => 2, 'name' => 'Giant'],
            ['id' => 3,'name' => 'Jusco'],
            ['id' => 4,'name' => 'Hero'],
        ];
        DB::table('shops')->insert($shops);

        //Product Promotion
        $startDate = date('Y-m-d' , mktime(0, 0, 0, date("m")  , date("d")-2, date("Y")));
        $endDate =  date('Y-m-d' , mktime(0, 0, 0, date("m")  , date("d")+5, date("Y")));

        $promotions =[
            ['id' => 1,'start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 1,'shop_id' => 1],
        ];
        DB::table('promotions')->insert($promotions);
    }
}
