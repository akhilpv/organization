<?php

namespace common\models;

use Yii;
use yii\base\Model;

class CsvForm extends Model{
    public $file,$name,$department,$joiningdate,$dob,$empcode;
   
    public function rules(){
        return [
            [['file'],'required'],
            [['file'],'file','extensions'=>'csv','maxSize'=>1024 * 1024 * 5],
            [['name','department','joiningdate','dob','empcode'],'integer'],
            [['name','department','joiningdate','dob','empcode'],'required'],
        ];
    } 
   
    public function attributeLabels(){
        return [
            'file'=>'Select File',
            'name'=>'Enter the column number of name',
            'department'=>'Enter the column number of department',
            'joiningdate'=>'Enter the column number of joining date',
            'dob'=>'Enter the column number of date of birth',
            'empcode'=>'Enter the column number of employe code'
        ];
    }
   
}
?>