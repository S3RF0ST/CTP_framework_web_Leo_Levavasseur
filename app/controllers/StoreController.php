<?php
namespace controllers;

use Ubiquity\attributes\items\router\Route;
use models\Section;
 /**
  * Controller StoreController
  */
class StoreController extends \controllers\ControllerBase{

	public function index(){
        $this->loadView("StoreController/index.html",["message"=>"msg"]);
	}
}
