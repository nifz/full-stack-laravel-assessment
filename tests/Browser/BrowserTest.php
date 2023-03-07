<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BrowserTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testAllAPIEndpoints()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Welcome to Laravel');
            // tambahkan kode ini untuk mengecek endpoint lainnya
        });
    }
}
