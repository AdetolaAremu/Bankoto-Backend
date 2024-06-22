<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('styles')

    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
    <body class="bg-white overflow-x-hidden">
      <div>
        <livewire:scripts />

        <div class="flex justify-between">
          <div>
            <img src="{{ asset('/assets/images/sideImage.png') }}" alt="logo" class="h-screen w-[56rem]">
          </div>
          <div class="flex justify-center w-full">
            {{$slot}}
          </div>
        </div>

      </div>
		
      <script>
        Livewire.on('notify', (message) => {
            Swal.fire({
                title: message[1],
                text: message[0],
                icon: message[2],
                showConfirmButton: false,
                timer: 3000,
                willClose: () => {
                  let currentUrl = window.location.href;
                }
            });
        });
      </script>
    </body>
</html>