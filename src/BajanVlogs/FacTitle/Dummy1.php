<?php


namespace BajanVlogs\FacTitle;



use pocketmine\Server;


use pocketmine\Player;



use BajanVlogs\FacTitle\Main;







class Dummy {




   public function __construct(Main $main) {


        $this->main = $main;


        $this->server = $main->getServer()


    }




}
