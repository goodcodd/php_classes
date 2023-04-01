<?php

namespace NewHomework\App\Classes;

class User {
    // Property
    public $name;
    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

?>