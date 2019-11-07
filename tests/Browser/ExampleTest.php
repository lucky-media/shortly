<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function home_page_displays_correctly()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Simple URL Shortener');
        });
    }

    /** @test */
    public function url_can_be_shortened()
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/')
                    ->type('url', 'http://www.luckymedia.mk')
                    ->click('@shortenButton')
                    ->waitForText('Success')
                    ->assertSee('Success');
        });
    }
}
