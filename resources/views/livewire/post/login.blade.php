<div class="w-full h-screen flex justify-center items-center">
    <div class=" absolute top-0 gap-[10px] alert alert-{{ session('alert') }} mt-[3rem] w-[30rem] h-[6rem] flex justify-center items-center"
        role="alert" id="alert">
        @if (session('alert'))
        <i class=" bi bi-exclamation-triangle-fill text-4xl" id="gambar"></i>
        <div class="font-semibold">
            {{ session('msg') }}
        </div>
        @endif
    </div>
    <div class="w-[70rem] h-[45rem] bg-white rounded-[15px] shadow-md flex">
        <div class="w-full h-full flex justify-center items-center flex-col">
            <div class="w-full h-auto flex gap-[10px] flex-col">
                <div class="text-center text-6xl text-blue-950 font-bold">Log In</div>
                <div class="text-center text-xl text-blue-950 font-medium">Use username and enter the password!</div>
            </div>

            <form class="w-[30rem] h-auto container mx-auto" wire:submit.prevent='login'>
                <div class="w-full h-auto flex flex-col gap-[10px] container mx-auto justify-center items-center mt-8">
                    <i class="bi bi-person-circle absolute text-2xl mr-[23.5rem] mb-[3.5rem] text-blue-950"></i>
                    <input
                        class="form-control @error('username') is-invalid @enderror w-full h-[3rem] bg-[#d3d3d3] rounded-[10px] pl-[3rem] placeholder:text-blue-950 text-blue-950 font-semibold focus:outline-blue-950"
                        placeholder="Username" wire:model="username">
                    <div class="absolute mb-[8rem]  text-red-900 font-medium">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                    <i class="bi bi-lock-fill absolute text-2xl mr-[23.5rem] mt-[3.5rem] text-blue-950"></i>
                    <input type="password"
                        class="form-control @error('password') is-invalid @enderror w-full h-[3rem] bg-[#d3d3d3] rounded-[10px] pl-[3rem] placeholder:text-blue-950 text-blue-950 font-semibold focus:outline-blue-950"
                        placeholder="Password" wire:model="password">
                    <div class="absolute mt-[8rem] text-red-900 font-medium">
                        @error('password')
                            {{ $message }}
                        @enderror

                    </div>
                </div>
                <div class="w-full h-auto mt-8 flex justify-center items-center">
                    <button
                        class="w-[10rem] h-[3rem] rounded-[10px] bg-blue-950 flex justify-center items-center hover:bg-blue-900 transition-all text-white font-semibold">Login</button>

                </div>
            </form>
        </div>
        <div class="w-full h-full overflow-hidden">
            <div
                class="w-full h-full  bg-blue-950 rounded-tl-[150px] rounded-tr-[15px] rounded-br-[15px] rounded-bl-[100px] flex justify-center items-center">
                <div class="w-full h-auto ">
                    <div class="text-white text-center font-bold text-5xl">{{ config('app.name') }}</div>
                    <div class="text-white text-center font-semibold mt-2">Login to enter dashboard admin
                        {{ config('app.name') }}</div>
                    <div class="w-full h-auto flex justify-center items-center">
                        <img src="{{ Storage::url('images/buku.png') }}" alt="" id="gambar"
                            class="w-[20rem] h-[20rem]">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const alert = document.getElementById('alert');
    alert.classList.add('hidden')
</script>
