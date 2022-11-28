@extends('layout')

@section('content')

        <div>
           <form action="{{ route('guitars.store')}}" method="POST">
            @csrf 
            <div>
                <label for="guitar-name">Guitar Name</label>
                <input type="text" id="guitar-name" name="guitar-name" value="{{ old('guitar-name')}}">
                @error('guitar-name')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="brand">Brand</label>
                <input type="text" id="brand" name="brand" value="{{ old('brand')}}">
                @error('brand')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="year">Year Made</label>
                <input type="text" id="year" name="year" value="{{ old('year')}}">
                @error('year')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <button class="submit">submit</button>
            </div>
           </form>
        </div>
        

@endsection