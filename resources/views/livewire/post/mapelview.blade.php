<div class="w-full h-auto pb-[2rem]">
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

    <div class="w-full h-auto pb-[2rem] container mx-auto bg-white mt-[2rem] rounded-[10px] shadow-lg">
        <div class="w-full h-auto flex p-4">
            <div class="w-full h-auto flex gap-[10px] items-center justify-between">
                <div class="w-full h-auto flex gap-2">
                    <a href="{{ url('/' . '#kategori') }}">
                        <i class="bi bi-arrow-left text-3xl font-bold text-blue-950"></i>
                    </a>
                    <div class="font-semibold text-blue-950 text-2xl">Materi</div>
                </div>
                <div class="w-auto h-full flex justify-center items-center">
                    <i class="bi bi-search text-2xl absolute -translate-x-[8.5rem] text-white"></i>
                    <input type="text"
                        class="w-[20rem] h-[3.5rem] text-white rounded-[10px] pl-[3rem] placeholder:text-lg placeholder:text-white focus:text-white bg-blue-950"
                        placeholder="Search" wire:model.live="keyword">
                </div>
            </div>
        </div>
        <div class="w-full h-[31.5rem] flex flex-wrap overflow-auto justify-center items-center gap-[15px]">
            @forelse ($post as $items)
                <a href="{{ url('/mapel/detail/' . $items->id) }}" class="hover:scale-[1.02] transition-all">
                    <div class="w-[25rem] h-[30rem] bg-blue-950 rounded-[10px] shadow-md mx-[1rem]">
                        <img src="{{ Storage::url($items->tumbnail) }}" alt="..."
                            class="w-full h-[15rem] object-cover rounded-t-[10px]">
                        <div class="text-white text-md font-medium ml-[2rem] mt-[1rem]">{{ $items->created_at }}</div>
                        <div class="text-white text-2xl font-semibold ml-[2rem] mt-[1rem]">{{ $items->judul }}</div>
                    </div>
                </a>
            @empty
            <div class="w-[30rem] h-[10rem] bg-blue-950 rounded-[10px] flex justify-center items-center gap-[10px]">
                <i class="bi bi-exclamation-triangle-fill text-white text-6xl" id="gambar"></i>
                <div class="text-white font-bold text-xl">Materi Belum Tersedia!!</div>
            </div>
            @endforelse

        </div>
    </div>
</div>
