<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Hash;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\User;

class NewUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new user with name and password only (others attrs are randomly generated)';

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
        $name = $this->ask('Whats your username?');
        $email = null;
        $password = $this->handlePassword();

        if ($this->confirm('Do you want to add an email?')) 
        {
            $email = $this->ask('Which Email?');
        }

        User::query()->create([
            'name' => $name,
            'password' => Hash::make($password),
            'email' => $email,
        ]);

        $this->info('User created sucessfully! ^__^');
        $this->info('Now you can log in!');
        $this->newLine();
    }

    protected function handlePassword()
    {
        $minPasswordLength = 8;

        do {
            $password = $this->secret('Type your password [MIN 8]');
            $confirmation = $this->secret('Confirm your password');
            $passwordLength = Str::length($password);

            if ($password != $confirmation) {
                $this->error("Password doesn't match! Try again!");
            }

            if ($passwordLength != $minPasswordLength) {
                $this->error("Password must be at least 8 characters!");
            }
        } while ($password != $confirmation || $passwordLength != $minPasswordLength);

        return $password;
    }
}
