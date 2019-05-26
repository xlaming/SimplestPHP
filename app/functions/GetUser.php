<?php
namespace Functions;

use Vendor\View;
use Classes\User;

class GetUser {
    /**
     * Cache var
     */
    protected $user;

    /**
     * @param string $name [Get user name]
     */
    public function __construct(string $name) {
        $this->user = new User();
        $newName = $this->user->addSurname($name);
        return View::plain('Your name is: ' . $newName);
    }
}
