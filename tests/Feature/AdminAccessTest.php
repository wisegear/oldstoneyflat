<?php

use App\Models\User;

test('guests are redirected away from the admin area', function () {
    $this->get('/admin')->assertRedirect('/login');
});

test('members cannot access the admin area', function () {
    $this->actingAs(User::factory()->create())->get('/admin')->assertForbidden();
});

test('administrators can access the admin area', function () {
    $this->actingAs(User::factory()->administrator()->create())->get('/admin')->assertOk()->assertSee('Administrator area');
});
