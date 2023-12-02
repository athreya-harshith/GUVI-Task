## Guvi Task
* This repository consists login and registration system using MySQL and PHP.

## Follow the below steps to setup the project
* Create a database with name `guvi_task`.
* Create a table `user` with the following command.
```
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
);
```

