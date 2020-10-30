@extends('layout')

@section('title','Actividades')

@section('content')
   <h1>NUESTROS PROYECTOS</h1>
    <ul>
       <!-- <?php foreach ($portafolio as $portafolioItem){
           echo "<li>". $portafolioItem['title']. "</li>";
       }?>-->

       <!--<?php foreach ($portafolio as $portItem): ?>
            <li> {{$portItem['title']}}</li>
            <?php endforeach ?> -->

       <!-- @foreach ($portafolio as $item)
                <li> {{$item['title']}}</li>
            @endforeach-->

            @forelse ($portafolio as $item)
                <li> {{$item['title']}}</li>
            @empty
                <li>No hay proyectos en este momento </li>
                <script> alert('No hay proyectos en este momento'); </script>
            @endforelse



    </ul>



@endsection
