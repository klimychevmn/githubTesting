<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('see front page');
$I->amOnPage('/');
$I->see('Sign up');
