<?php

use App\Models\Perfume;
use Illuminate\Database\Seeder;


class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_perfume =
            [
                [
                    "name" => "Chanel No. 5",
                    "brand" => "Chanel",
                    "category" => "Women's Fragrances",
                    "price" => 130.00,
                    "image" => "https://png2.cleanpng.com/sh/42ceb2d2b959cff8a4ab9931719fa790/L0KzQYm3U8AyN5R6fZH0aYP2gLBuTfdtaaR4RdR4dITvdX73hgJnfZ5qRdV1aYCwccP7TgBmepd6hdc2YnB3hL3sTcViQWhmTqJsN3Pmc7W7TsE4OWk6UKoBMUW0SYmBV8g5PGY2SaQ3cH7q/kisspng-glass-bottle-perfume-clip-art-perfume-bottle-5a97a60c7cccd4.1718588615198878845112.png"
                ],
                [
                    "name" => "Dolce & Gabbana Light Blue",
                    "brand" => "Dolce & Gabbana",
                    "category" => "Women's Fragrances",
                    "price" => 80.00,
                    "image" => "https://png.pngtree.com/png-clipart/20190520/original/pngtree-perfume-aroma-fragrance-essence-png-image_3866737.jpg"
                ],
                [
                    "name" => "Marc Jacobs Daisy",
                    "brand" => "Marc Jacobs",
                    "category" => "Women's Fragrances",
                    "price" => 106.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-fragrant-fragrance-png-image_6325956.jpg"
                ],
                [
                    "name" => "Tom Ford Black Orchid",
                    "brand" => "Tom Ford",
                    "category" => "Women's Fragrances",
                    "price" => 134.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-spray-png-image_6325957.jpg"
                ],
                [
                    "name" => "Dior J'adore",
                    "brand" => "Dior",
                    "category" => "Women's Fragrances",
                    "price" => 100.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-liquid-png-image_6325959.jpg"
                ],
                [
                    "name" => "Gucci Bloom",
                    "brand" => "Gucci",
                    "category" => "Women's Fragrances",
                    "price" => 97.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],

                [
                    "name" => "Armani Code",
                    "brand" => "Giorgio Armani",
                    "category" => "Men's Fragrances",
                    "price" => 85.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-red-cosmetics-png-image_6325963.jpg",

                ],
                [
                    "name" => "Bleu de Chanel",
                    "brand" => "Chanel",
                    "category" => "Men's Fragrances",
                    "price" => 120.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-excellent-incense-png-image_6325970.jpg",
                ],
                [
                    "name" => "Acqua di Giò",
                    "brand" => "Giorgio Armani",
                    "category" => "Men's Fragrances",
                    "price" => 85.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-pink-luxury-png-image_6325972.jpg",
                ],
                [
                    "name" => "Alien",
                    "brand" => "Thierry Mugler",
                    "category" => "Women's Fragrances",
                    "price" => 120.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-black-spray-png-image_6325973.png",
                ],
                [
                    "name" => "Aventus",
                    "brand" => "Creed",
                    "category" => "Men's Fragrances",
                    "price" => 435.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-pink-volatility-png-image_6325975.jpg",
                ],
                [
                    "name" => "Black Opium",
                    "brand" => "Yves Saint Laurent",
                    "category" => "Women's Fragrances",
                    "price" => 120.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-orange-translucent-png-image_6325977.jpg",
                ],
                [
                    "name" => "Boss Bottled",
                    "brand" => "Hugo Boss",
                    "category" => "Men's Fragrances",
                    "price" => 85.00,
                    "image" => "https://png2.cleanpng.com/sh/2744b098b7232cd1f31911d19644e66a/L0KzQYm3UcI5N5x5fZH0aYP2gLBuTgBmepd6hdc2YnB3hL3sTfVifV5pfZ9sb3zyd7BsTfVifV5pfZ99b3nvdcX7hb1xbaNrjd9uLXLyhMXzhb02aWdpfKZqM3O1Q4O4U743O2Q7UKM5MkG4QYi4VMczQWo8Uac9LoDxd1==/kisspng-perfume-bottle-eau-de-cologne-eau-de-toilette-perfume-bottle-5a6dd4a3c23213.6336810215171472997954.png",
                ],
                [
                    "name" => "Bvlgari Man",
                    "brand" => "Bvlgari",
                    "category" => "Men's Fragrances",
                    "price" => 94.00,
                    "image" => "https://png2.cleanpng.com/sh/42ceb2d2b959cff8a4ab9931719fa790/L0KzQYm3U8AyN5R6fZH0aYP2gLBuTfdtaaR4RdR4dITvdX73hgJnfZ5qRdV1aYCwccP7TgBmepd6hdc2YnB3hL3sTcViQWhmTqJsN3Pmc7W7TsE4OWk6UKoBMUW0SYmBV8g5PGY2SaQ3cH7q/kisspng-glass-bottle-perfume-clip-art-perfume-bottle-5a97a60c7cccd4.1718588615198878845112.png",
                ],
                [
                    "name" => "Acqua di Gio Profondo",
                    "brand" => "Giorgio Armani",
                    "category" => "Men's Fragrances",
                    "price" => 96.00,
                    "image" => "https://png.pngtree.com/png-clipart/20190520/original/pngtree-perfume-aroma-fragrance-essence-png-image_3866737.jpg"
                ],
                [
                    "name" => "Chanel Bleu de Chanel",
                    "brand" => "Chanel",
                    "category" => "Men's Fragrances",
                    "price" => 98.00,
                    "image" =>"https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg",
                ],
                [
                    "name" => "Dolce & Gabbana Light Blue",
                    "brand" => "Dolce & Gabbana",
                    "category" => "Women's Fragrances",
                    "price" => 102.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Tom Ford Black Orchid",
                    "brand" => "Tom Ford",
                    "category" => "Women's Fragrances",
                    "price" => 140.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Yves Saint Laurent Libre",
                    "brand" => "Yves Saint Laurent",
                    "category" => "Women's Fragrances",
                    "price" => 120.00,
                    "image" =>"https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg",
                ],
                [
                    "name" => "Versace Eros",
                    "brand" => "Versace",
                    "category" => "Men's Fragrances",
                    "price" => 80.00,
                    "image" => "https://png.pngtree.com/png-clipart/20190520/original/pngtree-perfume-aroma-fragrance-essence-png-image_3866737.jpg"
                ],
                [
                    "name" => "Paco Rabanne 1 Million",
                    "brand" => "Paco Rabanne",
                    "category" => "Men's Fragrances",
                    "price" => 92.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-pink-volatility-png-image_6325975.jpg",
                ],
                [
                    "name" => "Calvin Klein Euphoria",
                    "brand" => "Calvin Klein",
                    "category" => "Women's Fragrances",
                    "price" => 79.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Marc Jacobs Daisy",
                    "brand" => "Marc Jacobs",
                    "category" => "Women's Fragrances",
                    "price" => 86.00,
                    "image" =>"https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Gucci Bloom",
                    "brand" => "Gucci",
                    "category" => "Women's Fragrances",
                    "price" => 130.00,
                    "image" => "https://png.pngtree.com/png-clipart/20190520/original/pngtree-perfume-aroma-fragrance-essence-png-image_3866737.jpg"
                ],
                [
                    "name" => "Montblanc Explorer",
                    "brand" => "Montblanc",
                    "category" => "Men's Fragrances",
                    "price" => 78.00,
                    "image" => "https://png.pngtree.com/png-clipart/20190520/original/pngtree-perfume-aroma-fragrance-essence-png-image_3866737.jpg"
                ],
                [
                    "name" => "Chloé Eau de Parfum",
                    "brand" => "Chloé",
                    "category" => "Women's Fragrances",
                    "price" => 105.00,
                    "image" => "https://cdn.parfumdreams.de/Img/Art/7/DIOR-Jadore-Eau-de-Parfum-Spray-16370x2_93.jpg",
                ],
                [
                    "name" => "Versace Eros",
                    "brand" => "Versace",
                    "category" => "Men's Fragrances",
                    "price" => 80.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-pink-volatility-png-image_6325975.jpg",
                ],
                [
                    "name" => "Dior Sauvage",
                    "brand" => "Dior",
                    "category" => "Men's Fragrances",
                    "price" => 95.00,
                    "image" =>"https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Bleu de Chanel Parfum",
                    "brand" => "Chanel",
                    "category" => "Men's Fragrances",
                    "price" => 120.00,
                    "image" =>"https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Creed Aventus",
                    "brand" => "Creed",
                    "category" => "Men's Fragrances",
                    "price" => 435.00,
                    "image" => "https://www.essenzial.it/wp-content/uploads/2019/10/Profumo-ispirato-a-DOLCE-GABBANA-POUR-HOMME-DG-uomo-N%C2%B07.png"
                ],
                [
                    "name" => "Jo Malone Wood Sage & Sea Salt",
                    "brand" => "Jo Malone",
                    "category" => "Women's Fragrances",
                    "price" => 72.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Marc Jacobs Daisy",
                    "brand" => "Marc Jacobs",
                    "category" => "Women's Fragrances",
                    "price" => 96.00,
                    "image" => "https://banner2.cleanpng.com/20180501/ijq/kisspng-perfume-avon-products-eau-de-toilette-absolute-sho-5ae903f35e1b89.9024028315252203393855.jpg"
                ],
                [
                    "name" => "Gucci Bloom",
                    "brand" => "Gucci",
                    "category" => "Women's Fragrances",
                    "price" => 130.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-pink-volatility-png-image_6325975.jpg",
                ],
                [
                    "name" => "Creed Aventus",
                    "brand" => "Creed",
                    "category" => "Men's Fragrances",
                    "price" => 435.00,
                    "image" => "https://banner2.cleanpng.com/20180627/wtt/kisspng-perfume-miss-dior-5b341e2d055ec6.660685561530142253022.jpg",
                ],
                [
                    "name" => "Dior Sauvage",
                    "brand" => "Dior",
                    "category" => "Men's Fragrances",
                    "price" => 108.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Bleu de Chanel Parfum",
                    "brand" => "Chanel",
                    "category" => "Men's Fragrances",
                    "price" => 138.00,
                    "image" => "https://cdn.parfumdreams.de/Img/Art/7/DIOR-Jadore-Eau-de-Parfum-Spray-16370x2_93.jpg"
                ],
                [
                    "name" => "Jo Malone London Wood Sage & Sea Salt",
                    "brand" => "Jo Malone",
                    "category" => "Women's Fragrances",
                    "price" => 142.00,
                    "image" => "https://banner2.cleanpng.com/20180501/ijq/kisspng-perfume-avon-products-eau-de-toilette-absolute-sho-5ae903f35e1b89.9024028315252203393855.jpg"
                ],
                [
                    "name" => "Byredo Gypsy Water",
                    "brand" => "Byredo",
                    "category" => "Unisex Fragrances",
                    "price" => 190.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Tom Ford Oud Wood",
                    "brand" => "Tom Ford",
                    "category" => "Unisex Fragrances",
                    "price" => 240.00,
                    "image" =>"https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Jean Paul Gaultier Le Male",
                    "brand" => "Jean Paul Gaultier",
                    "category" => "Men's Fragrances",
                    "price" => 88.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-pink-volatility-png-image_6325975.jpg",
                ],
                [
                    "name" => "Paco Rabanne 1 Million",
                    "brand" => "Paco Rabanne",
                    "category" => "Men's Fragrances",
                    "price" => 92.00,
                    "image" => "https://banner2.cleanpng.com/20180627/wtt/kisspng-perfume-miss-dior-5b341e2d055ec6.660685561530142253022.jpg",
                ],
                [
                    "name" => "Dior Sauvage",
                    "brand" => "Dior",
                    "category" => "Men's Fragrances",
                    "price" => 102.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Calvin Klein Euphoria",
                    "brand" => "Calvin Klein",
                    "category" => "Women's Fragrances",
                    "price" => 88.00,
                    "image" => "https://png.pngtree.com/png-clipart/20190520/original/pngtree-perfume-aroma-fragrance-essence-png-image_3866737.jpg"
                ],
                [

                    "name" => "Chloe Nomade",
                    "brand" => "Chloe",
                    "category" => "Women's Fragrances",
                    "price" => 132.00,
                    "image" =>"https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],
                [
                    "name" => "Marc Jacobs Daisy",
                    "brand" => "Marc Jacobs",
                    "category" => "Women's Fragrances",
                    "price" => 86.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-pink-volatility-png-image_6325975.jpg",
                ],
                [
                    "name" => "Chanel No. 5",
                    "brand" => "Chanel",
                    "category" => "Women's Fragrances",
                    "price" => 130.00,
                    "image" => "https://png2.cleanpng.com/sh/42ceb2d2b959cff8a4ab9931719fa790/L0KzQYm3U8AyN5R6fZH0aYP2gLBuTfdtaaR4RdR4dITvdX73hgJnfZ5qRdV1aYCwccP7TgBmepd6hdc2YnB3hL3sTcViQWhmTqJsN3Pmc7W7TsE4OWk6UKoBMUW0SYmBV8g5PGY2SaQ3cH7q/kisspng-glass-bottle-perfume-clip-art-perfume-bottle-5a97a60c7cccd4.1718588615198878845112.png"
                ],
                [
                    "name" => "Dolce & Gabbana Light Blue",
                    "brand" => "Dolce & Gabbana",
                    "category" => "Women's Fragrances",
                    "price" => 80.00,
                    "image" => "https://png.pngtree.com/png-clipart/20190520/original/pngtree-perfume-aroma-fragrance-essence-png-image_3866737.jpg"
                ],
                [
                    "name" => "Marc Jacobs Daisy",
                    "brand" => "Marc Jacobs",
                    "category" => "Women's Fragrances",
                    "price" => 106.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-fragrant-fragrance-png-image_6325956.jpg"
                ],
                [
                    "name" => "Tom Ford Black Orchid",
                    "brand" => "Tom Ford",
                    "category" => "Women's Fragrances",
                    "price" => 134.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-spray-png-image_6325957.jpg"
                ],
                [
                    "name" => "Dior J'adore",
                    "brand" => "Dior",
                    "category" => "Women's Fragrances",
                    "price" => 100.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-liquid-png-image_6325959.jpg"
                ],
                [
                    "name" => "Gucci Bloom",
                    "brand" => "Gucci",
                    "category" => "Women's Fragrances",
                    "price" => 97.00,
                    "image" => "https://png.pngtree.com/png-clipart/20210523/original/pngtree-perfume-white-transparent-png-image_6325961.jpg"
                ],

            ];

        foreach ($array_perfume as $elem) {
            $new_perfume = new Perfume();
            $new_perfume->name = $elem['name'];
            $new_perfume->brand = $elem['brand'];
            $new_perfume->category = $elem['category'];
            $new_perfume->price = $elem['price'];
            $new_perfume->image = $elem['image'];
            $new_perfume->save();
        };
    }
}
