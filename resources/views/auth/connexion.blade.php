<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{$title}}</title>
</head>
<body class="bg-" >
    {{-- style="background-image: url({{asset('img/12.png')}})" --}}
    @auth
        {{-- {{Auth::user()}} --}}
    @endauth
    <div class="h-screen flex justify-center items-center ">
       <div class="w-full h-full flex justify-center items-center" >
        <div class="backdrop-filter backdrop-blur-lg ring-8 ring-opacity-20 ring-blue-900 flex justify-center items-center rounded-full h-5/6 w-2/3 shadow-lg shadow-black pt-2  " style="background-image: url({{asset('img/4.png')}})" >
            <div class="w-full flex justify-center items-center backdrop-blur-sm h-full rounded-full ">
                <div class="w-2/3 ">
                    <form class="text-center items-center space-y-1 w-full" action="" method="post">
                        @csrf
                        <div class="space-y-8 ">
                            <img class="p-5 m-auto" width="150px" height="150px"  src="{{ asset('images/logo.jpg') }}" alt="Logo">

                            <h2 class="font-bold text-5xl text-blue-900 font">Connexion</h2>
                            <input  class="text-center bg-opacity-25 text-[#e27b06] font-semibold text-lg h-12 w-full  rounded-full shadow-lg italic shadow-black-900/50 placeholder:text-[#c44241] placeholder:font-normal  ring-4 ring-opacity-20 ring-blue-900 focus:outline-none focus:ring-opacity-50  focus:border-transparent" type="text" name="matricule" id="" placeholder="Entrer votre matricule"><br>
                            @error('matricule')
                                <div class="text-red-500">
                                    {{$message}}
                                </div>
                            @enderror
                            <input  class="text-center text-[#e27b06] font-semibold text-lg h-12 w-full rounded-full shadow-lg italic shadow-black-900/50 placeholder:text-[#c44241] placeholder:font-normal  ring-4 ring-opacity-20 ring-blue-900 focus:outline-none focus:ring-opacity-50  focus:border-transparent" type="password" name="password" id="" placeholder="Entrez votre mot de passe"><br>
                            <input class="text-center text-white hover:text-blue-900 text-lg h-10 w-1/2 bg-blue-900 hover:bg-white rounded-lg shadow-lg font-semibold shadow-black-900/50 cursor-pointer  hover:border-3 hover:border-[#c44241] hover:border-dashed " type="submit" name="" id="" value="Se connecter"><br><br>
                            
                        </div>
                        <div class="grid grid-cols-1 gap-3">
                            <a class="text-blue-900 font-semibold hover:underline" href="">Mot de passe oublié?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       </div>
    </div>
</body>
</html>