<div class="w-full h-screen pb-[3rem]">
    <div class="w-full h-[5rem] bg-blue-950 flex justify-between top-0 z-50 shadow-lg" id="navbar">
        <div class="w-[10rem] h-auto flex justify-center items-center">
            <a href="{{ url('/dashboard') }}">
                <i class="bi bi-arrow-left text-2xl text-white"></i>
            </a>
        </div>
        <div class="w-auto h-full flex items-center px-[3rem]">
            <div class="font-bold text-2xl text-white outline-none" id="judul">Add Mapel</div>
        </div>
        <div class="w-auto h-full px-[3rem] flex items-center justify-center">
            <div class="flex gap-[15px]">
                <div class="text-center font-bold text-xl text-white">EasyLearning</div>
            </div>
        </div>
    </div>

    <div class="w-full h-[30rem] bg-white rounded-[10px] shadow-md container mx-auto mt-[3rem]">
        <div class="container mt-5">
            <div class="alert @if (!empty(session('alert'))) alert-{{ session('alert') }} @else d-none @endif">
                @if (!empty(session('alert')))
                    {{ session('msg') }}
                @endif
            </div>
            <form wire:submit.prevent='submitMapel' enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="" class="font-bold text-2xl text-blue-950 mt-[2rem]">{{ __('Mapel') }}</label>
                    <input type="text" class="form-control @error('mapel') is-invalid @enderror" wire:model="mapel">
                    <div class="invalid-feedback">
                        @error('mapel')
                            {{ $message }}
                        @enderror
                    </div>
            
                </div>
                </div>
                <div class="form-group mb-3">
                    <label for="" class="font-bold text-2xl text-blue-950 mt-[1rem]">{{ __('Cover') }}</label>
                    <input type="file" class="form-control @error('cover') is-invalid @enderror" wire:model="cover">
                    <div class="invalid-feedback">
                        @error('cover') {{ $message }} @enderror
                    </div>
                    @if($cover)
                        <img src="{{ $cover->temporaryUrl()}}" alt="" class="mt-3" style="width: 100px; height:100px;">
                    @endif
                </div>
                
                <button class="btn btn-primary btn-sm">{{ __('Save') }}</button>
            </form>
        </div>
    </div>
</div>

</div>
</div>

</div>
