<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LogInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lesson:log';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Log Info';

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
        //
        debugLog('loginfo start');
        $res = \DB::table('oauth_users')->insert([
            0 => [
                'type' => rand(1, 3),
                'name' => generate_username(),
                'avatar' => '/uploads/avatar/default.jpg',
                'openid' => '',
                'access_token' => '',
                'last_login_ip' => '127.0.0.1',
                'login_times' => 1,
                'email' => generate_email(),
                'is_admin' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ],
        ]);
        debugLog('loginfo result: ' . $res);
        \Log::debug('oauth_users: '. $res);
    }
}
