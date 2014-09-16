<?php
class Ajaxload_Productload_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo "Hello Developer...";
        $this->loadLayout();
        $this->renderLayout();
    }
}