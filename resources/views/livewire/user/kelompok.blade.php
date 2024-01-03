<div class="w-full h-auto">
    <div class="w-full h-[5rem] bg-blue-950 flex justify-between top-0 z-50 shadow-lg" id="navbar">
        <div class="w-auto h-full flex items-center px-[3rem]">
            <a href="{{ url('/') }}">
                <div class="font-bold text-xl text-white" id="judul">EasyLearning</div>
            </a>
        </div>
        <div class="w-auto h-full px-[3rem] flex items-center justify-center">
            <div class="flex gap-[15px]">
                <div class="text-center font-bold text-2xl text-white">Dashboard Admin</div>
            </div>
        </div>
    </div>

    <div class="w-full h-screen flex">
        <div class="w-[20%] h-full bg-blue-950">
            <div class="w-full h-auto py-[2rem] flex flex-col gap-[10px]">
                <a href="{{ url('/dashboard') }}">
                    <div
                        class="w-auto h-auto container mx-auto flex pl-[2rem] items-center gap-[15px] hover:scale-[1.05] transition-all hover:cursor-pointer">
                        <div class="w-full h-auto flex gap-[15px]  p-2 rounded-[10px]">
                            <i class="bi bi-columns text-white text-2xl"></i>
                            <div class="text-white font-semibold text-xl">Dashbord</div>
                        </div>
                    </div>
                </a>

                <div class="dropdown">
                    <div
                        class="w-auto h-auto flex container mx-auto pl-[2rem] items-center gap-[15px] hover:scale-[1.05] group  transition-all hover:cursor-pointer">
                        <button class="w-full h-auto flex gap-[15px] p-2 rounded-[10px] group-hover:bg-blue-900"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-book-fill text-white text-2xl"></i>
                            <div class="text-white font-semibold text-xl">Materi</div>
                        </button>
                        <ul class="dropdown-menu">
                            @foreach ($post as $item)
                                <li><a class="dropdown-item w-auto h-auto font-semibold hover:bg-blue-900 mx-2 rounded-[10px] hover:text-white text-blue-950"
                                        href="{{ url('/dashboard/materi/' . $item->id) }}">{{ $item->mapel }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <a href="{{ url('/dashboard/kelompok') }}">
                    <div
                        class="w-auto h-auto container mx-auto flex pl-[2rem] items-center gap-[15px]  hover:scale-[1.05] transition-all hover:cursor-pointer">
                        <div class="w-full h-auto flex gap-[15px] bg-blue-900  p-2 rounded-[10px] hover:bg-blue-900">
                            <i class="bi bi-people text-white text-2xl"></i>
                            <div class="text-white font-semibold text-xl">Anggota</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-[80%] h-auto flex justify-center items-center">
            <div class="w-[95%] h-[90%] bg-white relative rounded-[10px] shadow-lg flex-col overflow-hidden">
                <div class="w-full flex justify-between mt-2">
                    <div class="font-bold text-blue-950 flex justify-center items-center ml-[3rem] text-2xl">
                        Anggota
                    </div>
                    <div class="flex justify-center items-center">
                        <a href="{{ url('/dashboard/kelompok/add') }}">
                            <div
                                class="w-[10rem] h-[3rem] bg-blue-950 rounded-[10px] flex justify-center items-center shadow-md mr-8">
                                <div class="font-bold text-white">Add Anggota</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full h-full flex gap-[10px] px-4 mt-2 flex-wrap pb-[3rem]" >
                    @forelse ($kelompok as $data)
                    <div class="w-[45%] h-[15rem] bg-blue-950 rounded-[10px] flex">
                        <div class="w-full h-full flex justify-center items-center">
                            <img src="{{Storage::url( $data->foto)}}" alt="" class="shadow-md rounded-[50%] w-[10rem] h-[10rem] object-cover">
                        </div>
                        <div class="w-full h-full flex gap-[10px] flex-col py-3 ">
                            <div class="w-full h-full bg-white rounded-[10px] flex justify-center items-center font-bold text-blue-950 text-xl gap-[10px]">
                                <i class="bi bi-person text-3xl text-blue-950 absolute -translate-x-[8rem]"></i>
                                <div class="">{{$data->nama}}</div>
                            </div>
                            <div class="w-full h-full bg-white rounded-[10px] flex justify-center items-center font-bold text-blue-950 text-xl gap-[10px]">
                                <i class="bi bi-list-task text-3xl text-blue-950 absolute -translate-x-[8rem]"></i>
                                <div class="">{{$data->role}}</div>
                            </div>
                            <div class="w-full h-full bg-white rounded-[10px] flex justify-center items-center font-bold text-blue-950 text-xl gap-[10px]">
                                <i class="bi bi-instagram text-3xl text-blue-950 absolute -translate-x-[8rem]"></i>
                                <div class="">{{$data->username}}</div>
                            </div>
                        </div>
                        <div class="w-[25%] h-full flex justify-center items-center flex-col gap-[15px]">
                            <a href="{{url('/dashboard/kelompok/edit/' .$data->id)}}">
                                <i class="bi bi-pencil text-2xl text-green-500"></i>
                            </a>
                            <i class="bi bi-trash text-2xl text-red-500"></i>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
