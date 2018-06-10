<?php

namespace NawafPlugin;

use pocketmine\plugin\PluginBase;


class BanTime extends PluginBase {

   public function onEnable(){
       $this->getLogger()->info("Time Ban Plugin Its Enabled");
       
   }
   
   public function onCommand(\pocketmine\command\CommandSender $sender, \pocketmine\command\Command $command, string $label, string $args) : bool {
       if($args[0] == "banTime"){
            foreach ($this->getAPI($sender)->getCommandos() as $p){
            if($args[1] !== $p){
            $sender->sendMessage(join($args, " : "));
            }
          }
       }
   }
   
   public function getAPI($name){
       if(!is_string($name)){
       return new API($name->getName());
       }else{
       return FALSE;
       }
       
   }
}
?>
