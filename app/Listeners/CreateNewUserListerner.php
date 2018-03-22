<?php

namespace App\Listeners;

use App\Events\UserEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateNewUserListerner
{

    public function handle(UserEvent $event)
    {
        \Log::info('Usuário criado com sucesso.')
    }
}
