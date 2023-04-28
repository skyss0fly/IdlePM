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
  
}
