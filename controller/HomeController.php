<?php

namespace Controller;

class HomeController {
    public function index() {
        return [
            "view" => "home.php",
            "data" => [],
            "titrePage" => "Allocine TV"
        ];
    }
}
