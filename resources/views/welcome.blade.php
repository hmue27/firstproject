@extends('layout')


     @section('content')

    <h1> My {{$foo}} section</h1>

<ul>
    <?php foreach ($tasks as $tasks) : ?>
            <li>  <?= $tasks; ?> </li>

    <?php endforeach; ?>

</ul>

@endsection