<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <script src="{{ asset('js/jquery-1.11.3.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js?ver=90') }}" defer></script>

    <title>ユーザーB</title>
  </head>

  <body>
    <h1>チャット(受信用)</h1>
    <div style="border:1px solid #eee;"></div>
    <div class="message">
      <p>ここがチャット欄だよ</p>

    <script src="{{ env('APP_ECHO_URL', '//' . Request::getHost() . ':6001') }}/socket.io/socket.io.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script>
    window.Echo.channel('userA')
        .listen('MessageTest', e => {
            console.log(e.message);
            //document.write('<p class="left">'+e.message+"</p>");
            $('.message').append('<p class="left">'+e.message+"</p>");
        });
    </script>
    </div>

    <div style="border:1px solid #eee;">

    <div id="message-form2">
      <input type="text" class="input-text"></input>
      <button>送信</button>
    </div>

 </body>
</html>
