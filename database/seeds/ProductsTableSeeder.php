<?php
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {

    public function run(){
        DB::table('products')->delete();

        $products=array(
            array(
                'name'=>'DICED GREEN CHILES',
                'category'=>'food',
                'company_id'=>1,
                'price'=>1,
                'UPC'=>'039000010214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'NACHO CHEESE SAUCE',
                'category'=>'food',
                'company_id'=>1,
                'price'=>3,
                'UPC'=>'039000060226',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'HOMESTYLE SALSA',
                'category'=>'food',
                'company_id'=>1,
                'price'=>2,
                'UPC'=>'039000567565',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'PEPSI REAL SUGAR',
                'category'=>'beverages',
                'company_id'=>2,
                'price'=>3,
                'UPC'=>'039000567565',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'MTN DEW REAL SUGAR',
                'category'=>'beverages',
                'company_id'=>2,
                'price'=>2,
                'UPC'=>'039001567565',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'ROCKSTAR',
                'category'=>'beverages',
                'company_id'=>2,
                'price'=>1,
                'UPC'=>'039012567565',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Cerveza Corona',
                'category'=>'beverages',
                'company_id'=>3,
                'price'=>1,
                'UPC'=>'042173498847',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Beck\'s',
                'category'=>'beverages',
                'company_id'=>3,
                'price'=>2,
                'UPC'=>'042565198847',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Stella Artois',
                'category'=>'beverages',
                'company_id'=>3,
                'price'=>2,
                'UPC'=>'042178198847',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Diet Coke',
                'category'=>'beverages',
                'company_id'=>4,
                'price'=>1,
                'UPC'=>'039471567565',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Fanta',
                'category'=>'beverages',
                'company_id'=>4,
                'price'=>3,
                'UPC'=>'039576567565',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Coca-Cola Life',
                'category'=>'beverages',
                'company_id'=>4,
                'price'=>2,
                'UPC'=>'039128567565',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Snickers',
                'category'=>'food',
                'company_id'=>5,
                'price'=>2,
                'UPC'=>'039471194565',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Twix',
                'category'=>'food',
                'company_id'=>5,
                'price'=>4,
                'UPC'=>'039471672565',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Amicelli',
                'category'=>'food',
                'company_id'=>5,
                'price'=>3,
                'UPC'=>'039471437123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Dove Intensive Repair Shampoo',
                'category'=>'beauty',
                'company_id'=>6,
                'price'=>6,
                'UPC'=>'039873437123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Dove White Beauty Bar',
                'category'=>'beauty',
                'company_id'=>6,
                'price'=>4,
                'UPC'=>'039471431233',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Powder Soft Dry Spray Antiperspirant',
                'category'=>'beauty',
                'company_id'=>6,
                'price'=>3,
                'UPC'=>'039471123123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Ferrero Rocher',
                'category'=>'food',
                'company_id'=>7,
                'price'=>3,
                'UPC'=>'0394711231937',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Jar of Nutella',
                'category'=>'food',
                'company_id'=>7,
                'price'=>10,
                'UPC'=>'039471137123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Kinder Bueno',
                'category'=>'food',
                'company_id'=>7,
                'price'=>2,
                'UPC'=>'039271123123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Pauls Full Cream Milk',
                'category'=>'beverages',
                'company_id'=>8,
                'price'=>5,
                'UPC'=>'039058410762',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'ICE-CREAM',
                'category'=>'food',
                'company_id'=>8,
                'price'=>2,
                'UPC'=>'039123012314',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'BUTTER',
                'category'=>'food',
                'company_id'=>8,
                'price'=>12,
                'UPC'=>'039453460214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Baking powder',
                'category'=>'food',
                'company_id'=>9,
                'price'=>15,
                'UPC'=>'0390394010214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Creme caramel',
                'category'=>'food',
                'company_id'=>9,
                'price'=>6,
                'UPC'=>'039485010214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Vitalis',
                'category'=>'food',
                'company_id'=>9,
                'price'=>16,
                'UPC'=>'0375039410214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Grean tea',
                'category'=>'beverages',
                'company_id'=>10,
                'price'=>4,
                'UPC'=>'039159610214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Lipton tea drink',
                'category'=>'beverages',
                'company_id'=>10,
                'price'=>5,
                'UPC'=>'039367210214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Lipton tea drink lemon flavor',
                'category'=>'beverages',
                'company_id'=>10,
                'price'=>3,
                'UPC'=>'039599231024',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Nestea Lemon Tea Drinkk',
                'category'=>'beverages',
                'company_id'=>11,
                'price'=>2,
                'UPC'=>'0390698010214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Maggi Ramen Noodles',
                'category'=>'food',
                'company_id'=>12,
                'price'=>3,
                'UPC'=>'0390375310214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Alpine Milk - Milk-chocolate bar',
                'category'=>'food',
                'company_id'=>13,
                'price'=>6,
                'UPC'=>'039195310214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Pringles Tangy Buffalo Wing',
                'category'=>'food',
                'company_id'=>14,
                'price'=>7,
                'UPC'=>'039369810214',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )

        );
        DB::table('products')->insert($products);
    }

}