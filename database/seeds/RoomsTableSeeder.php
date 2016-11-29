<?php
use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder {

  public function run()
  {
    DB::table('rooms')->delete();

    //Small Room
    Room::create(['name' => '#101',
      'type' => Room::TYPE_AFFORDABLE,
      'pax'  => 5,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_AFFORDABLE]);

    Room::create(['name' => '#102',
      'type' => Room::TYPE_AFFORDABLE,
      'pax'  => 5,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_AFFORDABLE]);

    Room::create(['name' => '#103',
      'type' => Room::TYPE_AFFORDABLE,
      'pax'  => 5,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_AFFORDABLE]);

    Room::create(['name' => '#104',
      'type' => Room::TYPE_AFFORDABLE,
      'pax'  => 5,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_AFFORDABLE]);
    //End Small Room

    //Big Room
    Room::create(['name' => '#105',
      'type' => Room::TYPE_MIDDLE_CLASS,
      'pax'  => 10,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

    Room::create(['name' => '#106',
      'type' => Room::TYPE_MIDDLE_CLASS,
      'pax'  => 10,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

    Room::create(['name' => '#107',
      'type' => Room::TYPE_MIDDLE_CLASS,
      'pax'  => 10,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

    Room::create(['name' => '#108',
      'type' => Room::TYPE_MIDDLE_CLASS,
      'pax'  => 10,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

    Room::create(['name' => '#109',
      'type' => Room::TYPE_MIDDLE_CLASS,
      'pax'  => 10,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

    Room::create(['name' => '#201',
      'type' => Room::TYPE_MIDDLE_CLASS,
      'pax'  => 10,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

    Room::create(['name' => '#202',
      'type' => Room::TYPE_MIDDLE_CLASS,
      'pax'  => 10,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);

    Room::create(['name' => '#203',
      'type' => Room::TYPE_MIDDLE_CLASS,
      'pax'  => 10,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_MIDDLE_CLASS]);
    //End Big Room

    //V.I.P.
    Room::create(['name' => '#204',
      'type' => Room::TYPE_VIP,
      'pax'  => 2,
      'availability' => Room::AVAILABILITY_VACANT,
      'price' => Room::PRICE_TYPE_VIP]);
    //End V.I.P.
  }

}
