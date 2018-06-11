Feature: checkout
  In order to buy product
  As a customer
  I need to be able to checkout the selected category of product

  Scenario: select product category
    Given I have to open google page with "/"
    And I have to enter the name of the resource with "Юла"
    And I have to submit
    When I go to opened page
    Then I should check that correct page is opened
    And I have to check category of product
