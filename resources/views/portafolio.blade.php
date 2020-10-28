@extends('layout')

@section('title','Actividades')

@section('content')
   <h1>NUESTRAS ACTIVIDADES</h1>
    <ul>
       <!-- <?php foreach ($portafolio as $portafolioItem){
           echo "<li>". $portafolioItem['title']. "</li>";
       }?>-->
    </ul>

    <?php foreach ($portafolio as $portItem): ?>
    @php
