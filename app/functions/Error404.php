<?php
namespace Functions;

use Vendor\View;

class Error404 {
    /**
     * Cache var
     */
    protected $user;
    /**
     * Allowed params after the slash
     * @var array
     */
    protected $params = ['user'];

    /**
     * @param string $value [Grab all after slash]
     */
    public function __construct(string $value) {    
        $path = pathinfo($value);
        $name = strtolower($path['dirname']);
        if (in_array($name, $this->params)) {
            $getParam = strip_tags($path['filename']);
            if ('user' === $name) {
                return new GetUser($getParam);
            }
        }
        return View::render('error');
    }
}
