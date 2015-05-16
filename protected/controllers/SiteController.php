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
        $this->render('basica', array(
            'emps' => $emps
        ));
    }
    public function actionMedia()
    {
        $con = Yii::app()->db;
        $emps = $con->createCommand("
    		select * from employees where emp_no>5000 and emp_no<20000
    		")->queryAll();
        $this->render('basica', array(
            'emps' => $emps
        ));
    }
    public function actionAvanzada()
    {
        $this->render('avanzada');
    }


}