<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{--Si no queremos poner un valor en el layout podemos mandar un valor predeterminado usando el "?? 'lo que quieras'"--}}
        <title>Holi - {{$title}}</title>


       
    </head>
    <body>

        {{-- Componente de paginación--}}
        

        {{$slot}}

        
    </body>
</html>
