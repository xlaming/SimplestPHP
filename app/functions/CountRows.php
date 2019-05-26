<?php
namespace Functions;

use Vendor\View;
use Vendor\Database;

class CountRows {
    /**
     * Run the index
     */
    public function index() {
        $link = new Database();
        $count = $link->rowCount("users");
        return View::plain($count);
    }
}
