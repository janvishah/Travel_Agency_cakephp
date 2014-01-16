<?php
class TourPlace extends AppModel {
	public $belongsTo = array(
        'Tour', 'Place'
    );
}
?>