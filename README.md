# CSS Conference App

> CSS Conference Application Web &amp; Server Implementation

[![Build Status](https://travis-ci.org/cssuwi/conference-app.svg?branch=master)](https://travis-ci.org/cssuwi/conference-app)


# Requirements
- PHP 7.x
- MySQL
- Composer


## Installation

- Clone project
- `cd` into project directory
- Create a copy of the `.env.example` file. Name it `.env`.
- In your `.env` file, add the following values:
    * For `DB_DATABASE` use the name of a database locally stored on your computer.
    * For `DB_PASSWORD` use the password for your chosen database.
    * For `DB_NAME` use te database name of the database you created.
    * The other values can be left blank.
    * Save your changes.

- Run the Command:	```	composer install ```
- Run the Command: ``` php artisan migrate ```
- Run the Command:	```	php artisan key:generate ```
- Browse to configured URL for the project

**NOTE** It is recommended you use develop the project using homested. [Set up homestead](https://github.com/Swader/homestead_improved).


## More Information

For more examples and usage, please refer to the [Wiki](https://github.com/cssuwi/conference-app/wiki).

Distributed under the MIT license. See ``LICENSE`` for more information.

[https://github.com/cssuwwi/conference-app/blob/master/license.md](https://github.com/cssuwi/conference-app/blob/master/license.md)

## Contributing

1. Fork it (<https://github.com/cssuwi/conference-app/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

