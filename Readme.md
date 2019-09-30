# CahOnGo Recruiting
This is a test project within cashongo's technical recruiting process.

In doubt of technical issues you can send a mail with your questions.

## Preconditions

### Technical
You need at least:

* PHP 5.3 or higher
* A text editor (vim, nano, sublime text, notepad++) or IDE (PHPStorm, Eclipse PDT, Netbeans) of your choice
* Some kind of shell, if you want to write unit tests. (Linux, OS X, *nix or Windows - be sure to check the executable files for windows compatibility)
* Composer if you want to write any tests for your code. See [this documentation to get started with composer](http://getcomposer.org/doc/00-intro.md#installation)

### Knowledge
You will be tested within the following areas of PHP development:

* Basic understanding of PHP's OOP implementation, including interfaces and design patterns.
* Namespaces, Closures/Anonymous functions
* Reading resources from a local file system location
* Coping with JSON as data format

## The tasks
With this code you will receive a number of tasks to resolve. Each task should
not take more then 15 to 30 minutes pure working time.

### Implement a basic PartnerService

Implement the interface for the Partner Service. Please use the JSON file in the data directory as your datasource. 
Your implementation must read the resultset from the datasource and pass the values from the json file into the corresponding classes from
the Entity namespace. 

The entities encapsulate each other:

(Hotel) -[hasMany]-> (Partner) -[hasMany]-> (Price)

The JSON file has a similar but not equal structure. Please take a deep look at both structures

### Build a basic validator for the Partner Entity

Your tasks is to build a validation mechanism for the Partner Entity's homepage
property. Place the validation class in a proper position within the given
architecture and ensure the value is valid. It is up to you how you implement
it and when to call it within the application's flow.

### Implement a way to get different implementations of the HotelServiceInterface

You can accomplish this by using a simple factory or abstract factory pattern or you can choose the more complex 
variant using dependency injection via inversion of control. Please choose the variant you feel most comfortable with, not
the one that you think might of bringing the most kudos. You might want to write a second implementation for the HotelServiceInterface, but
you don't have to. If you need one, you can think of a "PriceOrderedHotelService" or a "PartnerNameOrderedHotelService", which sort their 
results after receiving it from the partner service.
