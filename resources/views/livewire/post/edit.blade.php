<div>
    <div class="container">
        <div class="card">
            <div class="card-header">Edit</div>
            <div class="card-body">
                <div class="alert @if(!empty(session('alert'))) alert-{{ session('alert')}} @else d-none  @endif">
                    @if(!empty(session('alert'))) {{ session('msg')}} @endif
                </div>
                @if (!$empty)
                <form wire:submit.prevent='save'>
                    <div class="form-group mb-3">
                        <label for="">{{ __('Kategory') }}</label>
                        <input type="text" class="form-control @error('kategory') is-invalid @enderror" wire:model="kategory">
                        <div class="invalid-feedback">
                            @error('kategory') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">{{ __('Title') }}</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title">
                        <div class="invalid-feedback">
                            @error('title') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">{{ __('Content') }}</label>
                        <textarea type="text" class="form-control @error('content') is-invalid @enderror" wire:model="content"></textarea>
                        <div class="invalid-feedback">
                            @error('content') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">{{ __('Gambar') }}</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" wire:model="image">
                        <div class="invalid-feedback">
                            @error('image') {{ $message }} @enderror
                        </div>
                        <img src="{{ Storage::url($this->image)}}" alt="" class="mt-3" style="width: 100px; height:100px;">
                    </div>
                    <button class="btn btn-primary btn-sm">{{ __('Save') }}</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
