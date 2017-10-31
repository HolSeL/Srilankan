<?php

/**
 * This is the model class for table "coffee".
 *
 * The followings are the available columns in table 'coffee':
 * @property integer $id_coffee
 * @property integer $id_marka
 * @property integer $id_nazvanie
 * @property integer $id_bag
 * @property string $text
 * @property string $foto_link
 */
class Coffee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'coffee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_marka, id_nazvanie, id_bag', 'numerical', 'integerOnly'=>true),
			array('text, foto_link', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_coffee, id_marka, id_nazvanie, id_bag, text, foto_link', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_coffee' => 'Id Coffee',
			'id_marka' => 'Id Marka',
			'id_nazvanie' => 'Id Nazvanie',
			'id_bag' => 'Id Bag',
			'text' => 'Text',
			'foto_link' => 'Foto Link',
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

		$criteria->compare('id_coffee',$this->id_coffee);
		$criteria->compare('id_marka',$this->id_marka);
		$criteria->compare('id_nazvanie',$this->id_nazvanie);
		$criteria->compare('id_bag',$this->id_bag);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('foto_link',$this->foto_link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Coffee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
