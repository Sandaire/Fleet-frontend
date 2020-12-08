<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Vehicle;
use App\Loading;
use App\Event;
use App\Evenement;
use App\Http\Controllers\LoadingsController;

use DateTime;
use Jenssegers\Date\Date;
use Carbon\Carbon;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

class EventUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Log::info('Cron is working well!');
		LoadingsController::trackingProcess();
		
		
		/*  \Log::info('Cron is working well!');
		$users = User::all();
		foreach ($users as $user){
			Mail::raw('This is automatically generated minute update', function ($message) use ($user)
			{
				$message->from('tboyard.biz@gmail.com', 'Tommy Boyard');
				$message->to($user->email)->subject('Minute update');
			});
		}
		$this->info('MInute successfully update'); */
    }
}
