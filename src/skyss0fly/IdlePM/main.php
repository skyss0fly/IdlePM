<?php

namespace skyss0fly\IdlePM;

use pocketmine\Plugin\PluginBase;

class Main extends PluginBase {
   private commandsmode

  public function onLoad(): void {
  $this->getLogger()->info("Loading The Idle Of the Century")
		$this->saveDefaultConfig();
	}

  public function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->loadConfig();
    }
  
    private function loadConfig(): void {
        $config = $this->getConfig();
        $this->commandsmode = $config->get("commandsmode", []);
      
    }
  
}
