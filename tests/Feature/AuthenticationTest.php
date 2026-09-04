<?php

use App\Enums\UserRole;
use App\Models\User;

test('a visitor can register as a member', function () {
    $response = $this->post('/register', [
        'name' => 'New Member', 'email' => 'member@example.com',
        'password' => 'password', 'password_confirmation' => 'password',
    ]);

    $response->assertRedirect('/');
    $this->assertAuthenticated();
    expect(User::whereEmail('member@example.com')->first()->role)->toBe(UserRole::Member);
});

test('a user can log in and log out', function () {
    $user = User::factory()->create();

    $this->post('/login', ['email' => $user->email, 'password' => 'password'])->assertRedirect('/');
    $this->assertAuthenticatedAs($user);

    $this->post('/logout')->assertRedirect('/');
    $this->assertGuest();
});
