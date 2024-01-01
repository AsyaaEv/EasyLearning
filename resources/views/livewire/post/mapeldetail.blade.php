<div class="w-full h-auto">
    <div class="w-full h-[5rem] bg-blue-950 flex justify-between">
        <div class="w-auto h-full flex items-center px-[3rem]">
            <a href="{{ url('/') }}">
                <div class="font-bold text-2xl text-white">EasyLearning</div>
            </a>
        </div>
        <div class="w-auto h-full px-[3rem] flex items-center justify-center">
            <div class="flex gap-[20px]">
                <a href="{{ url('/' . '#home') }}"
                    class="text-xl font-semibold text-white hover:scale-[1.1] transition-all" id="homeSection">Beranda</a>
                <a href="{{ url('/' . '#about') }}"
                    class="text-xl font-semibold text-white hover:scale-[1.1] transition-all" id="mapelSection">Tentang
                    Kami</a>
                <a href="{{ url('/' . '#keunggulan') }}"
                    class="text-xl font-semibold text-white hover:scale-[1.1] transition-all"
                    id="mapelSection">Keunggulan</a>
                <a href="{{ url('/' . '#kategori') }}"
                    class="text-xl font-semibold text-white hover:scale-[1.1] transition-all"
                    id="mapelSection">Kategori</a>
                <a href="{{ url('/' . '#anggota') }}"
                    class="text-xl font-semibold text-white hover:scale-[1.1] transition-all"
                    id="mapelSection">Anggota</a>
            </div>
        </div>
        <div class="w-auto h-full flex justify-center items-center px-[3rem]">
            <div
                class="w-[10rem] h-[3.5rem] rounded-[10px] shadow-lg bg-white flex justify-center items-center hover:scale-[1.1] transition-all hover:cursor-pointer">
                <div class="font-semibold text-blue-950">Get Started</div>
            </div>
        </div>
    </div>

    <div class="w-full h-auto flex">
        <div class="w-full h-auto mx-[2rem] bg-white mt-[2rem] rounded-[10px] shadow-lg">
            <div class="w-full h-auto flex p-4">
                <div class="w-full h-auto flex gap-[10px]">
                    <a href="{{ url()->previous() }}">
                        <i class="bi bi-arrow-left text-3xl font-bold text-blue-950"></i>
                    </a>
                    <div class="font-semibold text-blue-950 text-2xl">Detail</div>
                </div>
            </div>
            @foreach ($post as $item)
                <div class="w-full h-[31.5rem] flex">
                    <div class="w-[70%] h-full flex justify-center items-center">
                        <img src="{{ Storage::url($item->tumbnail) }}" alt=""
                            class="w-[90%] h-[90%] object-cover shadow-md">
                    </div>
                    <div class="w-[30%] h-full flex flex-col justify-center gap-[15px]">
                        <div class="w-full h-auto flex flex-col">
                            <div class="text-blue-950 font-bold text-2xl">Judul</div>
                            <div class="text-blue-950 font-medium text-xl">{{ $item->judul }}</div>
                        </div> 
                        <div class="w-full h-auto flex flex-col">
                            <div class="text-blue-950 font-bold text-2xl">Uploaded</div>
                            <div class="text-blue-950 font-medium text-xl">{{ $item->created_at }}</div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-auto font-bold text-3xl text-blue-950 ml-[3rem] mt-[1rem]">Content</div>
                <div class="w-full h-auto pb-[1rem]">
                    <div class="font-medium text-xl text-blue-950 mx-[3rem] mt-[2rem]">{!! $item->content !!}</div>
                </div>
            @endforeach
        </div>
        
    </div>
