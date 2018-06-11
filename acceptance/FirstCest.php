<?php
use Page\MainPage;

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->iHaveToOpenGooglePage('/');
        $I->iHaveToEnterTheNameOfTheResource("Юла");
        $I->iHaveToSubmit();
        $I->iGoToOpenedPage();
        $I->iShouldCheckThatCorrectPageIsOpened();
        $I->iHaveToCheckCategoryOfProduct();
    }
}
