<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddNewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/myAdmin/create')
                    ->type('title', 'My title test')
                    ->type('author', '')
                    ->type('desc', 'My discription test My discription test My discription test My discription test My discription test My discription test ')
                    ->press('Опубликовать');
        });
    }
}
