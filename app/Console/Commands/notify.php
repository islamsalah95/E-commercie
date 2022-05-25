<?php
namespace App\Console\Commands;

use App\Models\User;
use App\Mail\NotifyEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email every day ';

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
    public function handle(){
        $emails=User::pluck('email')->toArray();
        foreach( $emails as  $email){
            Mail::To($email)->send(new NotifyEmail());
        }  }
}
