<?php

declare(strict_types=1);

namespace Tinajero\Ember\Forms;

use form\SimpleForm;
use pocketmine\player\Player;

class Modes extends SimpleForm{
    
    protected function title():string{
        return 'FFA';
    }

    protected function content():string{
        return 'Select a gamemode';
    }

    protected function buttons():array{
        return ['FreeForAll 1', 'FreeForAll 2'];
    }
    
    protected function onClickButton(Player $player, int $button):void{
        switch ($button) {
            case 0:
                $player->sendMessage("Mode 1");
                break;
            case 1:
                $player->sendMessage("Mode 2");
                break;
        }
    }

    protected function onClose(Player $player):void{
    }
}
