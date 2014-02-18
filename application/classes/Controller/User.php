<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {
 
    public function action_register()
    {
        $user = Model::factory('user');
 
        $validation = Validation::factory($this->request->post())
            ->rule('username', 'not_empty')
            ->rule('username', 'regex', array(':value', '/^[a-z_.]++$/iD'))
            ->rule('username', array($user, 'unique_username'))
 
            ->rule('password', 'not_empty')
            ->rule('password', 'min_length', array(':value', 6))
            ->rule('confirm',  'matches', array(':validation', ':field', 'password'))
 
            ->rule('use_ssl', 'not_empty')
            ->rule('use_ssl', 'in_array', array(':value', array('yes', 'no')));
 
        if ($validation->check())
        {
            // Data has been validated, register the user
            $user->register($this->request->post());
 
            // Always redirect after a successful POST to prevent refresh warnings
            $this->redirect('user/profile', 303);
        }
 
        // Validation failed, collect the errors
        $errors = $validation->errors('user');
 
        // Display the registration form
        $this->response->body(View::factory('user/register'))
            ->bind('post', $this->request->post())
            ->bind('errors', $errors);
    }
 
}
