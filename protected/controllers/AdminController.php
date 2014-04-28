<?php
class AdminController extends Controller
{	
    
        public function filters()
    {
        return array(
            'accessControl',
        );
    }
	
    public function accessRules()
    {
        return array(
                array('allow',
                        'actions'=>array('login','registration'),
                        'users'=>array('*'),
                        ),
                    array('allow',
                        'actions'=>array('index',
                                         'logout',
                                         'editlayouts',
                                         'editoptions',
                            ),
                        'users'=>array('*'),
                        'expression' => 'ActionsClass::UserInfo("role") !== null',
                    ),
                    
                    
                    array('deny',
                          'users'=>array('*'),
                           ),
                    );
    }
    
	public function actionIndex()
	{
            $this->layout="adminPanel";
            $this->render('index');//,array('model'=>$model)
	}  
        
        public function actionEditlayouts()
        {
            $this->layout="adminPanel";
            $model = Users::model()->findByPk(ActionsClass::UserInfo());
            
            if(isset($_POST['Users']))
		{       
			$model->layout=$_POST['Users']['layout'];
			$model->save(false);
                        Yii::app()->user->setFlash("layout_changed", 'Layout successfully saved');
		}
            
            
            $this->render('editlayouts',array("model"=>$model));
        }
        
        public function actionEditoptions()
        {
            $this->layout="adminPanel";
            $model = Users::model()->findByPk(ActionsClass::UserInfo());
            
            if(isset($_POST['Users']))
		{       
			$model->position1=$_POST['Users']['position1'];
                        $model->position2=$_POST['Users']['position2'];
                        $model->position3=$_POST['Users']['position3'];
                        $model->position4=$_POST['Users']['position4'];
                        $model->position5=$_POST['Users']['position5'];
			$model->save(false);
                        Yii::app()->user->setFlash("options_changed", 'Options successfully saved');
		}
            
            
            $this->render('editoptions',array("model"=>$model));
        }
        
	public function actionLogin()
	{   
                $this->layout="login";
		$model=new LoginForm;

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
                        {   
                            //var_dump(ActionsClass::UserInfo('role'));exit;
                            $this->redirect(Yii::app()->homeUrl."admin");
                        }
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
        
        public function actionRegistration()
        {
            $this->layout="login";
            $model=new RegistrationForm;

            // collect user input data
            if(isset($_POST['RegistrationForm']))
            {
                    $model->attributes=$_POST['RegistrationForm'];
                    // validate user input and redirect to the previous page if valid
                    if($model->validate())
                    {   
                        $userModel = new Users();
                        $userModel->attributes = $_POST['RegistrationForm'];
                        $userModel->position1 = 'play_times';
                        $userModel->position2 = 'description';
                        $userModel->position3 = 'title';
                        $userModel->position4 = 'film_trailer';
                        $userModel->position5 = 'teatre_name';
                        $userModel->role = 2;
                        
                        if($userModel->save())
                        $this->redirect(Yii::app()->homeUrl."admin/login");
                        //else{var_dump($userModel->getErrors());}
                    }
                    //else{var_dump($model->getErrors());}
            }
            // display the login form
            $this->render('register',array('model'=>$model));
        }

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	
        
        
        

	
}