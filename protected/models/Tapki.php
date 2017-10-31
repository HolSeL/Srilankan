<?php

/**
 * This is the model class for table "tapki".
 *
 * The followings are the available columns in table 'tapki':
 * @property integer $id_tapki
 * @property integer $id_marka
 * @property string $nazvinie
 * @property string $colour
 * @property string $text
 * @property string $foto_link
 * @property string $size
 */
class Tapki extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tapki';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_marka', 'numerical', 'integerOnly'=>true),
			array('nazvinie, colour, text, foto_link, size', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tapki, id_marka, nazvinie, colour, text, foto_link, size', 'safe', 'on'=>'search'),
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
            'Marka' => array(self::BELONGS_TO,'Marka',array('id_marka')),
            'Bag' => array(self::BELONGS_TO,'Bag',array('id_bag')),
            'Big' => array(self::BELONGS_TO,'Big',array('id_big')),
            'Gramm' => array(self::BELONGS_TO,'Gramm',array('id_gramm')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tapki' => 'ID',
			'id_marka' => 'Производитель',
			'nazvinie' => 'Модель',
			'colour' => 'Цвета',
			'text' => 'Описание',
			'foto_link' => 'Фото Link',
			'size' => 'Размер',
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

		$criteria->compare('id_tapki',$this->id_tapki);
		$criteria->compare('id_marka',$this->id_marka);
		$criteria->compare('nazvinie',$this->nazvinie,true);
		$criteria->compare('colour',$this->colour,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('foto_link',$this->foto_link,true);
		$criteria->compare('size',$this->size,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tapki the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
