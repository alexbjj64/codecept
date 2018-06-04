<?php


class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeElement( '//div[@id = \'lga\']/img[@alt=\'Google\']');
        $I->fillField("//input[@type='text']", "Юла");
        $I->pressKey("//input[@type='text']",\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForText('Юла - доска объявлений, бесплатные частные объявления');
        $I->click('.//h3/*[contains(.,\'Юла - доска объявлений, бесплатные частные объявления\')]');
        $I->switchToNextTab();
        $I->wait(2);
        $I->canSeeCurrentUrlEquals("https://youla.ru/");
    }
}
