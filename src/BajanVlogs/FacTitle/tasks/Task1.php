<?php

namespace BajanVlogs\FacTitle\tasks;

use pocketmine\Server;

use pocketmine\schedulerPluginTask;

use pocketmine\Player;

use BajanVlogs\FacTitle\Main;







class Task1 extends PluginTask {




   public function __construct(Main $main) {


        parent::__construct($main);


        $this->main = $main;


        $this->server = $main->getServer();


    }




   public function onRun(int $tick) {


        $this->main->getLogger()->debug('Task ' . get_class($this) . ' is running on $tick'); 


    }




}
