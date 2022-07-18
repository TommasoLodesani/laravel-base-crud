@extends('admin.template.base');

@section('mainContent')
    <main>
        <ul>

        @foreach ($comics as $comic)
        <li>
            {{$comic->title}}
        </li>

        @endforeach

        </ul>
    </main>

@endsection
