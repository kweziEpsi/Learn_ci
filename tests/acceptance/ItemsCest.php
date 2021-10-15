<?php

class ItemsCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function indexTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Kwezi');
    }

    public function createTest(AcceptanceTester $I){
        $I->amOnPage('/item/create');
        $I->fillField('title', 'Lorem ipsum dolor');
        $I->fillField('description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis aenean et tortor at risus viverra adipiscing at. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Id interdum velit laoreet id donec ultrices tincidunt arcu. Vehicula ipsum a arcu cursus. Bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim. Integer quis auctor elit sed vulputate. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Morbi quis commodo odio aenean sed adipiscing diam donec adipiscing. Viverra suspendisse potenti nullam ac tortor vitae purus. Facilisi cras fermentum odio eu feugiat pretium. Ipsum a arcu cursus vitae congue mauris rhoncus aenean vel. Enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra.');
        $I->click('Submit');
        $I->amOnPage('/item/list');
        $I->see('Welcome To CI Online Tutorial - Items List');
    }

    public function editTest(AcceptanceTester $I){
        $I->amGoingTo('edit item');
        $I->amOnPage('/item/edit/23');
        $I->fillfield('title','Sed do eiusmod tempor');
        $I->fillField('description', 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $I->click('Submit');
        $I->amOnPage('/item/list');
        $I->see('Welcome To CI Online Tutorial - Items List');
    }
    
    public function deleteTest(AcceptanceTester $I){
          
    }

    

}
