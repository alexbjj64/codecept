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
        $I->seeElement('.//div[contains(@class, \'header_bar__logo\')]/a[contains(@href,\'https://youla.ru/\')]/span[contains(@aria-label,\'Юла\')]');
        $I->click('.//div[contains(@class, \'categories__wrapper\')]//a[contains(.,\'Женский гардероб\')]');
        $I->wait(2);
    }
}
