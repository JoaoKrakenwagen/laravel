<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    <h1>O serviço do {{$id}} é muito bom.<br><br> Gostou? <a href='".url('contato')."'> Esse é o telefone dele: {{$telefone}}. </a></h1>
    </body>
</html>
