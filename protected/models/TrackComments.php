<?php

/**
 * This is the model class for table "track_comments".
 *
 * The followings are the available columns in table 'track_comments':
 * @property integer $id
 * @property string $commnet
 * @property string $d_time
 * @property integer $active
 * @property integer $login_id
 *
 * The followings are the available model relations:
 * @property Login $login
 * @property TrackHasTrackComments[] $trackHasTrackComments
 */
class TrackComments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'track_comments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('d_time, active, login_id', 'required'),
			array('active, login_id', 'numerical', 'integerOnly'=>true),
			array('commnet', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, commnet, d_time, active, login_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'login' => array(self::BELONGS_TO, 'Login', 'login_id'),
			'trackHasTrackComments' => array(self::HAS_MANY, 'TrackHasTrackComments', 'track_comments_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'commnet' => 'Commnet',
			'd_time' => 'D Time',
			'active' => 'Active',
			'login_id' => 'Login',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('commnet',$this->commnet,true);
		$criteria->compare('d_time',$this->d_time,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('login_id',$this->login_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TrackComments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
