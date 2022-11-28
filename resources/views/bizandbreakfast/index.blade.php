@extends('layout')


@section('content')

    @if (count($bandb_profile) > 0 )


    @foreach ($bandb_profile as $bandb_profile)
        <h3>
            <a href="{{ route('bizandbreakfast.show', ['bizandbreakfast' => $bandb_profile['id']])}}">
            {{$bandb_profile['profile_name']}}
            </a>
        </h3>
        <ul>
            <li>
                <p>{{$bandb_profile['profile_name']}}</p>
            </li>
            <li>
                <p>{{$bandb_profile['profile_job']}}</p>
            </li>
            <li>
                <p>{{$bandb_profile['profile_ws']}}</p>
            </li>
            <li>
                <p>{{$bandb_profile['profile_about']}}</p>
            </li>
            <li>
                <p>{{$bandb_profile['profile_phonenumber']}}</p>
            </li>
            <li>
                <p>{{$bandb_profile['profile_email']}}</p>
            </li>  
        </ul>
    @endforeach

    @else 
        <h2>nothing to show here bro</h2>

        @endif


@endsection