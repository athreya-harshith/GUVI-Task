## Guvi Task
* This repository consists login and registration system using MySQL and PHP.

## Follow the below steps to setup the project
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

