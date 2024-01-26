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

    @livewireStyles

    <style>
        @media (max-width: 800px) {
            .custom-rectangle {
                width: 40px;
                height: 200px;
                border: 4px solid #e40606;
                border-right: none;
                background-color: rgba(0, 0, 0, 0);
                border-radius: 5px;
                padding: 10px;
                z-index: 0;

            }
        }

        @keyframes moveForm {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            25% {
                transform: translateY(-20px) translateX(-20px);
            }

            50% {
                transform: translateY(0) translateX(0);
            }

            75% {
                transform: translateY(20px) translateX(20px);
            }
        }

        .form-telephone {
            animation: moveForm 5s linear infinite;
            /* 5s représente la durée de l'animation, vous pouvez ajuster selon vos besoins */
        }

        #mybody {
            position: relative;
        }

        #mybody::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url('/assets/img/stade.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(2px);
        }
    </style>
</head>

<body>
    <section id="mybody">
        <div class="carousel" style="position: relative;">
            <div class="carousel-container">
                <div class="carousel-slide">
                    <img src="/assets/img/1705091099953.jpg" alt="Image 2" width="100%" height="400px">
                </div>
            </div>
        </div>

        <main class="content">
            <div class="container-fluid">
                <div class="d-block d-lg-none">

                    @livewire('acceuil-form-livewire-telephone')

                    {{-- </div> --}}
                </div>
            </div>

            <div class="d-none d-lg-block mt-3 mb-4">
                <div class="row">
                    @livewire('acceuil-form-livewire-ordinateur')
                </div>
            </div>

            </div>
        </main>
    </section>

    @include('footerDigi')
    @livewireScripts

    <script src="/assets/js/digi.js"></script>
</body>

</html>
