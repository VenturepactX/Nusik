<?php

/**
 * This is the model class for table "track_album".
 *
 * The followings are the available columns in table 'track_album':
 * @property string $id
 * @property string $name
 * @property string $album_info
 * @property string $image
 * @property string $release_date
 * @property integer $status
 * @property integer $login_id
 *
 * The followings are the available model relations:
 * @property Track[] $tracks
 * @property Login $login
 */
class TrackAlbum extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	 
         public $imagePath = 't_albums/';
        public $imagePathThumb = 't_albums/thumb/';
	public function tableName()
	{
		return 'track_album';
	}
	            protected function beforeSave() {
                  if ($this->image instanceof CUploadedFile) 
                  {
                      $this->image = time() . "." . $this->image->getExtensionName();
                  }
 
  return parent::beforeSave();
}


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, release_date, status, login_id', 'required'),
			array('status, login_id', 'numerical', 'integerOnly'=>true),
			array('name, image', 'length', 'max'=>150),
			array('album_info', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, album_info, image, release_date, status, login_id', 'safe', 'on'=>'search'),
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
			'tracks' => array(self::HAS_MANY, 'Track', 'track_album_id'),
			'login' => array(self::BELONGS_TO, 'Login', 'login_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'album_info' => 'Album Info',
			'image' => 'Image',
			'release_date' => 'Release Date',
			'status' => 'Status',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('album_info',$this->album_info,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('release_date',$this->release_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('login_id',$this->login_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TrackAlbum the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
