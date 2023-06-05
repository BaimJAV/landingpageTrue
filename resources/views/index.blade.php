@extends("app")
@section("content")
    <nav class=" w-full top-0 left-0 bg-[#ffcc04] ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
        <a href="" class="flex items-center">
            <img src="/assets/logo.png" class="h-[70px] mr-3" alt="">
        </a>
        <div class="flex w-auto p-4">
        <ul class="flex flex-row p-0 mt-0 font-semibold rounded-lg space-x-8">
            <li>
            <a href="#" class="block p-0">Beranda</a>
            </li>
            <li>
            <a href="#" class="block p-0">Tentang GAS</a>
            </li>
            <li>
            <a href="#" class="block p-0">FItur</a>
            </li>
            <li>
            <a href="#" class="block p-0">Daftar</a>
            </li>
            <li>
            <a href="#" class="block p-0">Karir</a>
            </li>
        </ul>
        </div>
        <div class="flex p-4">
            <button class="px-4 py-2 rounded-xl font-bold border border-white ">Sign In</button>
            <button class="ml-2 w-[40px] h-[40px] rounded-full bg-orange-500 text-xs text-white">akun toko</button>
        </div>
        </div>
    </nav>

    <div class="grid grid-cols-[45%_auto] bg-[#ffcc04] h-[90vh] ">
        <div class="flex flex-col w-full h-full pl-20 pt-[18%]">
        <span class="text-[60px] text-white font-bold text-left">Bergabung</span>
        <span class="text-[60px] text-white font-bold mt-[-30px]">dengan GAS</span>
        <span class="text-lg font-semibold mt-2">Aplikasi Gas akan membantumu dalam memantau stok</span>
        <span class="text-lg font-semibold"> produk tokomu dan manjangkau customer yang lebih luas</span>
        <span class="text-lg font-semibold mt-10">Unduh</span>
        <button class="ml-[-10px]"><img src="/assets/google-play.png" class="w-[120px] h-[50px]"></button>
        <div class="flex mt-[150px]">
            <button><img class="scale-[1.5]" src="/assets/ig.png"></button>
            <button><img class="scale-[1.4] ml-5" src="/assets/fb.png"></button>
        </div>
        </div>
        <div class="flex items-center justify-center pr-20">
        <img class="scale-[1.25]" src="/assets/home-img.png">
        </div>
    </div>
@endsection