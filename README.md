Certified Health Product List (CHPL) OpenAPI 
============================================

This web application design to provide the HHS/ONC CHPL data set into a Open API standards as JSON/XML

WHY
---
Open API of instead of Excel file export of all records.


WHAT
----
### Home - with examples of RESTful Open API
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/1.png)


### Mobile Friendly
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/2.png)


### Home
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/3.png)

### Home
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/4.png)


### Home
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/5.png)


### Home
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/6.png)


### Home
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/7.png)


### Home
![alt tag](https://github.com/gajen0981/CHPL-OpenAPI/blob/master/docs/8.png)

### Home
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