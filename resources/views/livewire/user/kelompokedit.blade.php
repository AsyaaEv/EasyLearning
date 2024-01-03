<div class="w-full h-screen pb-[3rem]">
    <div class="w-full h-[5rem] bg-blue-950 flex justify-between top-0 z-50 shadow-lg" id="navbar">
        <div class="w-[10rem] h-auto flex justify-center items-center">
            <a href="{{ url('/dashboard/kelompok') }}">
                <i class="bi bi-arrow-left text-2xl text-white"></i>
            </a>
        </div>
        <div class="w-auto h-full flex items-center px-[3rem]">
            <div class="font-bold text-2xl text-white outline-none" id="judul">Add Anggota</div>
        </div>
        <div class="w-auto h-full px-[3rem] flex items-center justify-center">
            <div class="flex gap-[15px]">
                <div class="text-center font-bold text-xl text-white">EasyLearning</div>
            </div>
        </div>
    </div>

    <div class="w-full h-auto bg-white rounded-[10px] shadow-md container mx-auto mt-[3rem]">
        <div class="mt-5">
            <div class="alert @if (!empty(session('alert'))) alert-{{ session('alert') }} @else d-none @endif">
                @if (!empty(session('alert')))
                    {{ session('msg') }}
                @endif
            </div>
        </div>
        <form wire:submit.prevent='kelompokEdit' enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="" class="font-bold text-2xl text-blue-950 mt-[2rem]">{{ __('Nama') }}</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama">
                <div class="invalid-feedback">
                    @error('nama')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="" class="font-bold text-2xl text-blue-950 mt-2">{{ __('Tugas') }}</label>
                <input type="text" class="form-control @error('role') is-invalid @enderror" wire:model="role">
                <div class="invalid-feedback">
                    @error('role')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="" class="font-bold text-2xl text-blue-950 mt-2">{{ __('Username') }}</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror"
                    wire:model="username">
                <div class="invalid-feedback">
                    @error('username')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="" class="font-bold text-2xl text-blue-950 mt-[1rem]">{{ __('Foto') }}</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" wire:model="foto">
                <div class="invalid-feedback">
                    @error('foto')
                        {{ $message }}
                    @enderror
                </div>
                <div class="flex gap-[10px]">
                    <img src="{{ Storage::url($fotoUser) }}" alt="" class="mt-3"
                        style="width: 100px; height:100px;">
                    @if ($fotos)
                        <img src="{{ $fotos->temporaryUrl() }}" alt="" class="mt-3"
                            style="width: 100px; height:100px;">
                    @endif
                </div>
            </div>
            <button class="btn btn-primary btn-sm mb-4">{{ __('Save') }}</button>
        </form>
    </div>
</div>