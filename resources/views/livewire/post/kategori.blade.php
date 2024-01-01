<div class="w-full h-screen pb-[2rem]">
    <div class="w-full h-[5rem] bg-blue-950 flex justify-between shadow-md" id="navbar">
        <div class="w-auto h-full flex items-center px-[3rem]">
            <a href="{{ url('/') }}">
                <div class="font-bold text-2xl text-white" id="judul">EasyLearning</div>
            </a>
        </div>
        <div class="w-auto h-full px-[3rem] flex items-center justify-center">
            <div class="flex gap-[20px]">
                <a href="{{ url('/' . '#home') }}"
                    class="text-xl font-semibold text-white hover:scale-[1.1] transition-all"
                    id="homeSection">Beranda</a>
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
            <a href="{{ url('/' . '#mapel') }}">
                <div class="w-[10rem] h-[3.5rem] rounded-[10px] shadow-lg bg-white flex justify-center items-center hover:scale-[1.1] transition-all hover:cursor-pointer"
                    id="div">
                    <div class="font-semibold text-blue-950" id="button">Get Started</div>
                </div>
            </a>
        </div>
    </div>
    <div class="w-full h-[35rem] container mx-auto bg-white rounded-[10px] mt-[2rem] shadow-lg flex flex-col gap-[10px] justify-center items-center pb-[2rem]">
        <div class="w-full h-auto flex justify-between">
            <div class="w-full h-auto flex gap-2 mt-2 ml-4 mb-[2rem]">
                <a href="{{ url('/' . '#kategori') }}">
                    <i class="bi bi-arrow-left text-3xl font-bold text-blue-950"></i>
                </a>
                <div class="font-semibold text-blue-950 text-2xl">Mapel</div>
            </div>
            <div class="">{{$posts->links()}}</div>
        </div>
        <div class="w-full h-auto overflow-auto flex flex-wrap justify-center items-center gap-[10px]">
            @forelse ($posts as $item)
            <div class="w-[25rem] h-[27rem] bg-blue-950 rounded-[10px] mx-[1rem]">
                <img src="{{ Storage::url($item->cover) }}" alt=""
                class="w-full h-[15rem] object-cover rounded-t-[10px]">
                <div class="text-white text-md font-medium ml-[2rem] mt-[1rem]">{{ $item->created_at }}</div>
                <div class="text-white text-3xl font-semibold ml-[2rem] mt-[1rem]">{{ $item->mapel }}</div>
                <div class="w-full h-auto ml-[2rem] mt-[1rem]">
                    <a href="{{ url('/mapel/' . $item->id) }}">
                        <div
                        class="w-[6rem] h-[3rem] bg-white rounded-[10px] shadow-md flex justify-center items-center group">
                        <div class="text-xl font-semibold">Baca</div>
                    </div>
                </a>
            </div>
        </div>
        @empty
        <div class="w-[30rem] h-[10rem] bg-blue-950 rounded-[10px] flex justify-center items-center gap-[10px]">
            <i class="bi bi-exclamation-triangle-fill text-white text-6xl" id="gambar"></i>
            <div class="text-white font-bold text-xl">Mapel Belum Tersedia!!</div>
        </div>
        @endforelse
        </div>
    </div>
</div>
