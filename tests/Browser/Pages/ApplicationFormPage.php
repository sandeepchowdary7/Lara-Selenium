<?php
namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class ApplicationFormPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/Lara-Selenium/public/Form';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@bodyTitle' => 'body > div.is-uppercase',
        ];
    }
}
