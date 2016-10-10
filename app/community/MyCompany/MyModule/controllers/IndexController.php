<?php

class MyCompany_MyModule_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("MyModule"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("mymodule", array(
                "label" => $this->__("MyModule"),
                "title" => $this->__("MyModule")
		   ));

      $this->renderLayout(); 
	  
    }
	public function ticketstatusAction ()
	{	  $this->loadLayout();
         	 $this->getLayout()->getBlock("head")->setTitle($this->__("MyModule"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("mymodule", array(
                "label" => $this->__("MyModule"),
                "title" => $this->__("MyModule")
		   ));
		$this->renderLayout(); 
    }
    public function replyAction ()
	{	  $this->loadLayout();
         	 $this->getLayout()->getBlock("head")->setTitle($this->__("MyModule"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("mymodule", array(
                "label" => $this->__("MyModule"),
                "title" => $this->__("MyModule")
		   ));
		$this->renderLayout(); 
    }
    
    public function postAction ()
	{	
		$this->loadLayout();
		$this->renderLayout(); 
		if(isset($_REQUEST['submit']))
		{
			$db = Mage::getSingleton('core/resource')->getConnection('core_write');
			$tbl = $db->getTableName('MyModule');
			$time_now=mktime(date('h')+5,date('i')+30,date('s'));
			$date = date('d M Y h:i:s a', $time_now); 
			$c_time = $date;
		
			$status = "Pending";
			$sql = "insert into ".$tbl." (`fullname`,`email`,`orderid`,`request_type`,`relatedfile`,`message`,`status`,`c_time`,`CustomerId`) values('".$_REQUEST['fullname']."','".$_REQUEST['email']."','".$_REQUEST['orderid']."', '".$_REQUEST['request-type']."','".$_REQUEST['relatedfile']."','".$_REQUEST['message']."','".$status."', '".$c_time."','".$_REQUEST['CustomerId']."')";
			$db->query($sql);
			
			$this->_redirect('mymodule/index/ticketstatus');
			return;
		}
		
    }
}
