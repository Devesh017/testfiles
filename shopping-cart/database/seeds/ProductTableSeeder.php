<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=new \App\Product([
            'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title'=>'Harry Potter',
            'description'=>'Fiction Book',
            'price'=>22
        ]);
        $product->save();


        $product=new \App\Product([
            'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title'=>'Harry Potter',
            'description'=>'Fiction Book',
            'price'=>22
        ]);
        $product->save();

        $product=new \App\Product([
            'imagePath'=>'http://thenortheasttoday.com/wp-content/uploads/2015/08/Guwahati-girls.jpg',
            'title'=>'north east',
            'description'=>'Fiction Book',
            'price'=>29
        ]);
        $product->save();

        $product=new \App\Product([
            'imagePath'=>'http://2.bp.blogspot.com/_Mbr2Vq674mA/R207x-uTo5I/AAAAAAAAAJY/ucpu1JzVzpc/s320/Tiger-2.jpg',
            'title'=>'Tiger attack',
            'description'=>'real story',
            'price'=>34
        ]);
        $product->save();

        $product=new \App\Product([
            'imagePath'=>'http://www.brahmaputragroup.com/wp-content/uploads/2014/01/122.jpg',
            'title'=>'guwahati mall',
            'description'=>'city',
            'price'=>262
        ]);
        $product->save();

        $product=new \App\Product([
            'imagePath'=>'https://i.ytimg.com/vi/4gOVIg6i89A/maxresdefault.jpg',
            'title'=>'Fine dine',
            'description'=>'Eat',
            'price'=>256
        ]);
        $product->save();


    }
}
