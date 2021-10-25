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
        $I->fillField('user_name', 'Cavlyn');
        $I->fillField('user_email', 'cavlyn@digilims.com');
        $I->fillField('user_password', 'cavlyn');
        $I->fillField('user_mobile', '0671173917');
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

    public function editTest(AcceptanceTester $I){
        $I->amGoingTo('edit item');
        $I->click(['name'=>'signin']);
        $I->amOnPage('http://localhost:8000/user/signin'); 
        $I->fillField('user_email', 'kwezi@digilims.com');
        $I->fillField('user_password', 'kwezi');
        $I->click(['name'=>'login']);
        $I->amOnPage('http://localhost:8000/user/profile');
        $I->see('Portfolio');
        $I->click(['name'=>'items']);
        $I->click(['name'=>'edit']);
        $I->fillfield('title','Sed do eiusmod tempor');
        $I->fillField('description', 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $I->click('Submit');
        $I->amOnPage('http://localhost:8000/item/list');
        $I->see('Welcome To CI Online Tutorial - Items List');
        $I->click(['name'=>'logout']);
    }

    public function deleteTest(AcceptanceTester $I){
        $I->amGoingTo('delete item');
        $I->click(['name'=>'signin']);
        $I->amOnPage('http://localhost:8000/user/signin'); 
        $I->fillField('user_email', 'kwezi@digilims.com');
        $I->fillField('user_password', 'kwezi');
        $I->click(['name'=>'login']);
        $I->amOnPage('http://localhost:8000/user/profile');
        $I->see('Portfolio');
        $I->click(['name'=>'items']);
        $I->click(['name'=>'delete']);
        $I->amOnPage('http://localhost:8000/item/list');
        $I->see('Welcome To CI Online Tutorial - Items List');
        $I->click(['name'=>'logout']);
    }

    public function viewItemTest(AcceptanceTester $I){
        $I->amGoingTo('view item');
        $I->click(['name'=>'signin']);
        $I->amOnPage('http://localhost:8000/user/signin'); 
        $I->fillField('user_email', 'kwezi@digilims.com');
        $I->fillField('user_password', 'kwezi');
        $I->click(['name'=>'login']);
        $I->amOnPage('http://localhost:8000/user/profile');
        $I->see('Portfolio');
        $I->click(['name'=>'items']);
        $I->amOnPage('http://localhost:8000/item/list/');
        $I->click(['name'=>'read']);
        $I->see('Welcome To CI Online Tutorial - Show Item');
        $I->click(['name'=>'back']);
        $I->amOnPage('http://localhost:8000/item/list/');
        $I->click(['name'=>'logout']);
    } 
}
