# Laravel Collection Methods

Laravel collections are one of the best thing I found in the framework. A lot of things can be made easy with the collection methods. One of the major thing we came across while dealing with arrays or a collection is to filter it using a particular condition. A lot of useful methods are there which can be used against collections. Listing out a few methods to filter out the items using a condition.

Most of them are already explained in Laravel Collection methods [here](https://laravel.com/docs/5.6/collections) grouping it here by making it easy to remember.

Filter out the items from collections using a condition - where


* where - Returns the first element in the collection.
* whereStrict - Same as where, but all values are compared using "strict" comparisons.
* firstWhere - Returns the first element with the given key-value pair
* whereIn - Filters the collection by a given key / value contained within the given list
* whereInStrict - Same as whereIn, but all values are compared using "strict" comparisons.
* whereNotIn - Filters the collection by a given key / value not contained within the given list
* whereNotInStrict - Same as whereNotIn, but all values are compared using "strict" comparisons.
