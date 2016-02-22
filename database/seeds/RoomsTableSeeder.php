<?php  
use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('rooms')->delete();

        Room::create(['name' => '#1',
        			  'type' => Room::TYPE_AFFORDABLE,
        			  'pax'  => 5,
        			  'availability' => Room::AVAILABILITY_VACANT,
        			  'price' => Room::PRICE_TYPE_AFFORDABLE]);

         Room::create(['name' => '#2',
        			  'type' => Room::TYPE_AFFORDABLE,
        			  'pax'  => 5,
        			  'availability' => Room::AVAILABILITY_VACANT,
        			  'price' => Room::PRICE_TYPE_AFFORDABLE]);

         $dummy = new Room;
         $dummy->name='#3';
         $dummy->type=Room::TYPE_AFFORDABLE;
         $dummy->pax=1;
         $dummy->availability=Room::AVAILABILITY_OCCUPIED;
         $dummy->price=Room::PRICE_TYPE_VIP;

         $dummy->save();
    }

}