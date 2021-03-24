<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employe_info".
 *
 * @property int $id
 * @property string|null $emp_name
 * @property string|null $department
 * @property string|null $dob
 * @property string|null $joining_date
 * @property string|null $emp_code
 * @property string|null $created_on
 */
class EmployeInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employe_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dob', 'joining_date', 'created_on'], 'safe'],
            [['emp_code'], 'string'],
            [['emp_name', 'department'], 'string', 'max' => 255],
            [['emp_code'],'unique'],
        ];
    } 
 
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_name' => 'Emp Name',
            'department' => 'Department',
            'dob' => 'Dob',
            'joining_date' => 'Joining Date',
            'emp_code' => 'Emp Code',
            'created_on' => 'Created On',
        ];
    }

  
}
