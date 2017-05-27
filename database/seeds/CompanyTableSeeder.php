<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('companies')->delete();

        $companies=array(

            array(
                'name'=>'Nestle',
                'description'=>'Nestle S.A. is a Swiss transnational food and drink company headquartered in Vevey, Vaud, Switzerland. It has been the largest food company in the world, measured by revenues and other metrics, for 2014, 2015, and 2016.',
                'contact'=>'lkynd0@yale.edu',
                'rating'=>2.82,
                'raters'=>193,
                'faved'=>96,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'PepsiCo',
                'description'=>'PepsiCo, Inc. is an American multinational food, snack, and beverage corporation headquartered in Purchase, New York. PepsiCo has interests in the manufacturing, marketing, and distribution of grain-based snack foods, beverages, and other products.',
                'contact'=>'ncollip1@diigo.com',
                'rating'=>2.87,
                'raters'=>147,
                'faved'=>49,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Anheuser-Busch InBev',
                'description'=>'Anheuser-Busch InBev SA/NV is a multinational beverage and brewing company with global headquarters in Leuven, Belgium.',
                'contact'=>'ofollan3@goo.ne.jp',
                'rating'=>1.13,
                'raters'=>177,
                'faved'=>120,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'The Coca-Cola Company',
                'description'=>'The Coca-Cola Company, which is headquartered in Atlanta, Georgia, but incorporated in Wilmington, Delaware, is an American multinational beverage corporation, and manufacturer, retailer, and marketer of nonalcoholic beverage concentrates and syrups.',
                'contact'=>'kmontes4@opera.com',
                'rating'=>4.85,
                'raters'=>204,
                'faved'=>77,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Mars',
                'description'=>'Mars is an American global manufacturer of confectionery, pet food, and other food products and a provider of animal care services, with US$33 billion in annual sales in 2015, and is ranked as the 6th largest privately held company in the United States by Forbes. Headquartered in McLean, unincorporated Fairfax County, Virginia, US, the company is entirely owned by the Mars family. ',
                'contact'=>'kmontes4@opera.com',
                'rating'=>2.7,
                'raters'=>172,
                'faved'=>52,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Unilever',
                'description'=>'Unilever is a Dutch-British transnational consumer goods company co-headquartered in Rotterdam, Netherlands and London, United Kingdom. Its products include food, beverages, cleaning agents and personal care products.',
                'contact'=>'ctipling5@phoca.cz',
                'rating'=>2.48,
                'raters'=>244,
                'faved'=>59,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Ferrero',
                'description'=>'Ferrero SpA is an Italian manufacturer of branded chocolate and confectionery products and it is the third biggest chocolate producer and confectionery company in the world.parmalat',
                'contact'=>'lortzen6@themeforest.net',
                'rating'=>3.82,
                'raters'=>95,
                'faved'=>48,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Parmalat',
                'description'=>'Parmalat SpA is a multinational Italian dairy and food corporation. Having become the leading global company in the production of long-life milk using the ultra-high-temperature (UHT) process, the company collapsed in 2003 with a €14 billion ($20bn; £13bn) hole in its accounts in what remains Europe`s biggest bankruptcy',
                'contact'=>'glancashire7@shutterfly.com',
                'rating'=>3.06,
                'raters'=>198,
                'faved'=>44,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Oetker Group',
                'description'=>'Dr. Oetker is a German company that produces baking powder, cake mixes, yogurts, frozen pizza, pudding, cake decoration, cornflakes and various other products.',
                'contact'=>'rspadari8@slashdot.org',
                'rating'=>2.24,
                'raters'=>125,
                'faved'=>110,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Lipton',
                'description'=>'Lipton is a brand of tea, owned by the company Unilever. Lipton was also a supermarket chain in the United Kingdom before it was sold off to Argyll Foods, to allow the company to focus solely on tea. The company is named after its founder Thomas Lipton. The Lipton ready-to-drink beverages are sold by Pepsi Lipton International, a company jointly owned by Unilever and PepsiCo.',
                'contact'=>'aspinney9@census.gov',
                'rating'=>3.61,
                'raters'=>188,
                'faved'=>104,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Nestea',
                'description'=>'Nestea is a brand of iced tea owned by Nestlé, manufactured by Coca-Cola and distributed by Nestle`s beverage department in the United States and by Beverage Partners Worldwide (BPW), a joint venture between The Coca-Cola Company and Nestle, in the rest of the world. It competes with Unilever/PepsiCo`s Lipton Iced Tea and Brisk. ',
                'contact'=>'ufrancomba@wsj.com',
                'rating'=>4.56,
                'raters'=>244,
                'faved'=>86,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Maggi',
                'description'=>'Maggi is an international brand of seasonings, instant soups, and noodles that originated in Switzerland in late 19th century. The brand was acquired by Nestlé in 1947.',
                'contact'=>'dstathersb@example.com',
                'rating'=>4.6,
                'raters'=>222,
                'faved'=>68,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Milka',
                'description'=>'Milka is a traditional brand of chocolate confection which originated in Switzerland in 1901 and has been manufactured internationally by the US confectionery company Mondelēz International (formerly known as Kraft Foods) since 1990. For more than 100 years Milka has been primarily produced in Lörrach, Germany, producing about 140,000 tonnes of chocolate in 2012.',
                'contact'=>'rdunhamc@wsj.com',
                'rating'=>2.01,
                'raters'=>113,
                'faved'=>50,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Pringles',
                'description'=>'Pringles is an American brand of potato and wheat-based stackable snack chips owned by Kellogg`s. Originally marketed as "Pringles Newfangled Potato Chips", Pringles are sold in more than 140 countries, and it was the fourth most popular snack brand after Lay`s, Doritos and Cheetos in 2012, with 2.2% market share globally, compared to Lay`s share of 6.7%.',
                'contact'=>'pkasperd@wired.com',
                'rating'=>4.4,
                'raters'=>205,
                'faved'=>119,
                'parent'=>0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )
        );
        DB::table('companies')->insert($companies);
    }

}
