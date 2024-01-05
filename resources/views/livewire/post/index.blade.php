<div class="w-full h-auto pb-[3rem] pt-[8rem]">
    <div class="w-full h-[5rem] bg-blue-950 flex justify-between fixed top-0 z-50 shadow-md" id="navbar">
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
            <a href="{{ url('/' . '#kategori') }}">
                <div class="w-[10rem] h-[3.5rem] rounded-[10px] bg-white flex justify-center items-center hover:scale-[1.1] transition-all hover:cursor-pointer"
                    id="div">
                    <div class="font-semibold text-blue-950" id="button">Get Started</div>
                </div>
            </a>
        </div>
    </div>
    <div class="-translate-y-[10rem]" id="home"></div>
    <div class="w-full h-[80%] container mx-auto bg-white flex rounded-[10px] shadow-lg">
        <div class="w-full h-auto flex flex-col justify-center items-center gap-[20px]">
            <div class="w-full h-auto" id="wrap">
                <div class="text-5xl text-blue-950 font-semibold text-center" id="title">Easy Learning</div>
            </div>
            <div class="w-[30rem] h-auto">
                <div class="text-2xl text-blue-950 font-medium text-center">Situs belajar online dari sumber yang
                    terpercaya. Dengan pembahasan yang mudah dimengerti</div>
            </div>
            <div class="w-full h-auto flex justify-center items-center">
                <a href="{{ url('/' . '#kategori') }}">
                    <div
                        class="w-[10rem] h-[3.5rem] rounded-[10px]  bg-blue-950 flex justify-center items-center hover:scale-[1.1] transition-all hover:cursor-pointer">
                        <div class="font-semibold text-white">Get Started</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-full h-full flex justify-center items-center">
            <img src="{{ Storage::url('public/images/buku.png') }}" alt="" id="gambar" class="-z-index-50">
        </div>
    </div>
    <div class="-translate-y-[3rem]" id="about"></div>
    <div
        class="w-full h-auto bg-white container mx-auto mt-[3rem] rounded-[10px] shadow-lg pb-[3rem] overflow-hidden">
        <div class="w-full h-auto flex justify-center items-center pt-[2rem]">
            <div class="font-bold text-3xl text-blue-950 pb-[10rem]">Tentang {{ config('app.name') }}</div>
        </div>
        <div class="w-full h-full flex">
            <div class="w-full h-full flex justify-center items-center">
                <img src="{{ Storage::url('images/about.png') }}" alt="" class="scale-[0.8]" id="gambar">
            </div>
            <div class="w-full h-full flex justify-center items-center flex-col pb-8">
                <div class="w-full h-auto px-[2rem]">
                    <div class="font-bold text-2xl text-blue-950">Kenapa sih harus memilih {{ config('app.name') }}?
                    </div>
                </div>
                <div class="w-full h-auto mt-[2rem]">
                    <div class="font-semibold text-lg text-blue-950 px-[2rem]">EasyLearning adalah pilihan pembelajaran
                        yang menarik karena memberikan akses tak terbatas ke beragam materi pembelajaran. Platform ini
                        tidak hanya menyajikan pembelajaran yang menyenangkan, tetapi juga mendukung Anda dengan tim
                        ahli yang siap memberikan bantuan. <br><br> Dengan teknologi inovatif, personalisasi
                        pembelajaran, dan pembaruan berkala, EasyLearning memberikan pengalaman pembelajaran yang
                        efektif, relevan, dan mendalam. Bergabunglah dengan komunitas pembelajaran kami dan temukan
                        dunia pengetahuan yang tak terbatas di EasyLearning!</div>
                </div>
            </div>
        </div>
    </div>
    <div class="-translate-y-[1rem]" id="keunggulan"></div>
    <div class="w-full h-auto container mx-auto mt-[3rem] rounded-[10px] pb-[3rem] overflow-hidden">
        <div class="w-full h-auto flex justify-center items-center pt-[2rem]">
            <div class="font-bold text-3xl text-blue-950 pb-[3rem]">Keunggulan</div>
        </div>
        <div class="w-full h-full gap-[15px] flex justify-center items-center overflow-hidden">
            <div class="w-[20rem] h-[30rem] bg-white rounded-[10px] shadow-md">
                <div class="w-full h-auto flex justify-center items-center mt-[2rem]">
                    <i class="bi bi-stopwatch-fill text-blue-950 text-8xl" id="gambar"></i>
                </div>
                <div class="w-full h-auto">
                    <div class="font-bold text-xl text-blue-950 text-center">Hemat Waktu</div>
                </div>
                <div class="w-full h-full mt-2">
                    <div class="px-[1rem] font-medium text-blue-950 text-center">EasyLearning membedakan diri dengan
                        fitur utama efisiensi waktu. Dengan akses cepat ke materi pembelajaran dan fitur personalisasi,
                        platform ini memastikan setiap momen belajar Anda dimanfaatkan secara optimal. Bergabunglah
                        dengan EasyLearning dan manfaatkan waktu Anda secara efisien dalam perjalanan pengetahuan!</div>
                </div>
            </div>
            <div class="w-[20rem] h-[35rem] bg-blue-950 rounded-[10px] shadow-md">
                <div class="w-full h-auto flex justify-center items-center mt-[2rem]">
                    <i class="bi bi-cash-coin text-white text-8xl" id="gambar"></i>
                </div>
                <div class="w-full h-auto">
                    <div class="font-bold text-xl text-white text-center">BIAYA GRATIS</div>
                </div>
                <div class="w-full h-full mt-3">
                    <div class="px-[1rem] font-semibold text-white text-center">EasyLearning menawarkan fitur unggulan
                        berupa akses gratis ke berbagai materi pembelajaran. Dengan ini, kami memastikan bahwa
                        pengetahuan yang bermanfaat dapat diakses tanpa biaya. Bergabunglah dengan EasyLearning, nikmati
                        pembelajaran tanpa batas, dan bangun pengetahuan Anda tanpa mengeluarkan biaya tambahan.</div>
                </div>
            </div>
            <div class="w-[20rem] h-[30rem] bg-white rounded-[10px] shadow-md overflow-hidden">
                <div class="w-full h-auto flex justify-center items-center mt-[2rem]">
                    <i class="bi bi-journals text-blue-950 text-8xl" id="gambar"></i>
                </div>
                <div class="w-full h-auto">
                    <div class="font-bold text-xl text-blue-950 text-center">Materi Lengkap</div>
                </div>
                <div class="w-full h-full mt-2">
                    <div class="px-[1rem] font-medium text-blue-950 text-center">
                        EasyLearning unggul dengan materi pembelajaran komprehensif. Dengan akses ke berbagai topik,
                        platform ini memungkinkan pengguna menjelajahi pengetahuan dari dasar hingga tingkat lanjut.
                        Bergabunglah untuk pengalaman belajar yang menyeluruh dan relevan sesuai kebutuhan pembelajaran
                        Anda.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="-translate-y-[3rem]" id="kategori"></div>
    <div class="w-full h-auto bg-white container mx-auto mt-[3rem] rounded-[10px] shadow-lg pb-[3rem]">
        <div class="w-full h-auto flex justify-center items-center">
            <div class="w-full h-auto text-3xl text-blue-950 font-bold p-[2rem]">Mapel</div>
            <div class="w-auto h-full flex justify-center items-center px-[2rem]">
                <i class="bi bi-search text-2xl absolute -translate-x-[8.5rem] text-white"></i>
                <input type="text"
                    class="w-[20rem] h-[3.5rem] text-white rounded-[10px] pl-[3rem] placeholder:text-lg placeholder:text-white focus:text-white bg-blue-950"
                    placeholder="Search" wire:model.live="keyword">
            </div>
        </div>
        <div class="w-full h-auto flex justify-center items-center mt-4">
            @forelse ($posts as $items)
                <div class="w-[25rem] h-[27rem] bg-blue-950 rounded-[10px] mx-[1rem]">
                    <img src="{{ Storage::url($items->cover) }}" alt=""
                        class="w-full h-[15rem] object-cover rounded-t-[10px]">
                    <div class="text-white text-md font-medium ml-[2rem] mt-[1rem]">{{ $tgl }}</div>
                    <div class="text-white text-3xl font-semibold ml-[2rem] mt-[1rem]">{{ $items->mapel }}</div>
                    <div class="w-full h-auto ml-[2rem] mt-[1rem]">
                        <a href="{{ url('/mapel/' . $items->id) }}">
                            <div
                                class="w-[6rem] h-[3rem] bg-white rounded-[10px] shadow-md flex justify-center items-center group">
                                <div class="text-xl font-semibold">Baca</div>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div
                    class="w-[30rem] h-[10rem] bg-blue-950 rounded-[10px] flex justify-center items-center gap-[10px] mb-[3rem]">
                    <i class="bi bi-exclamation-triangle-fill text-white text-6xl" id="gambar"></i>
                    <div class="text-white font-bold text-xl">Mapel Belum Tersedia!!</div>
                </div>
            @endforelse
        </div>
        @if ($posts->isEmpty())
            <div class="w-full h-auto mt-[2rem]  justify-end px-[1rem] hidden" id="toggle">
                <a href="{{ url('/kategori') }}" class="hover:scale-[1.05] transition-all">
                    <div class="w-[10rem] h-[3rem] rounded-[10px] bg-blue-950 flex justify-center items-center">
                        <div class="text-white font-semibold ">Lebih Banyak..</div>
                    </div>
                </a>
            </div>
        @else
            <div class="w-full h-auto mt-[2rem]  justify-end px-[1rem] flex" id="toggle">
                <a href="{{ url('/kategori') }}" class="hover:scale-[1.05] transition-all">
                    <div class="w-[10rem] h-[3rem] rounded-[10px] bg-blue-950 flex justify-center items-center">
                        <div class="text-white font-semibold ">Lebih Banyak..</div>
                    </div>
                </a>
            </div>
        @endif
    </div>
    <div class="-translate-y-[3rem]" id="anggota"></div>
    <div class="w-full h-auto container mx-auto mt-[3rem]">
        <div class="w-full h-auto flex justify-center items-center">
            <div class="font-bold text-3xl text-blue-950">Dev {{ config('app.name') }}</div>
        </div>
        <div class="w-full h-full overflow-hidden flex gap-[15px] justify-center items-center flex-wrap mt-4">
            @foreach($kelompok as $data)
            <a href="https://instagram.com/{{$data->username}}"  >
                <div class="w-[25rem] h-[20rem] bg-white rounded-[10px] shadow-md overflow-hidden group">
                    <img src="{{ Storage::url($data->foto) }}" alt=""
                        class="object-cover w-[25rem] h-[20rem] rounded-[10px] grayscale blur-sm hover:grayscale-0 hover:blur-none transition-all">
                    <div
                        class="w-full h-[7rem] -translate-y-[5rem] bg-gradient-to-t from-blue-950 px-4 group-hover:-translate-y-[7rem] group-hover:transition-all">
                        <div class="font-bold text-lg text-white pt-[2.5rem]">{{$data->nama}}</div>
                        <div class="text-white font-semibold mt-2">{{$data->role}}</div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

<script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById('navbar').classList.add('backdrop-blur-sm')
            document.getElementById('navbar').classList.add('bg-blue-950/50')
            document.getElementById('navbar').classList.add('transition-all')
            document.getElementById('div').classList.remove('bg-white')
            document.getElementById('div').classList.add('bg-blue-950')
            document.getElementById('button').classList.remove('text-blue-950')
            document.getElementById('button').classList.add('text-white')
        } else {
            document.getElementById('navbar').classList.remove('backdrop-blur-sm')
            document.getElementById('navbar').classList.remove('bg-blue-950/50')
            document.getElementById('button').classList.remove('text-white')
            document.getElementById('button').classList.add('text-blue-950')
            document.getElementById('div').classList.remove('bg-blue-950')
            document.getElementById('div').classList.add('bg-white')
        }
    }
</script>
