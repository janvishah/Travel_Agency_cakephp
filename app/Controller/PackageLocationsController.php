<?php 
class PackageLocationsController extends AppController 
{
	var $helpers = array('Html', 'Form');
	function index()
	{
	}
	function Destination()
	{
		$this->set('packages', $this->PackageLocation->find('all'));
	}
	function Tour()
	{		
		$id1=$this->request->query['id'];
		$this->set('packages', $this->PackageLocation->find('all', array(
        'conditions' => array('Id' => $id1))));		
		$this->set('integer', $id1);
		$this->loadModel('Tour');		
		$this->set('tours',$this->Tour->find('all', array('conditions' => array('Package_Location_Id' => $id1))));		
		$this->set('tour_place_one',$this->TourPlace->find('all'));		
	}
}
?>