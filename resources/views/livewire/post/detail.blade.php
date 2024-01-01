<div class="w-full h-auto" >
    <div class="w-full h-[5rem] bg-blue-950 flex justify-between top-0 z-50 shadow-lg" id="navbar">
      <div class="w-auto h-full flex items-center px-[3rem]">
        <a href="{{url('/')}}">
          <div class="font-bold text-xl text-white" id="judul">EasyLearning</div>
        </a>
      </div>
      <div class="w-auto h-full px-[3rem] flex items-center justify-center">
        <div class="flex gap-[15px]">
            <div class="text-center font-bold text-2xl text-white">Dashboard {{$this->mapel}}</div>
        </div>
      </div>
      <
    </div>

    <div class="w-full h-screen flex">
        <div class="w-[20%] h-full bg-blue-950">
            <div class="w-full h-auto py-[2rem] flex flex-col gap-[10px]">
                <a href="{{url('/dashboard')}}">
                    <div class="w-auto h-auto flex pl-[2rem] items-center gap-[15px] hover:scale-[1.1] transition-all hover:cursor-pointer">
                        <div class="w-auto h-auto flex gap-[15px]  p-2 rounded-[10px]">
                            <i class="bi bi-columns text-white text-2xl"></i>
                            <div class="text-white font-semibold text-xl">Dashbord</div>
                        </div>
                    </div>
                </a>
                <a href="{{url('/dashboard/detail/' . $this->id)}}" class="overflow-hidden">
                    <div class="w-auto h-auto flex pl-[2rem] items-center  hover:scale-[1.1] transition-all hover:cursor-pointer ">
                        <div class="w-auto h-auto flex gap-[15px] bg-blue-900 p-2 rounded-[10px]">
                            <i class="{{$this->icon}} text-white text-2xl"></i>
                            <div class="text-white font-semibold text-xl">{{$this->mapel}}</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-[80%] h-auto flex justify-center items-center">
            <div class="w-[95%] h-[90%] bg-white relative rounded-[10px] shadow-lg flex-col">
                <div class="w-full flex justify-between mt-2">
                    <div class="font-bold text-blue-950 flex justify-center items-center ml-[3rem] text-2xl">
                        Materi {{$this->mapel}}
                    </div>
                    
                    <div class="flex justify-center items-center">
                        <a href="{{url('/dashboard/materi/add/')}}">
                        <div class="w-[10rem] h-[3rem] bg-blue-950 rounded-[10px] flex justify-center items-center mr-8">
                            <div class="font-bold text-white text-center">+Materi {{$this->mapel}}</div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="w-full h-[36rem] flex justify-center gap-[15px] container mx-auto  flex-wrap overflow-auto pb-[2rem] pt-4">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col" class="table-primary">#ID</th>
                            <th scope="col" class="table-primary">Tumbail</th>
                            <th scope="col" class="table-primary">Materi</th>
                            <th scope="col" class="table-primary">Action</th>
                          </tr>
                        </thead>
                        <tbody class="">
                          @foreach($post as $item)
                          <tr>
                            <th scope="row">{{$item->id}}</th>
                            <th scope="row"><img src="{{Storage::url($item->tumbnail)}}" alt="" class="w-[5rem] h-[5rem] object-cover"></th>
                            <td>{{$item->judul}}</td>
                            <td>
                              <a href="{{url('/dashboard/materi/edit/' .$item->id)}}"><i class="bi bi-pencil"></i></a>
                              <a href="{{url('/dashboard/materi/delete/' .$item->id)}}"><i class="bi bi-trash"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>