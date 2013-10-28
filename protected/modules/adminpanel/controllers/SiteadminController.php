<?php

class SiteadminController extends Controller
{

	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionCreateuser()
	{
	    $model=new Users;
	    if(isset($_POST['Users']))
	    {
			$model->attributes=$_POST['Users'];
			date_default_timezone_set('Asia/Kolkata');
			$model->created_date=date('Y-m-d H:i:s');
			if($model->validate() && $model->save())
			{
			echo "<script>alert('Record Save Successfully')</script>";
			}
	     }
	    $this->render('createuser',array('model'=>$model));
	}
	public function actionUsermgt()
	{
	 $model=new Users;
	 $this->render('usermgt',array('model'=>$model));
	}
	public function actionUserdetails()
	 {
	 $id=Yii::app()->request->getQuery('id');
	$model=Users::model()->findByPk($id);
	$profilemodel=Profile::model()->findByAttributes(array('users_id'=>$id));
	$this->render('userdetails',array('model'=>$model,'profilemodel'=>$profilemodel));
	}
	public function actionDeleteuser($id)
	{
		$model=Users::model()->findByPk($id);
		$profilemodel=Profile::model()->findByAttributes(array('users_id'=>$id));
		if($profilemodel===null)
		{
		$model->delete();
		}
		else
		{
		$model->delete();
		$profilemodel->delete();
		}
		if(!isset($_GET['ajax']))
		{
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('siteadmin'));
		}
	}
	
	public function actionAjaxupdate()
	{
	    $act = $_GET['act'];
	    $autoIdAll = $_POST['autoId'];
	        if(count($autoIdAll)>0)
		{
			foreach($autoIdAll as $autoId)
			{
			
			$model=Users::model()->findByPk($autoId);
			
				if($act=='doActive')
				{
				$model->status = '1';
				}
			        if($act=='doInactive')
				{
				$model->status = '0';
				}
				if($model->save())
				{
				echo 'ok';
				}
				else
				{
				throw new Exception("Sorry",500);
				}
		       }
		}
	}
	
	public function actionCountry()
	{
	$model=new Countries;
	$this->render('country',array('model'=>$model));
	}
	
	public function actionAddgenre()
	{
	      $gname=$_POST['a'];
	      $model=new Genres;
	      $model->name=$gname;
	      date_default_timezone_set('Asia/Kolkata');
	      $model->date_time=date('Y-m-d H:i:s');
		    
		    if($model->save())
		   {
		   echo "Record Added Success Fully";
		   }
	}
	public function actionDeletegenre($id)
	{
		$model=Genres::model()->findByPk($id)->delete();
		if(!isset($_GET['ajax']))
		{
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('siteadmin'));
		}
	}
	public function actionAddcountry()
       {
	       $model=new Countries;
	       if(isset($_POST['Countries']))
	      {
		$model->attributes=$_POST['Countries'];
			if($model->validate() && $model->save())
			{
            
            
			}
	      }
	    $this->render('addcountry',array('model'=>$model));
	}
	public function actionAutosearch()
	{
	$this->render('autosearch');
	}
	public function actionAutosuggest()
	{
	$s=mysql_real_escape_string($_POST['s']);
	//$filter=$_POST['f'];
	//echo $filter;
	$criteria=new CDbCriteria();
	$criteria->addSearchCondition('name', $s);
	$criteria->limit=20;
	$country=Countries::model()->findAll($criteria);
	echo '<ul class="list">';
		foreach($country as $s)
		{
		echo "<li><a href='#'>".$s->name."</a></li>";
		}
	echo "</ul>";
	}
}