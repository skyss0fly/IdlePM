<?php

namespace skyss0fly\IdlePM;

use pocketmine\Plugin\PluginBase;

class Main extends PluginBase {
   private commandmode

  public function onLoad(): void {
  $this->getLogger()->info("Loading The Idle Of the Century")
		$this->saveDefaultConfig();
	}

  public function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->loadConfig();
$this->getLogger()->info("Idle Has Loaded. use /idle for list of commands and setup")
    }
  
    private function loadConfig(): void {
        $config = $this->getConfig();
        $this->commandmode = $config->get("commandmode", []);
      
    }
  
 class LivingThing {
	def __init__(self):
		self.name = name
		self.health = health
	        self.stamina = 100
	def heal(self):
	        self.health = self.health + 1
	def tire(self):
	        self.stamina = 100
	def hurt(self):
	        self.health = self.health - 1
	}
class Player(LivingThing):
	def __init__(self,monster):
		self.name = input('Name?')
		self.health = 15
		self.stamina = 100
	def idle():
		$player->sendMessage('Your List of commands are: Coming Soon')
  
  def fight():
  $player->sendMessage(' you have fought the monster')
	
}
