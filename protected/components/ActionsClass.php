<?php

class ActionsClass extends CActiveRecord
{
    public static function UserInfo($arg = 'idUser') 
    {
        return Yii::app()->user->getState($arg);
    }
    
    public static function getCurrentScripts()
    {
        $CurrentPageJs  = dirname(Yii::app()->request->scriptFile).'/themes/frontend/js/'.Yii::app()->controller->id.".".Yii::app()->controller->action->id.'.js';
        $CurrentPageCss = dirname(Yii::app()->request->scriptFile).'/themes/frontend/css/'.Yii::app()->controller->id.".".Yii::app()->controller->action->id.'.css';
        if (file_exists($CurrentPageJs))
        {
            Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/themes/frontend/js/'.Yii::app()->controller->id.".".Yii::app()->controller->action->id.'.js');            
        }
        if(file_exists($CurrentPageCss))
        {
            //echo "<link type='text/css' rel='stylesheet' href=".Yii::app()->request->baseUrl.'/themes/frontend/css/'.Yii::app()->controller->id.".".Yii::app()->controller->action->id.".css />";
        }        
    }
	
    public static function curlRequest($wsdl = 'http://www.demobiffen.dk/api/api_film.asp?bio=demo&apikey=test_Bj0M17DfUi0b8uQ')//&timestart=01-01-2014&timeend=01-14-2014 
    {	
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $wsdl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, '1'); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/xml"));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,50);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
        $output = curl_exec($ch);
        $Envelope = simplexml_load_string($output);

        //header("Content-type: text/xml; charset=utf-8");
        //echo $output;exit;
        
        return $Envelope;
    }
    
    
}

