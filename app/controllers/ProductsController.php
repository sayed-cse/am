<?php
class ProductsController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize();
    }
    public function indexAction()
    {
       // $this->tag->prependTitle('Products:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);       
    }
    public function quotationAction()
    {
     //   $this->tag->prependTitle('Products:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/quotation');
    }
    public function fujianAction()
    {
    //    $this->tag->prependTitle('Fujian:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex); 
        $this->view->pick('products/fujian');
    }
    public function deutzAction()
    {
     //   $this->tag->prependTitle('Deutz:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/deutz');   	
    }
    public function perkinsAction()
    {
    //    $this->tag->prependTitle('Perkins:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex); 
        $this->view->pick('products/perkins');    	
    }
    public function cumminsAction()
    {
     //   $this->tag->prependTitle('Cummins:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex); 
        $this->view->pick('products/cummins');    	
    }
    public function hondaAction()
    {
    //    $this->tag->prependTitle('Honda:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/honda');   	
    }
    public function hyundaiAction()
    {
    //    $this->tag->prependTitle('Hyundai:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/hyundai');   	
    }                    
    public function sparesAction()
    {
    //    $this->tag->prependTitle('Spare Parts:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/spares');      
    }  
    public function catalogAction()
    {
    //    $this->tag->prependTitle('Catalog:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/spares');      
    }   
    public function fujianQuoteAction()
    {
    //    $this->tag->prependTitle('Quotation:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/fujianq');        
    } 
    public function cumminsQuoteAction()
    {
    //    $this->tag->prependTitle('Quotation:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/cumminsq');        
    }  
    public function deutzQuoteAction()
    {
    //    $this->tag->prependTitle('Quotation:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/deutzq');        
    }
    public function perkinsQuoteAction()
    {
    //    $this->tag->prependTitle('Quotation:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/perkinsq');        
    }
    public function hondaQuoteAction()
    {
    //    $this->tag->prependTitle('Quotation:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/hondaq');        
    } 
    public function hyundaiQuoteAction()
    {
    //    $this->tag->prependTitle('Quotation:: Anika Machinery');
        $description = "Anika Machinery is best generator service provider in Bangladesh. Importing Better Quality Open &amp; Silent type generators. All Products maintain manufacturing standard like CE, NEMA, EPA Tire 3, EU, TALUFT, IEC etc";
        $this->view->setVar("dynadesc", $description);
        $keywords = "Anika Machinery, Generator, Gasoline, Petrol, Diesel, Genset, Canopy, Sound proof, Silent, Open, Engine, Alternator, Fujian, Deutz, Perkins, Cummins, Lovol, Honda, Hyundai, Weichai, Pump, Motor, Spare";
        $this->view->setVar("dynakey", $keywords);
        $metaIndex = "index,follow";
        $this->view->setVar("dynarobot", $metaIndex);
        $this->view->setVar("dynagooglebot", $metaIndex);  
        $this->view->pick('products/hyundaiq');        
    }                     
}