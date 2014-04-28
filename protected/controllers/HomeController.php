<?php
class HomeController extends Controller
{	
        public function beforeAction($action)
	{ 
		$userId = ActionsClass::UserInfo();
                if(!$userId && $action->id != 'teatres')$this->redirect(Yii::app()->homeUrl."home/teatres");
                return parent::beforeAction($action);
	} 
        
	public function actionIndex()
	{
		$Envelope = ActionsClass::curlRequest('http://www.demobiffen.dk/api/api_film.asp?bio='.ActionsClass::UserInfo('username').'&apikey='.ActionsClass::UserInfo('password').'');
		$this->render('index',array('Envelope'=>$Envelope));//,array('model'=>$model)
	}   
           
        
        public function actionTeatres()
	{
            $teatres = Users::model()->findAll();
            if(isset($_GET['teatre']))
            {   
                $teatre = Users::model()->findByPk($_GET['teatre']);
                foreach ($teatre as $key => $value) 
                    {
                        Yii::app()->user->setState($key, $value);
                    }
                Yii::app()->user->setState('role',null);
                $this->redirect(Yii::app()->homeUrl."home");
            }
            
            $this->render('teatres',array('model'=>$teatres));
	}

	public function actionToday()
	{
		$Envelope = ActionsClass::curlRequest("http://www.demobiffen.dk/api/api_film.asp?bio=".ActionsClass::UserInfo('username')."&apikey=".ActionsClass::UserInfo('password')."&timestart=".date("d-m-Y")."&timeend=".date("d-m-Y")."");
		$this->layout = 'frames';
                $modelLayout = Users::model()->findByPk(ActionsClass::UserInfo());
		$this->render('today',array('Envelope'=>$Envelope,'modelUser'=>$modelLayout));
	}
	
	public function actionSingle($filmid)
	{
		$Envelope = ActionsClass::curlRequest("http://www.demobiffen.dk/api/api_film.asp?bio=".ActionsClass::UserInfo('username')."&apikey=".ActionsClass::UserInfo('password')."&filmid=".$filmid);
                $this->layout = 'frames';
                $modelLayout = Users::model()->findByPk(ActionsClass::UserInfo());
		$this->render($modelLayout->layout,array('Envelope'=>$Envelope,'modelUser'=>$modelLayout));
	}
	
	
        public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
                            if(ActionsClass::UserInfo("role") == null){$this->redirect('login');}
                            var_dump ($error);exit;
				$this->render('error', $error);
		}
	}

	
}