<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class viewPageTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testviewpage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login');
                  
        });
    }
}
