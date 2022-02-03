<?php

namespace App\Controllers;

class MyHome extends BaseController
{
    public function index()
    { 
        return view('welcome_message');
    }

    public function view($page = 'welcome')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('pages/' . $page, $data);
    }
}