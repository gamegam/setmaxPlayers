<?php

namespace gamegam\MaxPlayer\cmd;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;

class Maxcmd extends Command{

	public $main;
	public function __construct($main){
		parent::__construct("setmaxplayers", "");
		$this->setPermission("MaxPlayer.permission");
		$this->main = $main;
	}

	public function execute(CommandSender $p, string $commandLabel, array $args):void{
		$api = $this->main;
		$config = Server::getInstance()->getConfigGroup()->getConfigInt("max-players");
		if (! $this->testPermission($p)){
		}else{
			if (count($args) < 1){
				$api->msg($p, "nothing");
			}else{
				if (!is_numeric($args[0])){
					$api->msg($p, "not_number");
				}else{
					if ($args[0] < 1){
						$api->msg($p, "error");
					}else{
						if ($args[0] == $config){
							$api->msg($p, "isnumber");
						}else{
							$api->msg($p, "change", $args[0]);
							Server::getInstance()->getConfigGroup()->setConfigInt("max-players", $args[0]);
						}
					}
				}
			}
		}
	}
}
