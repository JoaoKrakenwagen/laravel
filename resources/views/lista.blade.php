!doctype html>

<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>

      @foreach ('$firstname' as $nome);

      <h1> O usuário {$firstname}} {{$lastname}} foi cadastrado! </h1>

      @endforeach;

    </body>
</html>
