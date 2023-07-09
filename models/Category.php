<?php

class Category {
    private $icon;
    private $name;

    public function __construct($icon, $name) {
        $this->setIcon($icon);
        $this->setName($name);
    }

    public function getIcon() {
        return $this->icon;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}