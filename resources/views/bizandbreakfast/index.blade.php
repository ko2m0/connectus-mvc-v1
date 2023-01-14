@extends('/bizandbreakfast/layout')


@section('content')

    @if (count($bandb_profile) > 0 )

    <div class="lg:grid lg:grid-cols-2  gap-4 mx-4 py-20 md:py-20">


    @foreach ($bandb_profile as $bandb_profile)

    

        <a href="{{ route('bizandbreakfast.show', ['bizandbreakfast' => $bandb_profile['id']])}}" class="block  p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$bandb_profile['profile_name']}}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{$bandb_profile['profile_job']}}</p>
            <p>{{$bandb_profile['profile_ws']}}</p>
        </a>


        
    @endforeach

    @else 
        <h2>nothing to show here bro</h2>

        @endif


@endsection