<?php


class ProductsTableSeeder extends Seeder {

    public function run(){
        DB::table('products')->delete();

        $products=array(

            array(
                'name'=>'Coca-Cola can',
                'category'=>'bevarages',
                'company_id'=>1,
                'description'=>'best coca cola can ever.',
                'price'=>2,
                'UPC'=>12345678,
                'product_image_path'=>'c:\images\image'
            ),
            array(
                'name'=>'Coca-Cola can',
                'category'=>'bevarages',
                'company_id'=>1,
                'description'=>'best coca cola can ever.',
                'price'=>2,
                'UPC'=>12345678,
                'product_image_path'=>'c:\images\image'
            )
        );
        DB::table('products')->insert($products);
    }

}