<?php

namespace App\Console\Commands;

use BaseCms\Models\User;
use Illuminate\Console\Command;

class CreateTestUser extends Command
{
    protected $signature = 'user:create-test';
    protected $description = 'Create a test user';

    public function handle()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'password',
        ]);

        $this->info('Test user created successfully!');
        $this->info('Email: test@test.com');
        $this->info('Password: password');
    }
}
