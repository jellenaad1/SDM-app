<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
           
            [
                'name'=>'Set - 5 gumenih tračica',
                'category'=>'Trake',
                'description'=>'Gumene trake za vežbanje jačine od 5kg, 8kg, 10 kg, 14kg i 18kg',
                'price'=>'750',
                'photo'=>"https://vgmagaza.rs/wp-content/uploads/2021/03/viber_slika_2021-03-30_09-47-21ll-250x250.jpg"
            ],
            [
                'name'=>'Žuta guma za crossfit i power lifting',
                'category'=>'Gume',
                'description'=>'6.4mm - 7kg',
                'price'=>'500',
                'photo'=>"https://gymbeam.rs/pub/media/catalog/product/cache/4fbedafc795a101de8e47bca4d177c93/y/a/yakima-powe-band-yellow.jpg"
            ],
            [
                'name'=>'Crvena guma za crossfit i power lifting',
                'category'=>'Gume',
                'description'=>'13mm - 20kg',
                'price'=>'750',
                'photo'=>"https://sportagram.rs/image/cache/catalog/gumene%20trake/guma%20crvena-500x500.jpg"
            ],
            [
                'name'=>'Crna guma za crossfit i power lifting',
                'category'=>'Gume',
                'description'=>'22mm - 30kg',
                'price'=>'1100',
                'photo'=>"https://www.sporteh.rs/Upload/Shops/1/Products/5140/0/c2aabb26-92c7-4802-be29-a86470cf9e9f-free-shipping-25-65-lbs-power-crossfit-strength-training-equipments-latex-loop-super-rubber-bands-fitness.jpg"
            ],
            [
                'name'=>'Ljubičasta guma za crossfit i power lifting',
                'category'=>'Gume',
                'description'=>'32mm - 45kg',
                'price'=>'1500',
                'photo'=>"https://www.tuber.rs/wp-content/uploads/2016/09/Super-latex-band-32mm-ljubicasta.jpg"
            ],
            [
                'name'=>'Zelena guma za crossfit i power lifting',
                'category'=>'Gume',
                'description'=>'45mm - 75kg',
                'price'=>'2000',
                'photo'=>"https://www.sporteh.rs/Upload/Shops/1/Products/5142/0/Original/d5643a57-31fb-4406-bac5-b602efccf216-free-shipping-50-120-lbs-latex-rubber-elastic-resistance-exercise-rubber-bands-crossfit-super-band-fitness.jpg"
            ]
            ,
            [
                'name'=>'Narandžasta guma za crossfit i power lifting',
                'category'=>'Gume',
                'description'=>'83mm - 105kg',
                'price'=>'2600',
                'photo'=>"https://www.tuber.rs/wp-content/uploads/2016/09/Super-latex-band-83mm-narandzasta.jpg"
            ]
        
        
        ]);
    }
}
