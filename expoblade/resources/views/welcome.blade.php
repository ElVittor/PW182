{{--@component('components.layout')
    <x-slot name="title">
       Holis Title
    </x-slot>
    <h1>HOLA COMPAÑEROS</h1>
@endcomponent--}}
    
<X-layout>
    <x-slot name="title">
    Holis Title
    </x-slot>
    <h1>HOLA COMPAÑEROS</h1>
    <p>Lorem ipsum dolor sit a</p>
</X-layout>
{{--notar que en esta forma ya se asume donde esta el componente, y solo llamamos su nombre "layout"--}}