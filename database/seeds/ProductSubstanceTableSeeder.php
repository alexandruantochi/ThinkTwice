<?php

use Illuminate\Database\Seeder;

class ProductSubstanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //array('product_id'=>,'substance_id'=>),
    public function run()
    {
        DB::table('product_substance')->delete();
        $p_substances=array(
            array('product_id'=>1,'substance_id'=>1),
            array('product_id'=>1,'substance_id'=>2),
            array('product_id'=>1,'substance_id'=>3),
            array('product_id'=>1,'substance_id'=>4),
            array('product_id'=>1,'substance_id'=>5),
            array('product_id'=>2,'substance_id'=>6),
            array('product_id'=>2,'substance_id'=>7),
            array('product_id'=>2,'substance_id'=>8),
            array('product_id'=>2,'substance_id'=>9),
            array('product_id'=>2,'substance_id'=>10),
            array('product_id'=>2,'substance_id'=>11),
            array('product_id'=>2,'substance_id'=>12),
            array('product_id'=>2,'substance_id'=>13),
            array('product_id'=>2,'substance_id'=>2),
            array('product_id'=>2,'substance_id'=>3),
            array('product_id'=>3,'substance_id'=>14),
            array('product_id'=>3,'substance_id'=>15),
            array('product_id'=>3,'substance_id'=>16),
            array('product_id'=>3,'substance_id'=>17),
            array('product_id'=>3,'substance_id'=>18),
            array('product_id'=>3,'substance_id'=>19),
            array('product_id'=>3,'substance_id'=>20),
            array('product_id'=>3,'substance_id'=>21),
            array('product_id'=>3,'substance_id'=>22),
            array('product_id'=>3,'substance_id'=>23),
            array('product_id'=>3,'substance_id'=>11),
            array('product_id'=>3,'substance_id'=>4),
            array('product_id'=>3,'substance_id'=>2),
            array('product_id'=>4,'substance_id'=>2),
            array('product_id'=>4,'substance_id'=>4),
            array('product_id'=>4,'substance_id'=>20),
            array('product_id'=>4,'substance_id'=>25),
            array('product_id'=>4,'substance_id'=>24),
            array('product_id'=>4,'substance_id'=>26),
            array('product_id'=>5,'substance_id'=>2),
            array('product_id'=>5,'substance_id'=>4),
            array('product_id'=>5,'substance_id'=>20),
            array('product_id'=>5,'substance_id'=>26),
            array('product_id'=>5,'substance_id'=>28),

            array('product_id'=>7,'substance_id'=>2),
            array('product_id'=>7,'substance_id'=>29),
            array('product_id'=>7,'substance_id'=>30),
            array('product_id'=>7,'substance_id'=>31),

            array('product_id'=>8,'substance_id'=>2),
            array('product_id'=>8,'substance_id'=>29),
            array('product_id'=>8,'substance_id'=>30),
            array('product_id'=>8,'substance_id'=>31),

            array('product_id'=>9,'substance_id'=>2),
            array('product_id'=>9,'substance_id'=>29),
            array('product_id'=>9,'substance_id'=>30),
            array('product_id'=>9,'substance_id'=>31),

            array('product_id'=>13,'substance_id'=>20),
            array('product_id'=>13,'substance_id'=>11),
            array('product_id'=>13,'substance_id'=>32),
            array('product_id'=>13,'substance_id'=>33),
            array('product_id'=>13,'substance_id'=>34),
            array('product_id'=>13,'substance_id'=>35),
            array('product_id'=>13,'substance_id'=>36),
            array('product_id'=>13,'substance_id'=>37),

            array('product_id'=>16,'substance_id'=>38),
            array('product_id'=>16,'substance_id'=>39),
            array('product_id'=>16,'substance_id'=>40),
            array('product_id'=>16,'substance_id'=>41),
            array('product_id'=>16,'substance_id'=>42),
            array('product_id'=>16,'substance_id'=>43),
            array('product_id'=>16,'substance_id'=>44),
            array('product_id'=>16,'substance_id'=>2),

            array('product_id'=>20,'substance_id'=>45),
            array('product_id'=>20,'substance_id'=>46),
            array('product_id'=>20,'substance_id'=>47),
            array('product_id'=>20,'substance_id'=>48),
            array('product_id'=>20,'substance_id'=>20),

            array('product_id'=>34,'substance_id'=>49),
            array('product_id'=>34,'substance_id'=>50),
            array('product_id'=>34,'substance_id'=>51),
            array('product_id'=>34,'substance_id'=>52),
            array('product_id'=>34,'substance_id'=>53),
            array('product_id'=>34,'substance_id'=>54),
            array('product_id'=>34,'substance_id'=>55),
            array('product_id'=>34,'substance_id'=>56)
        );
        DB::table('product_substance')->insert($p_substances);
    }
}
