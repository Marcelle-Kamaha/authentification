{{-- <div class="ma">
    Email:<input type ="email" placeholder="entrez votre email"></label>
    <br>
    Mot de passe:<input type="mot de passe" placeholder="entrez votre email"></label>
</div>
    
<div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control form-control-lg"
      placeholder="Enter a valid email address" />
      Email address<label class="form-label" for="form3Example3"></label>
  </div>
   <!-- Password input -->
   <div class="form-outline mb-3">
    <input type="password" id="form3Example4" class="form-control form-control-lg"
      placeholder="Enter password" />
      Password<label class="form-label" for="form3Example4"></label>
  </div> --}}


  @extends('layouts.app')

  @section('content')
  <h1 class="text-3xl text-green-500 mb-6 text-center">Saisissez vos informattions</h1>
  <form method="POST" action="{{ route('login') }}" class="w-full max-w-sm mx-auto rounded-lg border shadow-md p-5 mb-5">
      @csrf
      
      <div class="mb-4">
          <label for="email" class="block font-semibold text-gray-700 mb-2">Email</label>
          <input id="email" type="email" name="email" placeholder="votre email" class="shadow border rounded w-full p-2" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
          @error('email')
              <span class="text-red-400 text-sm">
                  <span>{{ $message }}</span>
              </span>
          @enderror
      </div>
  
      <div class="mb-4">
          <label for="password" class="block font-semibold text-gray-700 mb-2">Mot de passe</label>
          <input id="password" type="password" name="password" class="shadow border rounded w-full p-2" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
         @error('password')
              <span class="text-red-400 text-sm">{{ $message }}</span>
          @enderror
      </div>
  
      <button type="submit" class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3">Se connecter</button>
  </form>
  @endsection