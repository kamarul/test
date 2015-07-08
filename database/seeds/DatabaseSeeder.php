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
        DB::table('photos')->delete();

         //Shop Table
            $shops = [
                ['id' => 1 ,'name' => 'TESCO'],
                ['id' => 2 , 'name' => 'Giant'],
                ['id' => 3 ,'name' => 'Jusco'],
                ['id' => 4 ,'name' => 'Hero'],
            ];
            DB::table('shops')->insert($shops);

             //Category Table
            $category =[
                ['id' => 1 ,'name' => 'Baby Product'],
                ['id' => 2 ,'name' => 'Detergent/Softener'],
                ['id' => 3 ,'name' => 'Drink'],
                ['id' => 4 ,'name' => 'Food'],
                ['id' => 5 ,'name' => 'Personal Care'],
            ];
            DB::table('category')->insert($category);


            //Product Table
            $products =[
                ['id' => 1 ,'category_id' => 1 ,'name' => 'Pet Pet Daypants'],
                ['id' => 2 ,'category_id' => 1 ,'name' => 'Huggies Dry'],
                ['id' => 3 ,'category_id' => 1 ,'name' => 'Johnson 500ml'],
                ['id' => 4 ,'category_id' => 5 ,'name' => 'May Body Wash 3x85gm'],
                ['id' => 5 ,'category_id' => 1 ,'name' => 'Carrie Junior Hair & Body 700ml'],
                ['id' => 6 ,'category_id' => 1 ,'name' => 'Syampu Bayi Johnson 800ml'],
            ];
            DB::table('products')->insert($products);

              //Photos Table
            $photos = [
                ['path' => 'sample.JPG','dimension'=>'300x400','imageable_id' => 1 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'300x400','imageable_id' => 2 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'300x400','imageable_id' => 3 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'300x400','imageable_id' => 4 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'300x400','imageable_id' => 5 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'300x400','imageable_id' => 6 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'400x700','imageable_id' => 1 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'400x700','imageable_id' => 2 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'400x700','imageable_id' => 3 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'400x700','imageable_id' => 4 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'400x700','imageable_id' => 5 ,'imageable_type' => 'App\Product'],
                ['path' => 'sample.JPG','dimension'=>'400x700','imageable_id' => 6 ,'imageable_type' => 'App\Product'],
                ['path' => 'tesco.jpg','dimension'=>'200x300','imageable_id' => 1 ,'imageable_type' => 'App\Shop'],
                ['path' => 'tesco.jpg','dimension'=>'200x300','imageable_id' => 2 ,'imageable_type' => 'App\Shop'],
                ['path' => 'tesco.jpg','dimension'=>'200x300','imageable_id' => 3 ,'imageable_type' => 'App\Shop'],
                ['path' => 'tesco.jpg','dimension'=>'200x300','imageable_id' => 4 ,'imageable_type' => 'App\Shop'],
                ['path' => 'tesco.jpg','dimension'=>'200x300','imageable_id' => 1 ,'imageable_type' => 'App\Shop'],
                ['path' => 'tesco.jpg','dimension'=>'200x300','imageable_id' => 2 ,'imageable_type' => 'App\Shop'],
                ['path' => 'tesco.jpg','dimension'=>'200x300','imageable_id' => 3 ,'imageable_type' => 'App\Shop'],
                ['path' => 'tesco.jpg','dimension'=>'200x300','imageable_id' => 4 ,'imageable_type' => 'App\Shop'],
                ['path' => 'category.jpeg','dimension'=>'400x700','imageable_id' => 1 ,'imageable_type' => 'App\Category'],
                ['path' => 'category.jpeg','dimension'=>'400x700','imageable_id' => 2 ,'imageable_type' => 'App\Category'],
                ['path' => 'category.jpeg','dimension'=>'400x700','imageable_id' => 3 ,'imageable_type' => 'App\Category'],
                ['path' => 'category.jpeg','dimension'=>'400x700','imageable_id' => 4 ,'imageable_type' => 'App\Category'],
                ['path' => 'category.jpeg','dimension'=>'400x700','imageable_id' => 5 ,'imageable_type' => 'App\Category'],
                ['path' => 'category.jpeg','dimension'=>'400x700','imageable_id' => 6 ,'imageable_type' => 'App\Category'],
            ];

            DB::table('photos')->insert($photos);

        for ($i=0; $i < 100000; $i++) { 
            
        
           

            

           

            //Product Promotion
            $startDate = date('Y-m-d' , mktime(0, 0, 0, date("m")  , date("d")-2, date("Y")));
            $endDate =  date('Y-m-d' , mktime(0, 0, 0, date("m")  , date("d")+5, date("Y")));

            $promotions =[
                ['start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 1 ,'shop_id' => 1 ],
                ['start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 2 ,'shop_id' => 2 ],
                ['start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 3 ,'shop_id' => 1 ],
                ['start' => $startDate,'end' => $endDate,'price_promo'=>40.30,'price_normal'=>43.30,'saving'=>3.66,'product_id' => 3 ,'shop_id' => 2 ],
                ['start' => $startDate,'end' => $endDate,'price_promo'=>35.30,'price_normal'=>45.30,'saving'=>10.00,'product_id' => 3 ,'shop_id' => 3 ],
            ];
            DB::table('promotions')->insert($promotions);

            //Product Promotion
            $startDate = date('Y-m-d' , mktime(0, 0, 0, date("m")  , date("d"), date("Y")));
            $endDate =  date('Y-m-d' , mktime(0, 0, 0, date("m")  , date("d")+5, date("Y")));

            $promotions =[
                ['start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 4 ,'shop_id' => 4 ],
                ['start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 5 ,'shop_id' => 2 ],
                ['start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 6 ,'shop_id' => 4 ],
            ];
            DB::table('promotions')->insert($promotions);

            //Product Promotion
            $startDate = date('Y-m-d' , mktime(0, 0, 0, date("m")  , date("d")-4, date("Y")));
            $endDate =  date('Y-m-d' , mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));

            $promotions =[
                ['start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 4 ,'shop_id' => 3 ],
                ['start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 5 ,'shop_id' => 3 ],
                ['start' => $startDate,'end' => $endDate,'price_promo'=>31.30,'price_normal'=>44.90,'saving'=>13.66,'product_id' => 6 ,'shop_id' => 3 ],
            ];
            DB::table('promotions')->insert($promotions);

          
        }
    }
}
