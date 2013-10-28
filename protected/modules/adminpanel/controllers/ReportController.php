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
}
?>