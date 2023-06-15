<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Otomatisasi Meteran</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--DataTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
</head>

<body class="hold-transition">
    @include('partials.navbar')

    <section id="content">
        <div class="d-flex flex-row align-items-stretch position-relative w-100 h-100">
            @include('partials.sidebar')
            <div class="mx-auto d-flex flex-column flex-grow-1">
                <div class="flex-grow-1 mx-5">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!--iconfy-->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!--DataTable-->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script src="{{ asset('assets/js/script.js') }}"></script> --}}
    <script>
        var colors = ['#007bff', '#28a745', '#333333', '#c3e6cb', '#dc3545', '#6c757d'];
        var chBar = document.getElementById("chBar");
        // ambil total kwh dari data tagihan
        var bulan = <?php echo json_encode($bulan); ?>;
        console.log(bulan);
        if (chBar) {
            new Chart(chBar, {
                type: 'bar',
                data: {
                    labels: bulan,
                    datasets: [{
                        data: <?php echo json_encode($kwh); ?>,
                        backgroundColor: colors[0]
                    }]
                },
                // options: {
                //     legend: {
                //         display: false
                //     },
                //     scales: {
                //         xAxes: [{
                //             barPercentage: 0.4,
                //             categoryPercentage: 0.5
                //         }]
                //     }
                // }
            });
        }
    </script>
    @yield('script')
</body>

</html>
