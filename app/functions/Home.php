<?php
namespace Functions;

use Vendor\View;

class Home {
    /**
     * Run the index
     */
    public function index() {
        $getPage = View::get('home');
        return View::render('layout/main', [
            'title' => 'Homepage', 
            'page' => $getPage
        ]);
    }
}
