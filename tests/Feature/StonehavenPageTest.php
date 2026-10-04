<?php

test('visitors can read the Stonehaven history and follow its related pages', function () {
    $response = $this->get('/stonehaven');

    $response->assertOk()
        ->assertSee('History of Stonehaven | From Steenhive to Today | Old Stoney Flat')
        ->assertSee('Discover the story of Stonehaven, from the old harbour of Steenhive')
        ->assertSeeText('Stonehaven: From Steenhive to the Seaside Town')
        ->assertSeeText('Still recognisably Steenhive')
        ->assertSee('href="'.route('about').'"', false)
        ->assertSee('href="'.route('home').'"', false)
        ->assertSee('aria-current="page"', false);
});

test('missing history photographs render no broken image or caption', function () {
    $view = $this->blade('<x-town-history-image image="missing-test-photo.jpg" caption="Missing photograph" />');

    $view->assertDontSee('<img', false)->assertDontSee('Missing photograph');
});

test('history photographs can use an existing local fallback', function () {
    $view = $this->blade('<x-town-history-image image="missing-test-photo.jpg" caption="Historic Stonehaven" fallback="images/stonehaven-historic-street.jpg" />');

    $view->assertSee('images/stonehaven-historic-street.jpg')
        ->assertSee('width="2044"', false)
        ->assertSee('height="1277"', false)
        ->assertSee('loading="lazy"', false);
});
