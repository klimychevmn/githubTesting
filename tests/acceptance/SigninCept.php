<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->amOnPage('/login');
$I->see('Sign in to GitHub', 'h1');
$I->fillField('input[name="login"]', "@your_email@");
$I->fillField('input[name="password"]', "@your_pass@");
$I->click('input[type="submit"]');
$I->see('@your_nickname@');
