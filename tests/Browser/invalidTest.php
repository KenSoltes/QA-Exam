<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class invalidTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testinvalidLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                        ->type('email', 'invaliduser@example.com') // Invalid email
                        ->type('password', 'invalidpassword') // Invalid password
                        ->press('Sign In')
                        ->assertPathIs('/login') // Ensure the user is redirected back to the login page
                        ->assertSee('These credentials do not match our records.'); // Check for the error message
                    
        });
    }
}
