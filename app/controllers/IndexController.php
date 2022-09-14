<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize();
    }
    public function indexAction()
    {
       // $this->tag->prependTitle('Anika Machinery:: Generator service provider in Bangladesh');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);               
    }
    public function servicesAction()
    {
       // $this->tag->prependTitle('Services:: Generator service provider in Bangladesh');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);            	
        $this->view->pick('index/services');
    }    
    public function aboutusAction()
    {
        //$this->tag->prependTitle('Aboutus::Generator service provider in Bangladesh');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);            	
        $this->view->pick('index/aboutus');
    }    
    public function contactAction()
    {
       // $this->tag->prependTitle('Contact:: Generator service provider in Bangladesh');
        $description = "Quick Contact with Anika Machinery and get perfect location.";
        $this->view->setVar("dynadesc", $description);
        $keywords = "location, contact, map, office location";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);                
        $this->view->pick('index/contactus');
    }
   public function sendmailAction()
    {   
ini_set('sendmail_from', 'anikamachinery@gmail.com');
$from = "anikamachinery@gmail.com";
$to = "2munax@gmail.com";
$subject = "Latest Message";
$txt = "Hello world!";

$headers .= 'From: Anika Machinery anikamachinery@gmail.com' . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'Return-Path: ' . $from . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-type: text/html; charset=utf-8' . "\r\n" .
    'Content-Transfer-Encoding: 8bit' .
    "X-Priority: 1 (Highest)' \r\n" . 
    "X-MSMail-Priority: High \r\n" .
    "Importance: High\r\n" .
    'X-Mailer: PHP/' . phpversion();

$post = mail($to, $subject, $txt, $headers, "-f <anikamachinery@gmail.com>");
if($post == true){echo("Message Send");}else{echo("Error Sending Mail");}
    } 

 	public function getphoneAction()
	{
		$header = apache_request_headers();
		if(isset($header['x-up-calling-line-id']) && !empty($header == 'x-up-calling-line-id'))
		{
			echo($phone_number = $header['x-up-calling-line-id']);
		}
		else
		{
			echo($error_phone_number = "Phone Number Missing...!");
		}	
	}    

    
#End        
}