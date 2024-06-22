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

        @include('includes.sidebar')
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

                  if (message[2] == 'success') {
                    if (window.location.href.includes('/products-create')) {
                        window.location.href = "{{ route('Products') }}";
                    }

                    if (window.location.href.includes('/media-create')) {
                        window.location.href = "{{ route('Media') }}";
                    }
                  }
                }
            });
        });
      </script>
    </body>
</html>