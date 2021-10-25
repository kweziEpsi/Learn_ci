<?php

class ItemsCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function indexTest(AcceptanceTester $I){
        $I->amOnPage('/');
        $I->see('Kwezi');
    }

    public function registerTest(AcceptanceTester $I){
        $I->amGoingTo('Register');
        $I->amOnPage('/');
        $I->click(['name'=>'signup']);
        $I->amOnPage('http://localhost:8000/user/signup');
        $I->fillField('user_name', 'Reen');
        $I->fillField('user_email', 'reen@digilims.com');
        $I->fillField('user_password', 'reen');
        $I->fillField('user_mobile', '0671113911');
        $I->click(['name'=>'register']);
        $I->amOnPage('http://localhost:8000/user/signin');
        $I->see('Sign In');
    }

    public function createTest(AcceptanceTester $I){
        $I->amGoingTo('add item');
        $I->click(['name'=>'signin']);
        $I->amOnPage('http://localhost:8000/user/signin'); 
        $I->fillField('user_email', 'kwezi@digilims.com');
        $I->fillField('user_password', 'kwezi');
        $I->click(['name'=>'login']);
        $I->amOnPage('http://localhost:8000/user/profile');
        $I->see('Portfolio');
        $I->click(['name'=>'items']);
        $I->amOnPage('http://localhost:8000/item/list');
        $I->click(['name'=>'add']);
        $I->amOnPage('http://localhost:8000/item/create');
        $I->fillField('title', 'Lorem ipsum dolor');
        $I->fillField('description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis aenean et tortor at risus viverra adipiscing at. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Id interdum velit laoreet id donec ultrices tincidunt arcu.');
        $I->click('Submit');
        $I->amOnPage('http://localhost:8000/item/list');
        $I->see('Welcome To CI Online Tutorial - Items List');
        $I->click(['name'=>'logout']);
    }

   
}
