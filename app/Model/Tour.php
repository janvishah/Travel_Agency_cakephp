<?php
class Tour extends AppModel {
	 public $hasMany = array(
        'TourPlace'
    );
	public $hasOne = array(
        'Place' => array(
            'className' => 'Place',
            'foreignKey' => 'Id'));
}
?>