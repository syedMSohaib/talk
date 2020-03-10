<?php

namespace Nahid\Talk\Participants;

use SebastianBerc\Repositories\Repository;

class ParticipantRepository extends Repository
{
    /*
     * this method is default method for repository package
     *
     * @return  \Nahid\Talk\Conersations\Conversation
     * */
    public function takeModel()
    {
        return Participant::class;
    }

    /*
     * Add The participant user in list
     *
     * @param   Array $particpants
     * @return  bool
     * */
    public function addParticipant($particpants = [])
    {
        foreach($particpants as $index => $particpant){
            $peer = $this->participants()->updateOrCreate(['peer_id' => $particpant]);  
            $this->participants()->attach($peer->id);
        }    

        return true;
    }
}
