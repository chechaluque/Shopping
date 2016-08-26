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
        $product = new \App\Product([
            'imagePath'=> 'http://hwcdn.allmusic.com/cms/3407/blog_cradle.jpg',
            'title'=> 'Creadle of Filth',
            'description'=> 'Rock Band of Death Metal.',
            'price'=> 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=> 'http://hwcdn.allmusic.com/cms/3407/blog_cradle.jpg',
            'title'=> 'Creadle of Filth',
            'description'=> 'Rock Band of Death Metal.',
            'price'=> 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=> 'http://hwcdn.allmusic.com/cms/3407/blog_cradle.jpg',
            'title'=> 'Creadle of Filth',
            'description'=> 'Rock Band of Death Metal.',
            'price'=> 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=> 'http://hwcdn.allmusic.com/cms/3407/blog_cradle.jpg',
            'title'=> 'Creadle of Filth',
            'description'=> 'Rock Band of Death Metal.',
            'price'=> 15
        ]);
        $product->save();
    }
}
