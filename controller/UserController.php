<?php
/**
 * This is User controller that handle all the user level actions
 */

 class UserController extends Controller{
     function __construct(){
         parent::__construct();
     }


     public function index(){
            
            $user = new UserModel();
            $this->view->users = $user->getAll(); 
            $this->view->render("user/index");

     }
 }