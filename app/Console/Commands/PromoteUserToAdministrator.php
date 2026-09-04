<?php

namespace App\Console\Commands;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('user:make-admin {email : The email address of the member to promote}')]
#[Description('Promote an existing member to administrator')]
class PromoteUserToAdministrator extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $user = User::where('email', $this->argument('email'))->first();

        if (! $user) {
            $this->error('No user was found with that email address.');

            return self::FAILURE;
        }

        $user->update(['role' => UserRole::Administrator]);
        $this->info("{$user->email} is now an administrator.");

        return self::SUCCESS;
    }
}
