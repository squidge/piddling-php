Feature: homepage
  In order to see the framework is working
  As a web user
  I need to be able to see a basic message on the index page

  Scenario: View a single message on the index page
    Given I am on the homepage
    Then I should see "piddling php - pathetically trivial; trifling"