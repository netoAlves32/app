@extends('layout')

@section('title','SatuFundacion')
@endsection

@section('content')
    <h1>BIENVENID@</h1>
    <!-- Como has estado <?php echo $nombre ?? "Invitado" ?> -->
    <!-- Como has estado <?php echo "<script>alert('ALERTAA SCRIPT')</script>"?> -->
    Como has estado {{$nombre ?? "Invitado"}}
@endsection
