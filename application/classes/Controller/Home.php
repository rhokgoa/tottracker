<?php defined('SYSPATH') or die('No direct script access.');

class Controller_home extends Controller {
    
    public function action_index(){
        $session = Session::instance();
//        print_r($_SESSION);
        if(!isset($_SESSION['logged_in']) or !isset($_SESSION['username']) or $_SESSION['logged_in']!=true ){
            HTTP::redirect('welcome/login');
            echo 'redirect unsuccessful';
        }
        print_r($_POST);        
        if(!empty($_POST)){
            $children =Model::factory('children');
//            print_r($_POST);
            switch($_POST['place']){
            case 'taluka': $details = $children->get_children_taluka(); break;
            case 'district': $details = $children->get_children_district(); break;
            case 'state': $details = $children->get_children_state(); break;
            }
//            print_r($details);
            $view = View::factory('home')->bind('details',$details);
            $this->response->body($view);

        }else{
            $view = View::factory('home');
            $this->response->body($view);
        }
    }
    
    

}