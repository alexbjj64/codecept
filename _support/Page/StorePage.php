<?php
namespace Page;


class StorePage
{
    // include url of current page
    public static $checkElementOfThePageField = './/div[contains(@class, \'header_bar__logo\')]/a[contains(@href,\'https://youla.ru/\')]/span[contains(@aria-label,\'Юла\')]';
    public static $productCategoryField = './/div[contains(@class, \'categories__wrapper\')]//a[contains(.,\'Женский гардероб\')]';
    public static $STOREURL = '';


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */



}
