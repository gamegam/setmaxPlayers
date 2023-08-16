<?php

namespace gamegam\MaxPlayer;

use gamegam\MaxPlayer\cmd\Maxcmd;
use gamegam\MaxPlayer\Language\english;
use gamegam\MaxPlayer\Language\KR;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class MaxPlayer extends PluginBase implements Listener{

  public Config $config;
  
	public function onEnable() : void{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getCommandMap()->registerAll("MaxPlayer",
		[new Maxcmd($this)]);

		$this->saveResource("config.yml");
		$this->config = (new Config($this->getDataFolder() . "config.yml", Config::YAML));
	}

	public function msg(CommandSender $p, string $msg, $array = null){
		$new = new english();
		if ($this->config->get("Language") == "Korean"){
			$new = new KR();
		}
		$a = $new->getMessahe($msg);
		$b = str_replace("{0}", "{$array}", $a);
		$p->sendMessage($b);
	}
}
