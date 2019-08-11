<?php
namespace VoidTP\Main;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\EntityDamageEvent;

class Main extends PluginBase {
  
	public function onLoad() {
		$this->getLogger()->info("VoidTP loaded!");
	}
  
	public function onEnable() {
		$this->getLogger()->info("VoidTP enabled!");
	}
  
	public function onDisable() {
		$this->getLogger()->info("VoidTP disabled!");
	}
  
	public function getCause() {
		return $this->cause;
	}
	
	public function isDeathCustom($cause = null) {
		if($cause instanceof EntityDamageEvent) {
			if($cause->getCause() == EntityDamageEvent::CAUSE_VOID){
					$player->teleport($this->level->getSpawn());
					$player->sendMessage("You have been sent to spawn!");
			}
		}
	}
}
