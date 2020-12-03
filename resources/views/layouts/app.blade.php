<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @isset($meta)
            {{ $meta }}
        @endisset

        <!-- Styles -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@400;600;700&family=Open+Sans&display=swap" rel="stylesheet"> --}}
        <link href="{{ asset('css/nunito-sans.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/notyf/notyf.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}" media="all">
        {{-- <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all">
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all"> --}}

        {{-- <link rel="stylesheet" href="{{ asset('css/free-v4-shims.min.css') }}" media="all">
        <link rel="stylesheet" href="{{ asset('css/free-v4-font-face.min.css') }}" media="all">
        <link rel="stylesheet" href="{{ asset('css/free.min.css') }}" media="all"> --}}

        <livewire:styles />

        <!-- Scripts -->
        <script defer src="{{ asset('vendor/alpine.js') }}"></script>
    </head>
    <body class="antialiased">
        <div id="app">
            <div class="main-wrapper">
                @include('components.navbar')
                @include('components.sidebar')

                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                      <div class="section-header">
                        @isset($header_content)
                            {{ $header_content }}
                        @else
                            {{ __('Halaman') }}
                        @endisset
                      </div>

                      <div class="section-body">
                        {{ $slot }}
                      </div>
                    </section>
                  </div>
            </div>
        </div>

        @stack('modals')

        <!-- General JS Scripts -->
        <script src="{{ asset('stisla/js/modules/jquery.min.js') }}"></script>
        <script defer async src="{{ asset('stisla/js/modules/popper.js') }}"></script>
        <script defer async src="{{ asset('stisla/js/modules/tooltip.js') }}"></script>
        <script src="{{ asset('stisla/js/modules/bootstrap.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/jquery.nicescroll.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/moment.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/marked.min.js') }}"></script>
        <script defer src="{{ asset('vendor/notyf/notyf.min.js') }}"></script>
        <script defer src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/chart.min.js') }}"></script>
        <script defer src="{{ asset('vendor/select2/select2.min.js') }}"></script>

        <script src="{{ asset('stisla/js/stisla.js') }}"></script>
        <script src="{{ asset('stisla/js/scripts.js') }}"></script>

        <livewire:scripts />
        <script src="{{ mix('js/app.js') }}" defer></script>

        @isset($script)
            {{ $script }}
        @endisset
        
        {{-- <script>
            function resetPengunjung() {
                event.preventDefault();
                var form = event.target.form;
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        let url = "{{ route('settingpengunjung.reset') }}";
                        document.location.href=url;
                    }
                })
            }

            function tambahPengunjung(){
                Swal.fire({
                    title: 'Form Tambah Jamaah',
                    html: `<input type="number" min="1" max="2" id="lantaitambahmasjid" class="swal2-input" placeholder="Lantai Masjid">
                    <input type="number" min="0" id="jumlahtambahpengunjung" class="swal2-input" placeholder="Jumlah Jamaah">`,
                    confirmButtonText: 'Tambah',
                    focusConfirm: false,
                preConfirm: () => {
                    const lantai = Swal.getPopup().querySelector('#lantaitambahmasjid').value
                    const jumlahjamaah = Swal.getPopup().querySelector('#jumlahtambahpengunjung').value
                    if (!lantai || !jumlahjamaah) {
                        Swal.showValidationMessage(`Inputkan Lantai dan Jumlah Jamaah`)
                    }
                    return { lantai: lantai, jumlahjamaah: jumlahjamaah }
                }
                }).then((result) => {
                    if (result.value) {
                        let url = "http://127.0.0.1:8000/pengunjung/tambah/" + result.value.lantai + "/" + result.value.jumlahjamaah;
                        document.location.href=url;
                    }
                })
            }

            function kurangPengunjung(){
                Swal.fire({
                    title: 'Form Kurang Jamaah',
                    html: `<input type="number" min="1" max="2" id="lantaikurangmasjid" class="swal2-input" placeholder="Lantai Masjid">
                    <input type="number" min="0" id="jumlahkurangpengunjung" class="swal2-input" placeholder="Jumlah Jamaah">`,
                    confirmButtonText: 'Kurang',
                    focusConfirm: false,
                preConfirm: () => {
                    const lantai = Swal.getPopup().querySelector('#lantaikurangmasjid').value
                    const jumlahjamaah = Swal.getPopup().querySelector('#jumlahkurangpengunjung').value
                    if (!lantai || !jumlahjamaah) {
                        Swal.showValidationMessage(`Inputkan Lantai dan Jumlah Jamaah`)
                    }
                    return { lantai: lantai, jumlahjamaah: jumlahjamaah }
                }
                }).then((result) => {
                    if (result.value) {
                        let url = "http://127.0.0.1:8000/pengunjung/kurang/" + result.value.lantai + "/" + result.value.jumlahjamaah;
                        document.location.href=url;
                    }
                })
            }
        </script> --}}
    </body>
</html>
