<?php

declare(strict_types=1);

namespace Tinajero\Ember\Forms;

use form\SimpleForm;
use pocketmine\player\Player;
use Tinajero\Ember\SQL;

class Modes extends SimpleForm{
    
    protected function title():string{
        return 'Ember';
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
                $prefix = SQL::getPrefix();
                $player->sendMessage($prefix . "Mode 1");
                break;
            case 1:
                $prefix = SQL::getPrefix();
                $player->sendMessage($prefix . "Mode 2");
                break;
        }
    }

    /* When player closes the form, this function will be executed */
    protected function onClose(Player $player):void{
        // Your code goes here...
    }
}