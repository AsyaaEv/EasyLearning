<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            font-family: 'Montserrat', sans-serif;
        }

        html{
            scroll-behavior: smooth;
        }

        #scroll{
            overflow-x: scroll;
        }

        #wrap{
            width: max-content;
        }

        #gambar{
            animation: buku 3s infinite;
        }

        #title{
            overflow: hidden;
            white-space: nowrap;
            border-right: 1px solid black;
            padding-right: 5px;
            animation: typing 2s steps(30) alternate infinite, blink 1s infinite;
        }

        @keyframes typing{
            0%{
                width: 0%;
                visibility: hidden;
            }
            100%{
                width: 103%;
            }
        }
        @keyframes blink{
            50%{
                border-color: transparent;
            }
            100%{
                border-color: black;
            }
        }

        @keyframes buku{
            0%{
                transform: translateY(-10px);
            }
            50%{
                transform: translateY(0px);
            }
            100%{
                transform: translateY(-10px);
            }
        }
      </style>
</head>
<body>
    <div class="bg-[#ededed]">
        @yield('content')
        @yield('footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@livewireScripts
</body>
</html>