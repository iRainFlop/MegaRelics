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
use pocketmine\item\Armor;
use pocketmine\level\sound\PopSound;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;
use PiggyCustomEnchants\Main as CEMain;
use PiggyCustomEnchants\CustomEnchants\CustomEnchants;
use pocketmine\player\Inventory;


#items
use pocketmine\item\{Item, ItemFactory};

#nbt
use pocketmine\nbt\{NBT, tag\CompoundTag, tag\IntTag, tag\ListTag, tag\StringTag};


#tile
use pocketmine\tile\{Tile, Chest};


#math
use pocketmine\math\Vector3;

#inventory
use pocketmine\inventory\ChestInventory;

class ICRelics extends PluginBase implements Listener { 

public function onEnable() {
		
		$this->getLogger()->info("Relics Enabled");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		
	}

public function onBreak(BlockBreakEvent $event) {

$player = $event->getPlayer();
$name = $player->getName();
$chance = mt_rand(1, 30);
$drops = $event->getItem();
$item1 = Item::get(54, 0, 1);
$item2 = Item::get(0, 0, 10);
$drops = [$item1, $item2];



  $nbt = new CompoundTag("BlockEntityTag", [
            new ListTag("Items", [Item::get(
            Item::GRASS, 0, 2)->nbtSerialize(0),
            Item::get(Item::DIAMOND, 0, 4)->nbtSerialize(3)])
            ]);

          $chest = ItemFactory::get(Block::CHEST, 0, 1);
          $chest->setNamedTagEntry($nbt);
		  $chest->setCustomName(TF::BOLD . TF::GRAY . "Common Relic");
		  $chest->setLore([
		  "",
		  TF::BOLD . TF::RED . $name . TF::RESET . TF::GRAY . " you have founded a",
		  TF::BOLD . "Common Relic" . TF::RESET . TF::GRAY . "!" . " To obtain place the" . TF::BOLD . " Common Relic",
		  TF::RESET . TF::GRAY . "down."
          



if($event->getBlock()->getId() === 1) {
if(mt_rand(1, 30) === 15) {
$player->sendMessage("testtf");
$event->setDrops($chest);

}


}
}
}



