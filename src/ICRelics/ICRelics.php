<?php

namespace ICRelics;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;
use pocketmine\inventory\PlayerInventory;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\item\Armor;
use pocketmine\level\sound\PopSound;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;
use PiggyCustomEnchants\Main as CEMain;
use PiggyCustomEnchants\CustomEnchants\CustomEnchants;
use pocketmine\player\Inventory;

class ICRelics extends PluginBase implements Listener { 

public function onEnable() {
		
		$this->getLogger()->info("Relics Enabled");
		 
		
	}

public function onBreak(BlockBreakEvent $event) {

$player = $event->getPlayer();
$chance = mt_rand(1, 30);
$drops = $event->getItem();
$item1 = Item::get(54, 0, 1);
$item2 = Item::get(55, 0, 10);
$drops = [$item1, $item2];
$drops->setCustomName("Hi");


if($event->getBlock()->getId() === 1) {
if(mt_rand(1, 30) === 15) {
$player->sendMessage("HI");
$event->setDrops($drops);

}
}
}
}



