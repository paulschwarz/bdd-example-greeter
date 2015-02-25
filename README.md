# Example BDD project

This simple app was developed using both story BDD and spec BDD tools by first developing domain logic. 
The fact that it is a web app remains a small detail. The Behat tests comprise two overlapping suites. 
`domain` runs domain logic and is lightning fast while `web` runs full stack tests and are therefore much slower.

The idea here is elevate domain logic and ensure tests run very fast.
