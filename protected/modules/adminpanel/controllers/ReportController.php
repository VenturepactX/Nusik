<?php
class ReportController extends Controller
{
	public function actionCommentreports()
	{
	$model=new ReportHasComments;
	$this->render('commentreports',array('model'=>$model));
	}
	public function actionTrackreports()
	{
	$model=new ReportHasArtistTrack;
	$this->render('trackreports',array('model'=>$model));
	}
	public function actionProfilereports()
	{
	$model=new ReportHasProfile;
	$this->render('profilereports',array('model'=>$model));
	}
	public function loadModel($id)
	{
		$model=ReportHasProfile::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
		public function actionDelete($id)
	{
		$model=ReportHasProfile::model()->findByPk($id)->delete();
		if(!isset($_GET['ajax']))
		{
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('report'));
		}
	}
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='report-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
public function actionReportmgt()
	{
	  $model=new Users;

    
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];
    $this->render('usermgt',array('model'=>$model));
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
	
}
?>