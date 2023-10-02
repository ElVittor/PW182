<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--Si no queremos poner un valor en el layout podemos mandar un valor predeterminado usando el "?? 'lo que quieras'"--}}
        <title>{{$title ?? 'Xdefecto'}}</title>


       
    </head>
    <body class="antialiased">

        {{-- Componente de paginación--}}
        <X-paginas />{{----Como no vamos a mandar datos, podemos cerrar de inmediato la etiqueta}}

        {{$slot}}

        
    </body>
</html>
