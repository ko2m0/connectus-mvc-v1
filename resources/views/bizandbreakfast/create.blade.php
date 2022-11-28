@extends('layout')


@section('content')

    <div class="container">
        <form action="{{ route('bizandbreakfast.store')}}" method="POST">
            @csrf
            <div>
                <label for="profile_video">Profile video</label>
                <input type="text" id="profile_video" name="profile_video" value="{{ old('profile_video') }}">
                @error('profile_video')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_pic">profile pic</label>
                <input type="text" id="profile_pic" name="profile_pic" value="{{ old('profile_pic') }}">
                @error('profile_pic')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_name">profile name</label>
                <input type="text" id="profile_name" name="profile_name" value="{{ old('profile_name') }}">
                @error('profile_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_job">profile job</label>
                <input type="text" id="profile_job" name="profile_job" value="{{ old('profile_job') }}">
                @error('profile_job')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_ws">profile ws</label>
                <input type="text" id="profile_ws" name="profile_ws" value="{{ old('profile_ws') }}">
                @error('profile_ws')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_about">profile about</label>
                <input type="text" id="profile_about" name="profile_about" value="{{ old('profile_about') }}">
                @error('profile_about')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_phonenumber">profile phonenumber</label>
                <input type="text" id="profile_phonenumber" name="profile_phonenumber" value="{{ old('profile_phonenumber') }}">
                @error('profile_phonenumber')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_email">profile email</label>
                <input type="text" id="profile_email" name="profile_email" value="{{ old('profile_email') }}">
                @error('profile_email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_client_img1">profile_client_img1</label>
                <input type="text" id="profile_client_img1" name="profile_client_img1" value="{{ old('profile_client_img1') }}">
                @error('profile_client_img1')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_client_img2">profile_client_img2</label>
                <input type="text" id="profile_client_img2" name="profile_client_img2" value="{{ old('profile_client_img2') }}">
                @error('profile_client_img2')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_client_img3">profile_client_img3</label>
                <input type="text" id="profile_client_img3" name="profile_client_img3" value="{{ old('profile_client_img3') }}">
                @error('profile_client_img3')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_client_img4">profile_client_img4</label>
                <input type="text" id="profile_client_img4" name="profile_client_img4" value="{{ old('profile_client_img4') }}">
                @error('profile_client_img4')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_smlink1">profile_smlink1</label>
                <input type="text" id="profile_smlink1" name="profile_smlink1" value="{{ old('profile_smlink1') }}">
                @error('profile_smlink1')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_smlink2">profile_smlink2</label>
                <input type="text" id="profile_smlink2" name="profile_smlink2" value="{{ old('profile_smlink2') }}">
                @error('profile_smlink2')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_smlink3">profile_smlink3</label>
                <input type="text" id="profile_smlink3" name="profile_smlink3" value="{{ old('profile_smlink3') }}">
                @error('profile_smlink3')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="profile_smlink4">profile_smlink4</label>
                <input type="text" id="profile_smlink4" name="profile_smlink4" value="{{ old('profile_smlink4') }}">
                @error('profile_smlink4')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button class="button" type="submit">Submit</button>
            </div>
        </form>
    </div>


@endsection