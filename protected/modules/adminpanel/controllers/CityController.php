<?php
class CityController extends controller
{
	public function actionCitymgt()
	{
		$dataProvider=new CActiveDataProvider('Cities');
		$model=new Cities('search');
		$model->unsetAttributes(); 
		if(isset($_GET['Cities']))
		$model->attributes=$_GET['Cities'];
		$this->render('citymgt',array('model'=>$model,'dataProvider'=>$dataProvider));
	}
	public function actionAddcity()
	{
		$country_id=$_POST['country'];
		$cityname=$_POST['cityname'];
		$model=new Cities;
		$model->country_id=$country_id;
		$model->name=$cityname;
		//CVarDumper::dump($model->attributes,10,1);die;
		 if($model->save())
		 {
		   echo "Record Added Success Fully";
		 }
	}
	public function actionDelete($id)
	{
	$model=Cities::model()->findByPk($id)->delete();
	if(!isset($_GET['ajax']))
	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	public function actionLoadcountry()
	{
	$criteria = new CDbCriteria;
	$criteria->order = 'name';
	$model=Countries::model()->findAll($criteria);
		foreach($model as $m)
		{
		echo "<option value='".$m->id."'>".$m->name."</option>";
		}
	}
}