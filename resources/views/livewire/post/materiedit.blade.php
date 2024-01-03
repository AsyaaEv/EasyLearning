<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        #wrap {
            width: max-content;
        }

        #gambar {
            animation: buku 3s infinite;
        }

        #title {
            overflow: hidden;
            white-space: nowrap;
            border-right: 1px solid black;
            padding-right: 5px;
            animation: typing 2s steps(30) alternate infinite, blink 1s infinite;
        }

        @keyframes typing {
            0% {
                width: 0%;
                visibility: hidden;
            }

            100% {
                width: 103%;
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }

            100% {
                border-color: black;
            }
        }

        @keyframes buku {
            0% {
                transform: translateY(-10px);
            }

            50% {
                transform: translateY(0px);
            }

            100% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body>
    <div class="bg-[#ededed]">
        <div class="w-full h-screen pb-[3rem]">
            <div class="w-full h-[5rem] bg-blue-950 flex justify-between top-0 z-50 shadow-lg" id="navbar">
                <div class="w-[10rem] h-auto flex justify-center items-center">
                    <a href="{{ url('/dashboard') }}">
                        <i class="bi bi-arrow-left text-2xl text-white"></i>
                    </a>
                </div>
                <div class="w-auto h-full flex items-center px-[3rem]">
                    <div class="font-bold text-2xl text-white outline-none" id="judul">Add Materi</div>
                </div>
                <div class="w-auto h-full px-[3rem] flex items-center justify-center">
                    <div class="flex gap-[15px]">
                        <div class="text-center font-bold text-xl text-white">EasyLearning</div>
                    </div>
                </div>
            </div>
            <div class="w-full h-auto bg-white rounded-[10px] shadow-md container mx-auto mt-[3rem]">
                <div class="container mt-5">
                    <form action="{{url('/dashboard/materi/edit/proses/' .$data->id)}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <label for="" class="mt-[1rem] font-semibold text-blue-950 text-lg">Judul:</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$data->judul}}">
                        <div class="invalid-feedback">
                            @error('judul')
                                {{ $message }}
                            @enderror
                        </div>
                        <label for="" class="mt-[1rem] font-semibold text-blue-950 text-lg">Content:</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="summernote" cols="30" rows="10">{{$data->content}}</textarea>
                        <div class="invalid-feedback">
                            @error('content')
                                {{ $message }}
                            @enderror
                        </div>
                        <select name="kategori" id="" class="w-[15rem] h-[3rem] bg-blue-950 rounded-[10px] px-4 text-white @error('kategori') is-invalid @enderror">
                            <option value="" selected disabled>===Pilih Mapel===</option>
                            @foreach ($dataKategori as $item)
                                <option value="{{$item->mapel}}" class="text-white">{{$item->mapel}}</option>
                                @endforeach
                            </select>
                        <div class="invalid-feedback">
                            @error('kategori')
                                {{ $message }}
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary bg-blue-950 my-[1rem]">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#summernote').summernote({
                            height: 300,
                        });
                    });
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
                </script>
                @livewireScripts
</body>

</html>
