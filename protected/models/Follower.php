<?php

/**
 * This is the model class for table "follower".
 *
 * The followings are the available columns in table 'follower':
 * @property integer $id
 * @property integer $users_id
 * @property integer $artists_profile_id
 * @property integer $is_liked
 * @property integer $is_shared
 * @property integer $is_followed
 * @property integer $status
 * @property string $date_time
 *
 * The followings are the available model relations:
 * @property Users $users
 * @property ArtistsProfile $artistsProfile
 */
class Follower extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'follower';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('users_id, artists_profile_id', 'required'),
			array('users_id, artists_profile_id, is_liked, is_shared, is_followed, status', 'numerical', 'integerOnly'=>true),
			array('date_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, users_id, artists_profile_id, is_liked, is_shared, is_followed, status, date_time', 'safe', 'on'=>'search'),
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
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
			'artistsProfile' => array(self::BELONGS_TO, 'ArtistsProfile', 'artists_profile_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'users_id' => 'Users',
			'artists_profile_id' => 'Artists Profile',
			'is_liked' => 'Is Liked',
			'is_shared' => 'Is Shared',
			'is_followed' => 'Is Followed',
			'status' => 'Status',
			'date_time' => 'Date Time',
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
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('artists_profile_id',$this->artists_profile_id);
		$criteria->compare('is_liked',$this->is_liked);
		$criteria->compare('is_shared',$this->is_shared);
		$criteria->compare('is_followed',$this->is_followed);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_time',$this->date_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Follower the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
