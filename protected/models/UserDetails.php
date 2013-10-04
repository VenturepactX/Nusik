<?php

/**
 * This is the model class for table "user_details".
 *
 * The followings are the available columns in table 'user_details':
 * @property integer $id
 * @property string $reg_date
 * @property string $mod_date
 * @property string $first_name
 * @property string $last_name
 * @property string $date_of_birth
 * @property string $mobile
 * @property string $zip
 * @property string $gender
 * @property string $image
 * @property integer $status
 * @property integer $login_id
 * @property integer $city_id
 * @property integer $country_id
 *
 * The followings are the available model relations:
 * @property ArtDetails[] $artDetails
 * @property Myplaylist[] $myplaylists
 * @property ProfileCommentsHasLogin[] $profileCommentsHasLogins
 * @property City $city
 * @property Country $country
 * @property Login $login
 */
class UserDetails extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
     
         public $imagePath = 'profile/';
        public $imagePathThumb = 'profile/thumb/';

            public function tableName()
            {
                return 'user_details';
            }
                protected function beforeSave() {
                  if ($this->image instanceof CUploadedFile) 
                  {
                      $this->image = md5($this->image->getName()) . "." . $this->image->getExtensionName();
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
            array('reg_date, mobile, gender, status, login_id, city_id, country_id', 'required'),
            array('status, login_id, city_id, country_id', 'numerical', 'integerOnly'=>true),
            array('first_name, last_name, mobile, zip, image', 'length', 'max'=>45),
            array('gender', 'length', 'max'=>3),
            array('mod_date, date_of_birth', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, reg_date, mod_date, first_name, last_name, date_of_birth, mobile, zip, gender, image, status, login_id, city_id, country_id', 'safe', 'on'=>'search'),
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
            'artDetails' => array(self::HAS_MANY, 'ArtDetails', 'user_details_id'),
            'myplaylists' => array(self::HAS_MANY, 'Myplaylist', 'user_details_id'),
            'profileCommentsHasLogins' => array(self::HAS_MANY, 'ProfileCommentsHasLogin', 'user_details_id'),
            'city' => array(self::BELONGS_TO, 'City', 'city_id'),
            'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
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
            'reg_date' => 'Reg Date',
            'mod_date' => 'Mod Date',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'date_of_birth' => 'Date Of Birth',
            'mobile' => 'Mobile',
            'zip' => 'Zip',
            'gender' => 'Gender',
            'image' => 'Image',
            'status' => 'Status',
            'login_id' => 'Login',
            'city_id' => 'City',
            'country_id' => 'Country',
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
        $criteria->compare('reg_date',$this->reg_date,true);
        $criteria->compare('mod_date',$this->mod_date,true);
        $criteria->compare('first_name',$this->first_name,true);
        $criteria->compare('last_name',$this->last_name,true);
        $criteria->compare('date_of_birth',$this->date_of_birth,true);
        $criteria->compare('mobile',$this->mobile,true);
        $criteria->compare('zip',$this->zip,true);
        $criteria->compare('gender',$this->gender,true);
        $criteria->compare('image',$this->image,true);
        $criteria->compare('status',$this->status);
        $criteria->compare('login_id',$this->login_id);
        $criteria->compare('city_id',$this->city_id);
        $criteria->compare('country_id',$this->country_id);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return UserDetails the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}