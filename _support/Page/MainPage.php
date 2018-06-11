<?php
namespace Page;


class MainPage
{
    // include url of current page
    public static $mainPageLogoField = 'input[value=\'Поиск в Google\']';
    public static $searchField = '//input[@type=\'text\']';
    public static $searchResultLinkFeild = 'input[value=\'Поиск в Google\']';
    public static $verifiedText = 'Юла - доска объявлений, бесплатные частные объявления';
    public static $linkPathField = './/h3/*[contains(.,\'Юла - доска объявлений, бесплатные частные объявления\')]';


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
