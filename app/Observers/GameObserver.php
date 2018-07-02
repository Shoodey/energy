<?php

namespace App\Observers;

use App\Entities\Game;

class GameObserver
{
    /**
     * @param Game $game
     * @return string
     */
    public function creating(Game $game)
    {
        if (!$game->name)
            $game->name = $this->setGameName($game);
    }

    private function setGameName($game)
    {
        $name = $game->user->username . "'s game";
        $gameNames = $this->getRelatedSlugs($game->user, $name, $game->id);

        // If we haven't used it before then we are all good.
        if (!$gameNames->contains('name', $name)) {
            return $name;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 2; $i <= 20; $i++) {
            $newName = $name . ' #' . $i;
            if (!$gameNames->contains('slug', $newName)) {
                return $newName;
            }
        }
    }

    private function getRelatedSlugs($user, $name, $id = null)
    {
        return $user->games()->where('name', 'like', $name . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}