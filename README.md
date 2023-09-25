 
# PHP CRUD API

This is a simple PHP CRUD API that allows you to perform basic CRUD operations on a MySQL database.

## Prerequisites

* PHP 7.4 or later
* MySQL 5.7 or later
* WebServer : mamp , xammp

## Installation

1. Clone the repository

```
git clone https://github.com/your-username/php-crud-api.git
```


2. Requirements

-

3. Create a `.env` file and add your database credentials

```
DB_HOST=localhost
DB_NAME=php-api
DB_USER=root
DB_PASS=root
```

4. Create the database tables

```
php artisan migrate
```

5. Start the server

```
php artisan serve
```

## Usage

The API is accessible at `http://localhost:8000/api`. You can use the following endpoints to perform CRUD operations:

* `GET /api/categories` - Get all categories
* `POST /api/categories` - Create a new category
* `GET /api/categories/{id}` - Get a single category by ID
* `PUT /api/categories/{id}` - Update a category by ID
* `DELETE /api/categories/{id}` - Delete a category by ID

## Contributing

Contributions are welcome! Please submit a pull request if you have any improvements or suggestions.

## License

This project is licensed under the MIT license.
```
