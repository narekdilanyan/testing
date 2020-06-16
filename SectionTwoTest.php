<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverKeys;

class SectionTwoTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group S2
     * @return void
     */
    public function testLoginAsAdmin()
    {
        $this->browse(function ($browser) {
            $browser->visit('https://dev:dev@profile6.medsu.net/login')
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
     * @group S2
     * @return void
     */
   /* public function testOpenMap()
    {
        $this->browse(function ($browser) {
            $selector = "//span[text()='MAP']";
            $browser->driver->findElement(WebDriverBy::xpath($selector))->click();
            $browser->visit('https://dev:dev@map6.medsu.net/my-map');
            $browser->waitFor('#section-1 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(10) > div > div > div > div');
            $browser->assertVisible('#section-1 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(10) > div > div > div > div', 'Attach File');
        });
    }*/
        
    /**
     * Wsitching on section 2.
     * @group S2
     * @return void
     */
  /*  public function testMoveOnSecTwo()
    {
        $this->browse(function ($browser) {
            $browser->assertDontSee('zzzzzzzzzzzzzzzzzzz');
            $browser->mouseover('#map_controller > div > div > div:nth-child(10) > main > div > div.section-title.flex.justified.section_index_1 > div:nth-child(1) > div.menu-title.menu_bar_title.flex.centered > div.selected-menu.flex > h1');
            $browser->click('#sections-menu-wrapper > ul > li:nth-child(2) > div > span.ng-binding');
            $browser->waitFor('#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(15) > div > div > div > div');
            $browser->pause(10000);
        });
    }*/
    
    /**
     * Fill out an item.
     * @group S2
     * @return void
     */
  /*  public function testFillOutItemInSectionTwo()
    {
        $this->browse(function ($browser) {
            
            //Title
            $browser->type('title', '1');

            //Scope of Work
            $browser->click('#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(4) > div.custom-form-control.custom-select.scope-of-work-select.ng-isolate-scope > div.select-selected');
            $browser->click('#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(4) > div.custom-form-control.custom-select.scope-of-work-select.ng-isolate-scope > div.select-items > div > div:nth-child(2)');
                                    
            //Development Goal
            $browser->type('#section-2 > div > div > div:nth-child(1) > div.section-container.scroll-container > div.form-field.full-width.tooltip_bottom.development_arrow > div.full-width.custom-form-control > textarea', '2');

            //Action Plan
            $browser->type('#section-2 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(6) > div.custom-form-control > textarea', '3');

            //Outcome Measure
            $browser->type('#section-2 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(7) > div.custom-form-control > textarea', '4');

            //Estimated Time Commitment
            $browser->type('#section-2 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(8) > div:nth-child(1) > div.col-sm-12.custom-form-control > p.input-group > input', '5');

            //Target Date
            $browser->click('#section-2 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(8) > div:nth-child(2) > div.col-sm-12.custom-form-control > p > input');
            $browser->click('#section-2 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(8) > div:nth-child(2) > div.col-sm-12.custom-form-control > p > ul > li.ng-scope > span.btn-group.pull-left.ng-scope > button.btn.btn-sm.btn-info.ng-binding.ng-scope');
           
            //Has this goal been achieved
            $browser->click('#section-2 > div > div > div > div.section-container.scroll-container > div.row.mb-20 > div:nth-child(2) > div > label > span');

            //Please elaborate on this
            $browser->type('#section-2 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(11) > div > div.col-sm-12.custom-form-control > textarea', '6');

            //Reflective Evaluation
            $browser->type('#section-2 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(12) > div > div.col-sm-12.custom-form-control > textarea', '7');

            //GMP DOMAINS
            $browser->click('#section-2 > div > div > div:nth-child(1) > div.section-container.scroll-container > div:nth-child(13) > div.domains-containter.ng-scope > div > div:nth-child(1) > div:nth-child(2) > label > span.label-text');
            $browser->check('#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(13) > div.domains-containter.ng-scope > div > div:nth-child(1) > div:nth-child(3) > label > span.popover-container > input');

            //Attache
          //  $browser->attach('input[type="file"]', __DIR__.'/files/example.mp3');
          //  $browser->waitFor('a[title="example.mp3"]');
          //  $browser->assertSee('example.mp3');

            //Saving
           // $browser->waitForText('Saving...');
           // $browser->waitForText('Saved');

            //Reload the page
           // $browser->script('location.reload();');

           // $browser->pause(10000);

            //Switching on section 2 again
           // $this->testMoveOnSecTwo();
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
            $titleSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(3) > div > textarea';
            $browser->assertInputValue($titleSelector, '1');

            //Scope of Work
            $scopeOfWorkSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(4) > div.custom-form-control.custom-select.scope-of-work-select.ng-isolate-scope > div.select-selected';
            $getScopeOfWorkValue = $browser->text($scopeOfWorkSelector);
            if($getScopeOfWorkValue === 'Cross Role'){
                $browser->assertSeeIn($scopeOfWorkSelector, $getScopeOfWorkValue);
            }

            //Development Goal
            $developmentGoalSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div.form-field.full-width.tooltip_bottom.development_arrow > div.full-width.custom-form-control > textarea';
            $browser->assertInputValue($developmentGoalSelector, '2');

            //Action Plan
            $actionPlanSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(6) > div.custom-form-control > textarea';
            $browser->assertInputValue($actionPlanSelector, '3');

            //Outcome Measure
            $outcomeMeasureSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(7) > div.custom-form-control > textarea';
            $browser->assertInputValue($outcomeMeasureSelector, '4');
            
            //Estimated Time Commitment
            $ETCSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(8) > div:nth-child(1) > div.col-sm-12.custom-form-control > p.input-group > input';
            $browser->assertInputValue($ETCSelector, '5');
            
            //Target Date
            $targetDateSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(8) > div:nth-child(2) > div.col-sm-12.custom-form-control > p > input';
            $browser->assertInputValue($targetDateSelector, '12/06/2020');

            //Has this goal been achieved
            $hasSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div.row.mb-20 > div:nth-child(2) > div > label > input';
            $getHasValue = $browser->assertRadioSelected($hasSelector, '1');
                   
            //Please elaborate on this
            $pleaseElaborateSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(11) > div > div.col-sm-12.custom-form-control > textarea';
            $browser->assertInputValue($pleaseElaborateSelector, '6');
            
            //Reflective Evaluation
            $reflectiveEvaluationSelector = '#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(12) > div > div.col-sm-12.custom-form-control > textarea';
            $browser->assertInputValue($reflectiveEvaluationSelector, '7');
            
            //GMP DOMAINS
            $maintain = '#section-2 > div > div > div > div.section-container.scroll-container > div:nth-child(13) > div.domains-containter.ng-scope > div > div:nth-child(1) > div:nth-child(2) > label > span.popover-container > input';
            $browser->assertChecked($maintain);
           
            //Attache
            $browser->assertSeeLink('example.mp3');

            $browser->pause(5000);
        });
    }*/






}
