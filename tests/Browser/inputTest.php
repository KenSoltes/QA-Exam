<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class inputTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLoginInput()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login');

            $browser->type('email', 'sampleUser@gmail.com'); 
            $browser->type('password', 'admin');  

         
        });
    }
}
