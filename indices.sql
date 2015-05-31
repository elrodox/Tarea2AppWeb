CREATE INDEX indice_employees ON employees (emp_no,first_name); 
CREATE INDEX indice_deptemp ON dept_emp (emp_no,from_date,dept_no);
CREATE INDEX indice_salaries ON salaries (salary,from_date);
CREATE INDEX indice_deptman ON dept_manager (dept_no);
CREATE INDEX indice_departments ON departments (dept_no,dept_name);