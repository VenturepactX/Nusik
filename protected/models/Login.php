<?php

/**
 * This is the model class for table "login".
 *
 * The followings are the available columns in table 'login':
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $display_name
 * @property string $date_time
 * @property integer $status
 * @property integer $roles_id
 *
 * The followings are the available model relations:
 * @property Albums[] $albums
 * @property Firstfan[] $firstfans
 * @property Like[] $likes
 * @property Roles $roles
 * @property News[] $news
 * @property PAlbumComments[] $pAlbumComments
 * @property ProfileCommentsHasLogin[] $profileCommentsHasLogins
 * @property RatingHasTrack[] $ratingHasTracks
 * @property Track[] $tracks
 * @property TrackAlbum[] $trackAlbums
 * @property TrackComments[] $trackComments
 * @property UserDetails[] $userDetails
 * @property Userlog[] $userlogs
 */
class Login extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'login';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password, display_name, roles_id', 'required'),
			array('status, roles_id', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>100),
			array('password', 'length', 'max'=>200),
			array('display_name', 'length', 'max'=>45),
			array('date_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, password, display_name, date_time, status, roles_id', 'safe', 'on'=>'search'),
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
			'albums' => array(self::HAS_MANY, 'Albums', 'login_id'),
			'firstfans' => array(self::HAS_MANY, 'Firstfan', 'login_id'),
			'likes' => array(self::HAS_MANY, 'Like', 'login_id'),
			'roles' => array(self::BELONGS_TO, 'Roles', 'roles_id'),
			'news' => array(self::HAS_MANY, 'News', 'login_id'),
			'pAlbumComments' => array(self::HAS_MANY, 'PAlbumComments', 'login_id'),
			'profileCommentsHasLogins' => array(self::HAS_MANY, 'ProfileCommentsHasLogin', 'login_id'),
			'ratingHasTracks' => array(self::HAS_MANY, 'RatingHasTrack', 'login_id'),
			'tracks' => array(self::HAS_MANY, 'Track', 'login_id'),
			'trackAlbums' => array(self::HAS_MANY, 'TrackAlbum', 'login_id'),
			'trackComments' => array(self::HAS_MANY, 'TrackComments', 'login_id'),
			'userDetails' => array(self::HAS_MANY, 'UserDetails', 'login_id'),
			'userlogs' => array(self::HAS_MANY, 'Userlog', 'login_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'password' => 'Password',
			'display_name' => 'Display Name',
			'date_time' => 'Date Time',
			'status' => 'Status',
			'roles_id' => 'Roles',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('display_name',$this->display_name,true);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('roles_id',$this->roles_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Login the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
