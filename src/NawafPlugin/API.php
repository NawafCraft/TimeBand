<?php

namespace NawafPlugin;

class API extends Base {
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getCommandos(){
        return $this->commandsinfo;
    }
    
    public function getPlayerBan(){
        return;
    }
    
    public function getTimeBan(){
        return;
    }
    
}
?>
