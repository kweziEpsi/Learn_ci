<?php

class ItemsCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Kwezi');
    }

    public function itemsTest(AcceptanceTester $I){
        $I->amOnPage('/item/create');
        $I->fillField('title', 'test');
        $I->fillField('description', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
        $I->click('Submit');
        $I->amOnPage('/item/list');
        $I->see('Welcome To CI Online Tutorial - Items List');
    }

    

}
