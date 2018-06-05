Feature: checkout
  In order to buy product
  As a customer
  I need to be able to checkout the selected category of product

  Scenario: select product category
    Given Have to open google page with "/"
    And Have to enter the name of the resource with "Юла"
    And Have to submit
    When Go to opened page
    Then Should check that correct page is opened
    And Have to check category of product
