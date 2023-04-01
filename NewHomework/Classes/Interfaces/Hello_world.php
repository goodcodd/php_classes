<?php

namespace NewHomework\App\Classes\Interfaces;

interface  People {
    public function makeSound();
}
class  Hello_world implements People {
    public function makeSound() {
        echo "Holidays!!!";
    }
}


