<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessagePush;

class MessageController extends Controller
{
    public function push(Request $request)
    {
      /*
      $this->validate($request, [
        'message' => 'required',
      ]);
      */

      $message = $request->message;
      $channel = $request->channel;

      //broadcast(new \App\Events\MessagePush(array($message), $channel));
      broadcast(new \App\Events\MessageTest(array($message), $channel));

      return $message;
    }

    public function userA()
    {
      return view('push');
    }

    public function userB()
    {
      return view('receive');
    }
}
