<?php
  // @group single
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Test Google\'s Search Functionality');
  $I->amOnPage('/ncr');
  $I->fillField(['name' => 'q'], 'TestingBot');
  $I->pressKey(['name' => 'q'], \Facebook\WebDriver\WebDriverKeys::ENTER);
  sleep(2);
  $I->seeInTitle('TestingBot - Google Search');
?>
