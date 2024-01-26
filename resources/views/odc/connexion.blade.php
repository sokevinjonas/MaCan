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

    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">


                        <div class="text-center mt-4">
                            <h1 class="h2">CAN 2024 </h1>
                        </div>

                        <div class="card b-1Digi">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <img src="/assets/img/logo_can.jpg" alt="Logo CAN" class="img-fluid"
                                            width="132" height="132" />
                                    </div>
                                    <strong class="text-teprogesco-vertfoncee text-align-center">
                                        @if ($errors->has('error'))
                                            <p class="error-message">{{ $errors->first('error') }}</p>
                                        @endif
                                    </strong>

                                    <livewire:connexion-admin />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    @include('footerDigi')

    @livewireScripts

</body>

</html>
