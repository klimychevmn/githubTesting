<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('Rename your profile name');
$I->amOnPage('/login');
$I->fillField('input[name="login"]', "plagonist@gmail.com");
$I->fillField('input[name="password"]', "klimychevmike26071993");
$I->click('input[type="submit"]');
$I->click('//*[@id="user-links"]/li[3]/div/div/a[6]');
$I->see('Public profile', 'h2');
$I->fillField('input[name="user[profile_name]"]', "Michael");
$I->click('Update profile');
$I->see('Profile updated successfully');
$I->click('view your profile.');
$I->see('Michael');
$I->click('Sign out');
$I->see('Sign up');
