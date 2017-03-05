<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('Rename your profile name');
$I->amOnPage('/login');
$I->fillField('input[name="login"]', "@your_email@");
$I->fillField('input[name="password"]', "@your_pass@");
$I->click('input[type="submit"]');
$I->click('//*[@id="user-links"]/li[3]/div/div/a[6]');
$I->see('Public profile', 'h2');
$I->fillField('input[name="user[profile_name]"]', "testName");
$I->click('Update profile');
$I->see('Profile updated successfully');
$I->click('view your profile.');
$I->see('testName');
$I->click('Sign out');
$I->see('Sign up');
