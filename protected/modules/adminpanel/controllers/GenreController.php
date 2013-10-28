<?php
class GenreController extends Controller
{
	public function actionGenremgt()
	{
	$model=new Genres;
	$this->render('genremgt',array('model'=>$model));
	}
}