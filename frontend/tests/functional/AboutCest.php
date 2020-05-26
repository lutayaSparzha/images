<?php namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class AboutCest
{


    // tests
    public function checkAbout(FunctionalTester $I)
    {
        $I->amOnRoute('site/about');
        $I->see('About images project', 'h1');
    }
}
