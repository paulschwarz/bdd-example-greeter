Feature: Greeting translation
  In order to greet people in their language
  As a multilingual system
  I need to greet people in their preferred language

  Rules:
    - It speaks English so it should say "hello"
    - It speaks French so it should say "bonjour"
    - It doesn't speak Romanian so it should be stumped

  @web
  Scenario Outline: Greeting in a known language
    Given I speak <language>
    Then I should see <greeting>

  Examples:
    | language | greeting |
    | English  | hello    |
    | French   | bonjour  |

  @web
  Scenario: Greeting in an unknown language
    Given I speak "Romanian"
    Then I should see an error