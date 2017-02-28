<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access all website features');
$I->amOnPage('/login');
$I->see('Sign in to GitHub', 'h1');
$I->fillField('input[name="login"]', "your_name");
$I->fillField('input[name="password"]', "your_password");
$I->click('input[type="submit"]');
$I->see('klimychevmn');
$I->click('Your profile');
$I->see('klimychevmn');
