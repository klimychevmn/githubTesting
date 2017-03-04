<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->amOnPage('/login');
$I->see('Sign in to GitHub', 'h1');
$I->fillField('input[name="login"]', "plagonist@gmail.com");
$I->fillField('input[name="password"]', "klimychevmike26071993");
$I->click('input[type="submit"]');
$I->see('klimychevmn');
