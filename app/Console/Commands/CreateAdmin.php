<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

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
        User::create([
            'name' => 'Admin',
            'username' => 'admin@odf',
            'email' => 'admin@odf.org',
            // 'password' => Hash::make('password@odf'),

            'password' => 'password@odf', // ✅ NO Hash::make
            'is_admin' => 1,
        ]);
        echo 'Admin Created';
    }
}
