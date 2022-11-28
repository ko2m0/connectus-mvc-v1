@extends('layout')

@section('content')

        <div>
           <form action="{{ route('guitars.update', ['guitar' => $guitar->id])}}" method="POST">
            @csrf 
            @method('PUT')
            <div>
                <label for="guitar-name">Guitar Name</label>
                <input type="text" id="guitar-name" name="guitar-name" value="{{ $guitar->name }}">
                @error('guitar-name')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="brand">Brand</label>
                <input type="text" id="brand" name="brand" value="{{ $guitar->brand }}">
                @error('brand')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <label for="year">Year Made</label>
                <input type="text" id="year" name="year" value="{{ $guitar->year_made }}">
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