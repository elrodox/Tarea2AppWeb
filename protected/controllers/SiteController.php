<?php

class SiteController extends Controller
{

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionBasica()
    {
        $con = Yii::app()->db;
        $emps = $con->createCommand("
    		select * from employees where emp_no>10000 and emp_no<10010
    		")->queryAll();
        $this->render('resultados', array(
            'emps' => $emps
        ));
    }
    public function actionMedia()
    {
        $con = Yii::app()->db;
        $emps = $con->createCommand("
    		select * from employees where emp_no>5000 and emp_no<20000
    		")->queryAll();
        $this->render('resultados', array(
            'emps' => $emps
        ));
    }


//    datos de empleados de depto de Marketing
//    que tengan un salario superior a 70.000
//    y que la fecha from_date de su titulo sea posterior a 1990-01-01
    public function actionAvanzada()
    {
        $con = Yii::app()->db;
        $emps = $con->createCommand("
    		select * from salaries as s
            inner join
            (select e.emp_no, e.birth_date, e.first_name, e.last_name, e.gender, e.hire_date
            from employees as e inner join dept_emp as de
            on e.emp_no=de.emp_no
            where (de.from_date between '1985-01-01' and '2000-01-01')
            and de.dept_no in (
                select d.dept_no from departments as d, dept_manager as dm
                where d.dept_no = dm.dept_no
                and d.dept_name = 'Marketing'
                and de.from_date between '1997-01-01' and '2000-01-01')
            and e.first_name like '%R%') as a
            on a.emp_no = s.emp_no
            where s.salary < 1000000
            and s.salary > 10000
            and s.from_date between '1990-01-01' and '2000-01-01'
            order by s.salary asc
    		")->queryAll();
        $this->render('resultados', array(
            'emps' => $emps
        ));
    }


}