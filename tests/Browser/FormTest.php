<?php
namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\ApplicationFormPage;

class FormTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testFormTitle()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new ApplicationFormPage)
                    ->assertSee('Application Form', $browser->element('.is-uppercase'));
        });
    }
}