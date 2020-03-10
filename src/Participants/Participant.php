<?php

namespace Nahid\Talk\Participants;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';
    public $timestamps = true;
    public $fillable = [
        'conversation_id',
        'user_id',
        'status',
    ];

    /*
     * make a relation between user from participant list
     *
     * return collection
     * */
    public function user()
    {
        return $this->belongsTo(config('talk.user.model', 'App\User'),  'user_id', config('talk.user.ownerKey'));
    }
}
