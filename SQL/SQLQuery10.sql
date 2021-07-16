CREATE TABLE employees(
id int NOT NULL,
name varchar(50),
date_hired datetime,
department_id int,
salary_id int
PRIMARY KEY(id)
);

INSERT INTO employees
VALUES(1, 'Employee1', '2017-10-07 00:00:00', 3, 1);

INSERT INTO employees
VALUES(2, 'Employee2', '2012-10-08 00:00:00', 2, 3);

INSERT INTO employees
VALUES(3, 'Employee3', '2016-08-10 00:00:00', 1, 2);

INSERT INTO employees
VALUES(4, 'Employee4', '2018-08-10 00:00:00', 3, 2);


