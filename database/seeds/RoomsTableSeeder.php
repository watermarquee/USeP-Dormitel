<?php  
use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('rooms')->delete();

        //Small Room
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

        Room::create(['name' => '#3',
                      'type' => Room::TYPE_AFFORDABLE,
                      'pax'  => 5,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_AFFORDABLE]);

        Room::create(['name' => '#4',
                      'type' => Room::TYPE_AFFORDABLE,
                      'pax'  => 5,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_AFFORDABLE]);
        //End Small Room

        //Big Room
        Room::create(['name' => '#5',
                      'type' => Room::TYPE_MIDDLE_CLASS,
                      'pax'  => 10,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

        Room::create(['name' => '#6',
                      'type' => Room::TYPE_MIDDLE_CLASS,
                      'pax'  => 10,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

        Room::create(['name' => '#7',
                      'type' => Room::TYPE_MIDDLE_CLASS,
                      'pax'  => 10,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

        Room::create(['name' => '#8',
                      'type' => Room::TYPE_MIDDLE_CLASS,
                      'pax'  => 10,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

        Room::create(['name' => '#9',
                      'type' => Room::TYPE_MIDDLE_CLASS,
                      'pax'  => 10,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

        Room::create(['name' => '#10',
                      'type' => Room::TYPE_MIDDLE_CLASS,
                      'pax'  => 10,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_AFFORDABLE]);

        Room::create(['name' => '#11',
                      'type' => Room::TYPE_MIDDLE_CLASS,
                      'pax'  => 10,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

        Room::create(['name' => '#12',
                      'type' => Room::TYPE_MIDDLE_CLASS,
                      'pax'  => 5,
                      'availability' => Room::AVAILABILITY_VACANT,
                      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);
        //End Big Room
    }

}