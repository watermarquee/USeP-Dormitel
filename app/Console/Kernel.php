<?php namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Reservation;
use Carbon\Carbon;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'App\Console\Commands\Inspire',
	];

	/**
	 * Define the application's command schedule.
	 * call this ' * * * * * php /path/to/artisan schedule:run 1>> /dev/null 2>&1 '
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		$schedule->call(function () {
           $reservations = Reservation::where('end_date', '<', Carbon::now())->where('status',Reservation::STATUS_ACCEPTED)->get();
		    foreach ($reservations as $reservation) {
		    	$reservation->status = Reservation::STATUS_DONE;
		    	if($reservation->save()) {
		    		$room = $reservation->room;
		    		$count = (int)$room->occupants - 1;
		    		$count = $count > 0 ? $count : 0;
		    		$room->occupants = $count;
		    		$room->save();
		    	} 
		    }
        })->daily();
	}

}
