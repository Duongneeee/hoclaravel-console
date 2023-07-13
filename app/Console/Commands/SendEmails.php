<?php

namespace App\Console\Commands;

use App\Core\DemoSend;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    public $email;

    public function __construct(DemoSend $email)
    {
        parent::__construct();
        $this->email = $email;
    }

    protected $signature = 'email:sends {email} {--queue=}'; //đặt tên câu lệnh //{email : Email muốn gửi} {name : Tên muốn gửi} {--Q|queue=*: kích hoạt hàng đợi}

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // echo $this->email->send(); 
        $this->info($this->argument('email'));
        $this->info($this->option('queue'));
        // $name = $this->ask('Vui lòng nhập tên:');
        // var_dump($name);
        // $password = $this->secret('Vui lòng nhập mật khẩu:');
        // var_dump($password);
        // $confirm = $this->confirm('Bạn có muốn tiếp tục không?');
        // var_dump($confirm);

        // $name = $this->choice('Tên của bạn là: ',['name1','name2']);
        // $this->info('Tên của bạn là: '.$name);
        // $this->error('Tên của bạn là: '.$name);
    }
}
