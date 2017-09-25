<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class CustomCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Customcmd ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is a custom command made by salman zafar';

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
     * @return mixed
     */
    public function handle()
    {
        // Displayin a Message
        $this->info("All Registered Users");
        // Header of the table
        $header = ['Name', 'Email'];
        //Getting users from the db and storing in user variable
        $user = User::select('name','email')->get();
        // Displaying the table
        $this->table($header,$user);

    }
}
