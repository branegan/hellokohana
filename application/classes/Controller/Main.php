<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller {

	public function action_index()
    {
        if ($this->request->post('lasturl')){
            $content = View::Factory('content');
            $this->response->body($content);
            return;
        }
        $headerview = View::Factory('header');
        $headerview->menu = array('main','news','about us');
        $headerview->heading = 'Main';
        $sidebar = View::Factory('sidebar');
        $content = View::Factory('content');
        $footer = View::Factory('footer');
        $this->response->body($headerview.$sidebar.$content.$footer);
	}

} // End Main 
