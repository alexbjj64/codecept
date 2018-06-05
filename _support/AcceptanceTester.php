<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given Have to open google page with :numl
     */
    public function iHaveToOpenGooglePage($num1)
    {
        $this->amOnPage("$num1");
        $this->seeElement( '//div[@id = \'lga\']/img[@alt=\'Google\']');
    }

    /**
     * @Given Have to enter the name of the resource with :numl
     */
    public function iHaveToEnterTheNameOfTheResource($num1)
    {
        $this->fillField("//input[@type='text']", "$num1");
    }
    /**
     * @Given Have to submit
     */
    public function iHaveToSubmit()
    {
        $this->pressKey("//input[@type='text']",\Facebook\WebDriver\WebDriverKeys::ENTER);
    }

    /**
     * @When Go to opened page
     */
    public function iGoToOpenedPage()
    {
        $this->waitForText('Юла - доска объявлений, бесплатные частные объявления');
        $this->click('.//h3/*[contains(.,\'Юла - доска объявлений, бесплатные частные объявления\')]');
        $this->switchToNextTab();
    }

    /**
     * @Then Should check that correct page is opened
     */
    public function iShouldCheckThatCorrectPageIsOpened()
    {
        $this->seeElement('.//div[contains(@class, \'header_bar__logo\')]/a[contains(@href,\'https://youla.ru/\')]/span[contains(@aria-label,\'Юла\')]');
    }

    /**
     * @Then Have to check category of product
     */
    public function iHaveToCheckCategoryOfProduct()
    {
        $this->click('.//div[contains(@class, \'categories__wrapper\')]//a[contains(.,\'Женский гардероб\')]');
    }

}
