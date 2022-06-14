<?php

use App\Model\Pack;
use Illuminate\Database\Seeder;

class PacksTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packs = [
            [
                'price' => 1200,
                'state' => 'Italy',
                'city' => 'Rimini',
                'post_code' => '00117',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim optio nemo, laboriosam quisquam recusandae ratione dolore exercitationem dolor quas dolorem labore voluptatum voluptate explicabo porro ut quam sit maiores vel.',
                'image' => 'https://siviaggia.it/wp-content/uploads/sites/2/2020/10/rimini-fuori-stagione.jpg',
                'is_availlable' => true,
                'date' => '15/07/2022 - 20/07/2022',
            ],
            [
                'price' => 1800,
                'state' => 'Italy',
                'city' => 'Sardegna',
                'post_code' => '00117',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim optio nemo, laboriosam quisquam recusandae ratione dolore exercitationem dolor quas dolorem labore voluptatum voluptate explicabo porro ut quam sit maiores vel.',
                'image' => 'https://www.hotelpulicinu.com/images/rooms/exclusive-suite-vista-mare/1.jpg',
                'is_availlable' => false,
                'date' => '15/08/2022 - 20/08/2022',
            ],
            [
                'price' => 2800,
                'state' => 'Thailandia',
                'city' => 'Ko-samui',
                'post_code' => '00117',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim optio nemo, laboriosam quisquam recusandae ratione dolore exercitationem dolor quas dolorem labore voluptatum voluptate explicabo porro ut quam sit maiores vel.',
                'image' => 'https://images.lonelyplanetitalia.it/static/places/thailandia-206.jpg?q=90&p=2400%7C1350%7Cmax&s=6334bd2e375ea4f1dd037488a3632fde',
                'is_availlable' => true,
                'date' => '15/07/2022 - 20/07/2022',
            ],
            [
                'price' => 1400,
                'state' => 'Italy',
                'city' => 'Arezzo',
                'post_code' => '52100',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim optio nemo, laboriosam quisquam recusandae ratione dolore exercitationem dolor quas dolorem labore voluptatum voluptate explicabo porro ut quam sit maiores vel.',
                'image' => 'https://www.visitarezzo.com/media/k2/items/cache/grande_L.jpg',
                'is_availlable' => false,
                'date' => '15/08/2022 - 20/08/2022',
            ],

         ];
 
         foreach ($packs as $pack) {
             $new_pack = new Pack();
             $new_pack->price = $pack['price'];
             $new_pack->state = $pack['state'];
             $new_pack->city = $pack['city'];
             $new_pack->post_code = $pack['post_code'];
             $new_pack->description = $pack['description'];
             $new_pack->image = $pack['image'];
             $new_pack->is_availlable = $pack['is_availlable'];
             $new_pack->date = $pack['date'];
             $new_pack->save();
 
         }
    }
}
