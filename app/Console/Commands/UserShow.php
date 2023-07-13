<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UserShow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:show';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $header = ['Name','Email'];

        $data = User::all(['name','email'])->toArray();

        $this->table($header,$data); // taọ thành bảng

        //taoj thanh tiến trình

        // $users = User::all();

        // $bar = $this->output->createProgressBar(count($users));
        // foreach ($users as $user) {
        //     sleep(1);
        //     echo "User: ". $user->name."\n";
        //     $bar->advance();
        // }
        // $bar->finish();
    }
}
