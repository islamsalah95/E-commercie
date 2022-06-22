<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\NotifyMaleSale;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class NotifySale extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'NotifySale:NotifySale';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email daily for best 2 products';

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
        $bestSaleProducts = DB::table('products')->orderBy('sale', 'desc')->limit(2)->get();
        foreach( $emails as  $email){
            Mail::To($email)->send(new NotifyMaleSale($bestSaleProducts));
        }  }




}
