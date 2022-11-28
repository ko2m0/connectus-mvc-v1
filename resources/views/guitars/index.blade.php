@extends('layout')

@section('content')

    @if (count($guitars) > 0)

    @foreach($guitars as $guitar)
        <main style="border:1px dashed black">
            <h3>
                <a href="{{ route('guitars.show', ['guitar' => $guitar['id']])}}">
                {{$guitar['name']}}
                </a>
            </h3>
            <ul>
                <li>
                    <p>Made by: {{$guitar['brand']}}</p>
                </li>
                <li>
                    <p>Year made: {{$guitar['year_made']}}</p>
                </li>
            </ul>
        </main>
    @endforeach

        @else
        <h2>No Guitars man</h2>

    @endif    

@endsection