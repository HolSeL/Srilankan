<?php

/**
 * This is the model class for table "marka".
 *
 * The followings are the available columns in table 'marka':
 * @property integer $id_marka
 * @property string $marka
 * @property integer $yroven
 */
class Marka extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marka';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('yroven', 'numerical', 'integerOnly'=>true),
			array('marka', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_marka, marka, yroven', 'safe', 'on'=>'search'),
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
			'id_marka' => 'ID',
			'marka' => 'Производитель',
			'yroven' => 'Продукция',
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

		$criteria->compare('id_marka',$this->id_marka);
		$criteria->compare('marka',$this->marka,true);
		$criteria->compare('yroven',$this->yroven);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function all()
    {
        return CHtml::listData(self::model()->findAll(array('order' => 'marka ASC')),'id_marka','marka');
    }
    /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Marka the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
