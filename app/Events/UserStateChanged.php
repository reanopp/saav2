<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

/**
 * Event triggered when a user's state changes
 * @package App\Events
 */
class UserStateChanged
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $old_state, $user;

    public function __construct(User $user, $old_state)
    {
        $this->old_state = $old_state;
        $this->user = $user;
    }
}
