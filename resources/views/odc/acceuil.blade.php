<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DigiCenterMaillot">
    <meta name="author" content="Jonas SO">
    <meta name="keywords">

    <title>CAN 2024</title>

    <link rel="shortcut icon" href="/assets/img/logo_can.jpg" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link href="/assets/css/digicentermaillot.css" rel="stylesheet">
    <link href="/assets/css/digi.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">

    @livewireStyles

</head>

<body>
    <div class="wrapper">
        <div class="main">
            <nav class="navbar navbar-expand navbar-light"
                style="border-bottom: 1px solid #0E4030; box-shadow: 0 0 5px #0E4030; background-color: #fff;">
                <div class="d-flex gap-3">
                    <a href="{{ route('index') }}">
                        <img src="/assets/img/logo_can.jpg" alt="" width="89px">
                    </a>
                </div>
                <div class="navbar-collapse collapse d-flex">
                    <ul class="navbar-nav navbar-align">

                        <li class="nav-item dropdown">

                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" data-bs-toggle="dropdown">
                                <i class="align-middle me-2" data-feather="user"></i>
                            </a>
                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" data-bs-toggle="dropdown">
                                <span class="text-dark">{{ $admin->email }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end"
                                style="background-color: #0E4030; color: #fff;">
                                <a class="dropdown-item" href="{{ route('odc.deconnexion_admin') }}"><i
                                        class="align-middle me-2" data-feather="log-out"></i>Déconnexion</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row col-xl-12 p-2 b-1Digi"
                                style="border: 1px solid #0E4030; box-shadow: 0 0 5px #0E4030; background-color: #fff;">
                                {{-- <livewire:statistique /> --}}
                                @livewire('statistique')

                                <div class="card card-danger col-xl-6">
                                    <div class="card-header">
                                        <h3>Statistique global</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="pieChart"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('footerDigi')
    @livewireScripts

    <script src="/assets/js/hkjk.js"></script>
    <!-- jQuery -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/tableau/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/plugins/chart.js/Chart.min.js"></script>
    <script src="/assets/dist/js/adminlte.min.js"></script>
    <script src="/assets/dist/js/demo.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Variables initiales
            var terminerToal = $("#ChiffreTermine").text();
            var VisiteurToal = $("#ChiffreVisiteur").text();
            var MoitieToal = $("#ChiffreMoitie").text();

            var donutData = {
                labels: ['Terminer', 'Visiteur', 'Moitié'],
                datasets: [{
                    data: [terminerToal, VisiteurToal, MoitieToal],
                    backgroundColor: ['#e9ff1d', '#0E4030', '#e40606'],
                }]
            };
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
            var pieData = donutData;
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
            };
            // Créer le graphique initial
            var pieChart = new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            });

        });
    </script>

</body>

</html>
