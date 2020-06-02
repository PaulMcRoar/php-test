# totallywicked/rick-and-morty

## Notes

This was built using the Laravel MVC platform which I believe you are familiar with.

Due to the rate-limiting of the API, and the data being pretty much static, 
and other benefits such as availability if the site goes down, I took the decision
to sync the R+M data into a local database. The .env.example has the example of a sqlite
database, and you would need to amend your .env to fit.

Once the migrations have ran you should run

php artisan refresh:local

to pull down the R+M data into the local database. This is also scheduled to run overnight.
This will sync changes and deletions.








**This project will be based primarily on your ability to fulfill the task 
requirements. Any potential design skills are a bonus, but usability, 
performance and security will be taken into account.**

## Introduction
This project provides a starting point which will allow you to create your own 
web-based encyclopedia based on the cartoon Rick and Morty.

## Project Requirements
To get started, you'll need the following:

 - PHP
 - [Composer](https://getcomposer.org/)
 - git
 
 You are free to use whatever PHP packages and front-end libraries that you 
 wish.

## Task Requirements
To order to complete this challenge, you MUST create an encyclopedia with minimal 
functionality. Your solution MUST allow the user to browse the full list of 
Rick and Morty characters in a convenient manner, as well as offer some form of search 
functionality. Your solution MUST also display basic information for a specific 
character, including:

 - At least one image
 - Name
 - Species
 - Origin
 - Episodes in which they appear
 
A RESTful API is available at [Rick and Morty](https://rickandmortyapi.com/) 
which will provide you with all the data that you will need. You do not need 
to create an account nor authenticate in order to consume the API, however please 
be aware that this API is rate-limited.
 
To get started, we've given you a skeleton folder structure. It is advised 
that you spend no more than two to three hours on this assignment.
 
## Submission
To submit your solution, please fork this repository and provide us a link 
to your finished version.

## Copyright
All trademarks as the property of their respective owners.

