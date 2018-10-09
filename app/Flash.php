<?php

namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class Flash
{
    public function info($message)
    {
        session()->flash('flash_mess',$message);
    }
}
