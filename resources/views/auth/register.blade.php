@if ($errors->any())

    <div class="container">
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
    
                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
    
@endif



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Registration Form</title>
    <style>
        .table th {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="contrainer">
       
            <div class="album py-5" style="height:120vh;">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="card border-success" style="max-width: 65rem;padding: 2%;">
                        <h2> Registration </h2>
                        <hr>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="fname" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="fname" name="name"
                                            placeholder="falguni" required="" >
                                    </div>
                                    
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="name@example.com" required="">
                                    </div>
                                    <div class="col">
                                        <label for="mobile" class="form-label">Contact Number</label>
                                        <input type="tel" class="form-control" id="mobile" name="contact"
                                            placeholder="1234567890" required="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="gender" class="form-label">Gender</label><br>
                                        <input type="radio" id="gender" name="gender" value="Male" checked>Male
                                        <input type="radio" id="gender" name="gender" value="Female">Female
                                    </div>
                                    
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" rows="3" name="address" placeholder="address" required=""></textarea>
                                    </div>
                                    
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="profile" class="form-label">Profile</label><br />
                                        <input type="file" class="form-control" name="profile[]"
                                            multiple />

                                    </div>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <input type="submit" name="regist" id="regist" value="Register"
                                        class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
</body>

</html>
