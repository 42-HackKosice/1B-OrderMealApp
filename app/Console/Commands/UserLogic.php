<?php

namespace App\Console\Commands;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UserLogic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:logic';

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
        if (Carbon::tomorrow()->isWeekend()){

            $user = User::orderBy('lastOrder')
                ->first();
            $user->lastOrder = Carbon::today();
            $user->save();

            $tomorrowUser = new Order();
            $tomorrowUser->user_id =User::orderBy('lastOrder')->first()->id;

            $tomorrowUser->time = Carbon::tomorrow();
            $tomorrowUser->save();

        }
    }
}
