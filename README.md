## Guvi Task
* This repository consists login and registration system using MySQL and PHP.

## Follow the below steps to setup the project
* Clone the repository with the below command first.
```
git clone https://github.com/athreya-harshith/GUVI-Task.git
```
* Create a database with name `guvi_task`  with the following command.
```sql
create database guvi_task;
```
* To use the database `guvi_task` run the following command.
```sql
use guvi_task;
```
* Create a table `user` with the following command.
```sql
CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
);
```
* Run the above command in mysql command line interface in terminal.
* To make the `id` to be __auto incremented__ , run the following command.
```sql
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
```
* After setting these things in the local MySQL server , modify the `config.php` with appropriate fields as mentioned in the comments.
```php
define("DB_SERVER", "localhost");// in local repository 
define("DB_USERNAME", "root");//name of the user of the local MySQL database
define("DB_PASSWORD", "");// please provid the password for the database as second argument
define("DB_NAME", "guvi_task");// name of the database
```
* Now to run the project without using **__XAMPP__** server and **__PhpMyAdmin__** , you must have `php` installed in your device .
* To chech the availability of `php` in your device , run the following command in your terminal
```
php --version
```
* If you have `php` installed , it will result in the response as given below.
```
PHP 8.3.0 (cli) (built: Nov 24 2023 13:21:02) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.3.0, Copyright (c) Zend Technologies
    with Zend OPcache v8.3.0, Copyright (c), by Zend Technologies
```
* If it says not found , then install the `php` to continue.
* After ensuring that php exists , go to the root folder of the cloned project , run the following command.
```
php -S 127.0.0.1:8080
```
* The response from the os will be like 
```
[Sat Dec  2 17:52:41 2023] PHP 8.3.0 Development Server (http://127.0.0.1:8080) started
```
* Now copy the below command and paste it in the search bar of you browser,
```
http://127.0.0.1:8080
```
* Thats it , create the account and proceed.
* The password must be atleast 8 Characters in length , ex : `Abcd@123`.

