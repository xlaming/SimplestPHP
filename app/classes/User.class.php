<?php
namespace Classes;

class User {
    /**
     * It is the surname to be added in the rest of the name
     * @var string
     */
    protected $surname = 'King';
    
    /**
     * This function just adds surname to the name
     * 
     * @param $name string User name
     * @return string Adds surname to name
     */
    public function addSurname(string $name): string {
        return sprintf(L_YOUR_NAME, $name, $this->surname);
    }
}
