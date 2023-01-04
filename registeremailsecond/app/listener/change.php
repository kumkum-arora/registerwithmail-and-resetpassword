<?php

namespace App\listener;

use App\Event\changepassword;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\register;
use Illuminate\Support\Facades\DB;

class change
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Handle the event.
     *
     * @param  \App\Event\changepassword  $event
     * @return void
     */
    public function handle(changepassword $event)
    { {

            $add = new register;
            $username = $event->email;
            $password = $event->newpassword;
            $pass = $event->Cpassword;

            // $count = register::select('*')
            //     ->where('email', $username)
            //     ->count();

            if ($password == $pass) {

                register::where('email', $username)->update([
                    'password' => $event->Cpassword
                ]);
                echo "password updated successfully";
            } else {
                echo "Enter a valid details";
            }
        }
    }
}
