<?php
class MyCompany_MyModule_Adminhtml_MymodulebackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Ticket support"));
	   $this->renderLayout();
    }
	public function ticketreplyAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Ticket support"));
	   $this->renderLayout();
	   
	   if(isset($_REQUEST['submit']))
		{
			$db = Mage::getSingleton('core/resource')->getConnection('core_write');
			$tbl = $db->getTableName('MyModule');
			$time_now=mktime(date('h')+5,date('i')+30,date('s'));
			$date = date('d M Y h:i:s a', $time_now); 
			$c_time = $date;
		
			$status = "Completed";
			$sql = "update  ".$tbl." `status`,`r_time`) values('".$_REQUEST['fullname']."','".$_REQUEST['email']."','".$_REQUEST['orderid']."', '".$_REQUEST['request-type']."','".$_REQUEST['relatedfile']."','".$_REQUEST['message']."','".$status."', '".$c_time."','".$_REQUEST['CustomerId']."')";
			
			$sql = "UPDATE ".$tbl." SET `status`= '".$status."', `ReplyMsg`= '".$_REQUEST['ReplyMsg']."', `r_time` = '".$c_time."' WHERE id = '".$_REQUEST['t_id']."' ";  

			$db->query($sql);
			
			
		}
    }
    public function ticketpostAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Ticket support"));
	   $this->renderLayout();
    }
}
