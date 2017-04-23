<?php

namespace Tests\TestModels;
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23-Apr-17
 * Time: 20:09
 */
class CompanyModel
{

    /** this is a test model for a company which mimics
     * a PDO retrieved from the database;
     * the final data will be saved in a database*/

    public $id;
    public $name;
    public $description;
    public $mother;
    public $productList;
    public $rating;
    public $contact;
    public $category;


    public function __construct($id, $name, $description, $mother, $productList, $rating, $contact, $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->mother = $mother;
        $this->productList = $productList;
        $this->ratig = $rating;
        $this->contact = $contact;
        $this->category = $category;
    }

    public static function generateTestModels()
    {

        $modelList = [];
        $id = [0, 1, 2, 3, 4, 5];
        $name = ['Coca-Cola', 'P&G', 'Loreal', 'Monsato', 'USSTeel', 'Google'];
        $description = ['Coca-Cola (often referred to simply as Coke) is a carbonated soft drink[1] produced by The Coca-Cola Company. Originally intended as a patent medicine, it was invented in the late 19th century by John Pemberton and was bought out by businessman Asa Griggs Candler, whose marketing tactics led Coca-Cola to its dominance of the world soft-drink market throughout the 20th century.',
            'Procter & Gamble Co., also known as P&G, is an American consumer goods corporation headquartered in downtown Cincinnati, Ohio, United States of America, founded in 1837 by William Procter and James Gamble.',
            'L\'Oréal S.A. is a French cosmetics company headquartered in Clichy, Hauts-de-Seine with a registered office in Paris.',
            'Monsanto Company is a publicly traded American multinational agrochemical and agricultural biotechnology corporation. It is headquartered in Creve Coeur, Greater St. Louis, Missouri.',
            'The United States Steel Corporation, more commonly known as U.S. Steel, is an American integrated steel producer with major production operations in the United States, Canada, and Central Europe.',
            'Google is an American multinational technology company specializing in Internet-related services and products. These include online advertising technologies, search, cloud computing, software, and hardware.'];
        $mother = ['P&G', 'N/A', 'Body Shop', 'CIA', 'N/A', 'Alphabet'];
        $productList = ['product1', 'product1', 'product3'];
        $rating = [4.25, 3.4, 4.5, 2.2, 4.5, 4, 72];
        $contact = ['coca-cola@gmail.com', 'pandg@gmail.com', 'loreal@gmail.com', 'monsato@gmail.com', 'ussteel@gmail.com', 'google@gmail.com'];
        $category = ['Drinks', 'Consumer Goods', 'Cosmetics', 'Farming', 'Industrial Goods', 'IT'];

        for ($i = 0; $i < sizeof($id); $i++) {
            $company = new CompanyModel($id[$i], $name[$i], $description[$i], $mother[$i], $productList, $rating[$i], $contact[$i], $category[$i]);
            array_push($modelList, $company);
        }

        return $modelList;
    }

}