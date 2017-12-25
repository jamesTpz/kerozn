<?php

namespace Kerozn\Modules\Contact\Tests\Browser;

use Kerozn\Modules\Contact\Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewContactPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->assertSee('Did you like what you saw');
        });
    }
}
