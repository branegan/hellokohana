<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller {

	public function action_index(){
        if ($this->request->post('lasturl')){
            $content = View::Factory('news');
            $this->response->body($content);
            return;
        }
        $headerview = View::Factory('header');
        $headerview->menu = array('main','news','about us');
        $headerview->heading = 'News';
        $sidebar = View::Factory('sidebar');
        $content = View::Factory('news');
        $footer = View::Factory('footer');
        $this->response->body($headerview.$sidebar.$content.$footer);
	}

} // End Main 
