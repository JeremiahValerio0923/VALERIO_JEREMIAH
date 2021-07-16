select * from employees where salary_id = (select max(salary_id) from employees) 

select *from employees where date_hired between '2017' and '2018'