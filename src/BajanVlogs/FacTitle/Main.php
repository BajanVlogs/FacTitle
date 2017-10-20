<?php


namespace BajanVlogs\FacTitle;


use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerJoinEvent;


class Main extends PluginBase implements Listener {

    private $infac = array();
	
	
   public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->FactionsPro = $this->getServer()->getPluginManager()->getPlugin("FactionsPro");
        $this->getServer()->getLogger()->info("Faction Titles Enabled!");		
    }
	
	//public function onJoin(PlayerJoinEvent $ev) {
    //    $p = $ev->getPlayer();
	//	 $this->infac[] = $p->getName();
	//}
	// hack removed ^^
   public function onMove(PlayerMoveEvent $ev){
      $p = $ev->getPlayer();
	  $name = $p->getName();
						if(!$this->FactionsPro->isInPlot($p)){
							$id = array_search($p->getName(), $this->infac);
							unset($this->infac[$id]);
                        }else{
						if (!in_array("$name", $this->infac)) {
							 $x = floor($p->getX());
							 $y = floor($p->getY());
							 $z = floor($p->getZ());
							 $fac = $this->FactionsPro->factionFromPoint($x,$z);
							 $this->infac[] = $p->getName();
							 $title = "§9Now Entering ";
							 $subtitle = "§6" . $fac . " ";
							 $p->addTitle($title, $subtitle);
						}
					}
	 }
}

