<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverKeys;

class SectionOneTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group S1
     * @return void
     */
    public function testLoginAsAdmin()
    {
        $this->browse(function ($browser) {
            $browser->visit('https://dev:dev@profile1.medsu.net/login')
                    ->waitFor('input[name="email"]')
                    ->type('email', 'senior.admin@medsu.net')
                    ->type('password', 'Pwd12345')
                    ->click('input[type="submit"]')
                    ->waitForText('Dashboards')
                    ->click('div[class="integration-menu-icon"]')
                    ->waitForText('MAP')
                    ->assertSee('MAP');
        });
    }
    
    /**
     * Go to the map.
     * @group S1
     * @return void
     */
  /*  public function testOpenMap()
    {
        $this->browse(function ($browser) {
            $selector = "//span[text()='MAP']";
            $browser->driver->findElement(WebDriverBy::xpath($selector))->click();
            $browser->visit('https://dev:dev@map1.medsu.net/my-map');
            $browser->waitFor('#section-1 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(10) > div > div > div > div');
            $browser->assertVisible('#section-1 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(10) > div > div > div > div', 'Attach File');
        });
    }*/
    /*public function testTourWindow()
    {
        $this->browse(function ($browser) {
            $browser->waitForText('Please decide whether you would like to watch quickstart video tutorial or a concise step by step tour');
            $browser->assertSee('Please decide whether you would like to watch quickstart video tutorial or a concise step by step tour');
            $selector1 = "//button[text()='Tour']";
            $browser->driver->findElement(WebDriverBy::xpath($selector1))->click();
            $browser->pause(20000);
        });
    }*/

    
    /**
     * Fill out an item.
     * @group S1
     * @return void
     */
   /* public function testFillOutItemInSectionOne()
    {
        $this->browse(function ($browser) {
            
            //Title
            $browser->type('title', '1');

            //Category of Work
            $browser->click('#section-1 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(4) > div:nth-child(1) > div.col-sm-12.custom-form-control.custom-select.ng-isolate-scope > div.select-selected');
            $browser->click('#section-1 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(4) > div:nth-child(1) > div.col-sm-12.custom-form-control.custom-select.ng-isolate-scope > div.select-items > div > div:nth-child(2)');
             
            //Frequency
            $browser->click('#section-1 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(4) > div:nth-child(2) > div.col-sm-12.custom-form-control.custom-select.ng-isolate-scope > div.select-selected');
            $browser->click('#section-1 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(4) > div:nth-child(2) > div.col-sm-12.custom-form-control.custom-select.ng-isolate-scope > div.select-items > div > div:nth-child(2)');
                        
            //Detail of work
            $browser->type('detail_of_work', '2');

            //Length of time in role
            $browser->type('length_of_time', '3');

            //Practice Setting
            $browser->type('practice_setting', '4');

            //Qualification / Experience
            $browser->type('qualification', '5');

            //Attache
            $browser->attach('input[type="file"]', __DIR__.'/files/example.mp3');
            $browser->waitFor('a[title="example.mp3"]');
            $browser->assertSee('example.mp3');

            //Saving
            $browser->waitForText('Saving...');
            $browser->waitForText('Saved');

            //Reload the page
            $browser->script('location.reload();');

            $browser->pause(10000);
        });
    }*/
    
    /**
     * Chacking the values.
     * @group S1
     * @return void
     */
   /* public function testCheckingFieldsValues()
    {
        $this->browse(function ($browser) {
            
            //Title
            $titleSelector = '#section-1 > div > div > div > div.section-container.scroll-container > div.form-field > div > textarea';
            $browser->assertInputValue($titleSelector, '1');

            //Category of Work
            $categoryOfWorkSelector = '#section-1 > div > div > div > div.section-container.scroll-container > div:nth-child(4) > div:nth-child(1) > div.col-sm-12.custom-form-control.custom-select.ng-isolate-scope > div.select-selected';
            $getCategoryOfWorkValue = $browser->text($categoryOfWorkSelector);
            if($getCategoryOfWorkValue === 'Clinical'){
                $browser->assertSeeIn($categoryOfWorkSelector, $getCategoryOfWorkValue);
            }
             
            //Frequency
            $frequencySelector = '#section-1 > div > div > div > div.section-container.scroll-container > div:nth-child(4) > div:nth-child(2) > div.col-sm-12.custom-form-control.custom-select.ng-isolate-scope > div.select-selected';
            $getFrequencyValue = $browser->text($frequencySelector);
            if($getFrequencyValue === 'Regular'){
                $browser->assertSeeIn($frequencySelector, $getFrequencyValue);
            }

            //Detail of work
            $detailOfWorkSelector = '#section-1 > div > div > div > div.section-container.scroll-container > div:nth-child(6) > div > div > textarea';
            $browser->assertInputValue($detailOfWorkSelector, '2');

            //Length of time in role
            $lengthOfTimeSelector = '#section-1 > div > div > div > div.section-container.scroll-container > div:nth-child(6) > div > div > textarea';
            $browser->assertInputValue($lengthOfTimeSelector, '3');

            //Practice Setting
            $practiceSettingSelector = '#section-1 > div > div > div > div.section-container.scroll-container > div:nth-child(7) > div > div.col-sm-12.custom-form-control > textarea';
            $browser->assertInputValue($practiceSettingSelector, '4');
            
            //Qualification / Experience
            $qualificationExperienceSelector = '#section-1 > div > div > div > div.section-container.scroll-container > div:nth-child(7) > div > div.col-sm-12.custom-form-control > textarea';
            $browser->assertInputValue($qualificationExperienceSelector, '5');

            //Attache
            $browser->assertSeeLink('example.mp3');

            $browser->pause(5000);
        });
    }*/

}
