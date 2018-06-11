<?php

use Page\MainPage;
use Page\StorePage;


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

// <editor-fold defaultstate="collapsed" desc="product category choosing">
{
    use _generated\AcceptanceTesterActions;
    /**
     * @Given I have to open google page with :numl
     */

    public function iHaveToOpenGooglePage($num1)
    {

        $this->amOnPage($num1);
        $this->seeElement(MainPage::$mainPageLogoField);
    }

    /**
     * @Given I have to enter the name of the resource with :numl
     */
    public function iHaveToEnterTheNameOfTheResource($num1)
    {
        $this->fillField(MainPage::$searchField, "$num1");
    }
    /**
     * @Given I have to submit
     */
    public function iHaveToSubmit()
    {
        $this->pressKey(MainPage::$searchField,\Facebook\WebDriver\WebDriverKeys::ENTER);
    }

    /**
     * @When I go to opened page
     */
    public function iGoToOpenedPage()
    {
        $this->waitForText(MainPage::$verifiedText);
        $this->click(MainPage::$linkPathField);
        $this->switchToNextTab();
    }

    /**
     * @Then I should check that correct page is opened
     */
    public function iShouldCheckThatCorrectPageIsOpened()
    {
        $this->seeElement(StorePage::$checkElementOfThePageField);
    }

    /**
     * @Then I have to check category of product
     */
    public function iHaveToCheckCategoryOfProduct()
    {
        $this->click(StorePage::$productCategoryField);
        $this->see("Женский гардероб", StorePage::$productCategoryField);
    }
// </editor-fold>
}
