<?php

/**
 * This is the model class for table "track".
 *
 * The followings are the available columns in table 'track':
 * @property integer $id
 * @property string $url
 * @property integer $length
 * @property string $count
 * @property string $likes
 * @property string $date_time
 * @property integer $status
 * @property string $track_album_id
 * @property integer $login_id
 *
 * The followings are the available model relations:
 * @property GenreHasTrack[] $genreHasTracks
 * @property Like[] $likes0
 * @property Myplaylist[] $myplaylists
 * @property RatingHasTrack[] $ratingHasTracks
 * @property TrackAlbum $trackAlbum
 * @property Login $login
 * @property TrackHasTrackComments[] $trackHasTrackComments
 */
class Track extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'track';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url, length, count, likes, date_time, status, track_album_id, login_id', 'required'),
			array('length, status, login_id', 'numerical', 'integerOnly'=>true),
			array('url', 'length', 'max'=>50),
			array('count, likes, track_album_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, url, length, count, likes, date_time, status, track_album_id, login_id', 'safe', 'on'=>'search'),
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
			'genreHasTracks' => array(self::HAS_MANY, 'GenreHasTrack', 'track_id'),
			'likes0' => array(self::HAS_MANY, 'Like', 'track_id'),
			'myplaylists' => array(self::MANY_MANY, 'Myplaylist', 'myplaylist_has_track(track_id, myplaylist_id)'),
			'ratingHasTracks' => array(self::HAS_MANY, 'RatingHasTrack', 'track_id'),
			'trackAlbum' => array(self::BELONGS_TO, 'TrackAlbum', 'track_album_id'),
			'login' => array(self::BELONGS_TO, 'Login', 'login_id'),
			'trackHasTrackComments' => array(self::HAS_MANY, 'TrackHasTrackComments', 'track_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'url' => 'Url',
			'length' => 'Length',
			'count' => 'Count',
			'likes' => 'Likes',
			'date_time' => 'Date Time',
			'status' => 'Status',
			'track_album_id' => 'Track Album',
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
		$criteria->compare('url',$this->url,true);
		$criteria->compare('length',$this->length);
		$criteria->compare('count',$this->count,true);
		$criteria->compare('likes',$this->likes,true);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('track_album_id',$this->track_album_id,true);
		$criteria->compare('login_id',$this->login_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Track the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
