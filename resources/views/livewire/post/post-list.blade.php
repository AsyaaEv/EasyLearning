<div class="w-full h-auto" >
    <div class="w-full h-[5rem] bg-blue-950 flex justify-between top-0 z-50 shadow-lg" id="navbar">
      <div class="w-auto h-full flex items-center px-[3rem]">
        <a href="{{url('/')}}">
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
                <a href="{{url('/dashboard')}}">
                    <div class="w-auto h-auto container mx-auto flex pl-[2rem] items-center gap-[15px] hover:scale-[1.05] transition-all hover:cursor-pointer">
                        <div class="w-full h-auto flex gap-[15px] bg-blue-900 p-2 rounded-[10px]">
                            <i class="bi bi-columns text-white text-2xl"></i>
                            <div class="text-white font-semibold text-xl">Dashbord</div>
                        </div>
                    </div>
                </a>
                
                <div class="dropdown">
                        <div class="w-auto h-auto flex container mx-auto pl-[2rem] items-center gap-[15px] hover:scale-[1.05] group  transition-all hover:cursor-pointer">
                            <button class="w-full h-auto flex gap-[15px] p-2 rounded-[10px] group-hover:bg-blue-900" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-book-fill text-white text-2xl"></i>
                                <div class="text-white font-semibold text-xl">Materi</div>
                            </button>
                            <ul class="dropdown-menu">
                                @forelse($post as $item)
                                <li><a class="dropdown-item w-auto h-auto font-semibold hover:bg-blue-900 mx-2 rounded-[10px] hover:text-white text-blue-950" href="{{url('/dashboard/materi/'.$item->id)}}">{{$item->mapel}}</a></li>
                                @empty
                                <li><a class="dropdown-item w-auto h-auto font-semibold hover:bg-blue-900 mx-2 rounded-[10px] hover:text-white text-blue-950">Belum Ada Mapel</a></li>
                                @endforelse
                            </ul>
                        </div>
                </div>
                <a href="{{url('/dashboard/kelompok')}}">
                    <div class="w-auto h-auto container mx-auto flex pl-[2rem] items-center gap-[15px]  hover:scale-[1.05] transition-all hover:cursor-pointer">
                        <div class="w-full h-auto flex gap-[15px]  p-2 rounded-[10px] hover:bg-blue-900">
                            <i class="bi bi-people text-white text-2xl"></i>
                            <div class="text-white font-semibold text-xl">Anggota</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-[80%] h-auto flex justify-center items-center">
            <div class="w-[95%] h-[90%] bg-white relative rounded-[10px] shadow-lg flex-col">
                <div class="w-full flex justify-between mt-2">
                    <div class="font-bold text-blue-950 flex justify-center items-center ml-[3rem] text-2xl">
                        Mapel
                    </div>
                    <div class="flex justify-center items-center">
                        <a href="{{url('/dashboard/add')}}">
                        <div class="w-[10rem] h-[3rem] bg-blue-950 rounded-[10px] flex justify-center items-center shadow-md mr-8">
                            <div class="font-bold text-white">Add Mapel</div>
                        </div>
                    </a>
                    </div>
                </div>
                @if(!$post->isEmpty())
                <div class="w-full h-[36rem] flex justify-center gap-[15px] flex-wrap overflow-auto pb-[2rem] pt-4">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col" class="table-primary">#ID</th>
                            <th scope="col" class="table-primary">Cover</th>
                            <th scope="col" class="table-primary">Mapel</th>
                            <th scope="col" class="table-primary">Action</th>
                          </tr>
                        </thead>
                        @else
                        <div class="w-full h-[36rem] flex justify-center items-center">
                            <div class="w-[30rem] h-[10rem] bg-blue-950 rounded-[10px] flex justify-center items-center gap-[10px]">
                                <i class="bi bi-exclamation-triangle-fill text-white text-6xl" id="gambar"></i>
                                <div class="text-white font-bold text-xl">Mapel Belum Tersedia!!</div>
                            </div>
                        </div>
                        <table class="table-striped hidden">
                            <thead>
                              <tr>
                                <th scope="col" class="table-primary">#ID</th>
                                <th scope="col" class="table-primary">Cover</th>
                                <th scope="col" class="table-primary">Mapel</th>
                                <th scope="col" class="table-primary">Action</th>
                              </tr>
                            </thead>
                        @endif
                        <tbody class="">
                          @foreach($post as $item)
                          <tr>
                            <th scope="row">{{$item->id}}</th>
                            <th scope="row"><img src="{{Storage::url($item->cover)}}" alt="" class="w-[5rem] h-[5rem] object-cover"></th>
                            <td>{{$item->mapel}}</td>
                            <td>
                              <a href="{{url('/dashboard/kategori/edit/' .$item->id)}}"><i class="bi bi-pencil text-xl text-green-500"></i></a>
                              <button data-bs-toggle="modal" data-bs-target="#deletekategori{{$item->id}}"><i class="bi bi-trash text-xl text-red-500"></i></button>
                              <div class="modal fade " id="deletekategori{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Kategori</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                              Apakah anda yakin ingin menghapus kategori <b>{{$item->mapel}}</b>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary bg-slate-600" data-bs-dismiss="modal">Cancel</button>
                                              <button type="button" wire:click="deletekategori({{$item->id}})" data-bs-dismiss="modal" class="btn btn-primary bg-blue-950">Delete</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              @endforeach
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>