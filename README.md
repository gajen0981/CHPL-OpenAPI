Certified Health Product List (CHPL) OpenAPI 
============================================

This web application provides U.S. HHS/ONC CHPL data set into a Open API standards as JSON/XML

WHY
---

Open API of instead of Excel file export of all records.


WHAT
----

### Examples of RESTful Open API's
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/1.png)

### Mobile Friendly
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/2.png)

### RDBMS CRUD Functionality / Search & Filter
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/3.png)

### Create
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/4.png)

### View
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/5.png)

### Update
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/6.png)

### RESTful API of all available records from the DB in JSON format
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/7.png)

### RESTful API of all available records but display specific fields only from the DB in JSON format
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/8.png)

### RESTful API of all available records from the DB in XML format
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/9.png)


DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


REQUIREMENTS
------------

	LAMP Stack
	Yii MVC Enterprise Scalable Architecture


INSTALLATION
------------

Install the application by moving into a web server and connect the database where the CHPL is. 

Application can be access via the following URI
http://localhost/basic/web/


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real database configurations, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=chpl',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

Contact Author
--------------

gajen.sunthara@post.harvard.edu