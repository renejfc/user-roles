<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\Role;

class NewRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'role:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new role with its title';

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
        $maxLength = 15;

        do {
            $title = $this->ask('Set the role title');
            $length = Str::length($title);

            if ($length > $maxLength) {
                $this->error("That's too long! Try again with no more than $maxLength chars.");
            }
        } while ($maxLength < $length);

        Role::query()->create([
            'title' => $title,
        ]);

        $this->info('Role created sucessfully! ^__^');
        $this->newLine();
    }
}
