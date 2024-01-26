<!DOCTYPE html>
<html lang="fr">

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

    <style>
        body {
            position: relative;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 5px auto;
            padding: 10px 20px;
        }

        form {
            /* position: absolute; */
            /* top: 50%;
            left: 50%; */
            /* width: 80%; */
            padding: 20px;
            /* transform: translate(-50%, -50%); */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px #ED781D;
        }

        .pronos {
            position: relative;
            margin-top: 5px;
        }

        .resultat {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .no-pronostics {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }

        .pronostics-table {
            margin-top: 20px;
        }

        .pronostics-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .pronostics-table th,
        .pronostics-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .pronostics-table th {
            background-color: #f2f2f2;
        }

        .no-pronostics {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }

        .pronostics-table {
            margin-top: 20px;
        }

        .pronostics-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .pronostics-table th,
        .pronostics-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .pronostics-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="mb-5">
            <div class="d-flex">
                <a href="{{ route('index') }}" style="color:#000000;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        fill="rgba(234,113,46,1)">
                        <path
                            d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z">
                        </path>
                    </svg>
                    Retour</a>
            </div>
        </div>

        <div class="d-flex flex-column">
            <div class="container-fluide pronos mt-5">
                <h4 class="text-center mb-5 p-2">🤩 Pronostique Burkina vs Algérie et remporte un maillot gratuit 🏆
                </h4>
                <p class="text-center">Participe maintenant ! Fais ton pronostic, vis une expérience unique et gagne un
                    superbe maillot.⚽
                </p>
                <form method="POST" action="{{ route('pronostic.store') }}" class="mt-5">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <img src="/assets/img/bf.png" alt="Burkina Faso" class="img-fluid">
                        </div>
                        <input type="text" name="pays1" value="Burkina" hidden>
                        <div class="col">
                            VS
                        </div>
                        <div class="col-5">
                            <input type="text" name="pays2" value="Algérie" hidden>
                            <img src="/assets/img/Algeria.png" alt="Algérie" class="img-fluid">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="choix1">Donne ton score :</label>
                            <select class="form-control" id="choix1" name="score">
                                <option value="0-0">0-0</option>
                                <option value="1-0">1-0</option>
                                <option value="0-1">0-1</option>
                                <option value="1-1">1-1</option>
                                <option value="2-0">2-0</option>
                                <option value="0-2">0-2</option>
                                <option value="2-1">2-1</option>
                                <option value="1-2">1-2</option>
                                <option value="2-2">2-2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="tel">Laisser votre numéro :</label>
                        <input type="number" class="form-control" style="width: 80%; margin-left:10px" name="tel"
                            id="tel">
                    </div>
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-primary mt-3">Envoie ton pronostic 🍾</button>
                    </div>
                </form>

            </div>

            <div class="resultat mt-5">
                <h3>Pronostics pour le match</h3>

                @if ($pronostics->isEmpty())
                    <p>Aucun pronostic enregistré pour le moment.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>

                                <th>Ordre</th>
                                <th>Contact</th>
                                <th>Prédiction</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pronostics as $pronostic)
                                <tr>
                                    <td>{{ $pronostic->id }}</td>
                                    <td>{{ $pronostic->tel }}</td>
                                    <td>{{ $pronostic->score }}</td>
                                    {{-- <td><strong>{{ $pronostic->pays1 }} vs {{ $pronostic->pays2 }}</strong></td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                <div class="paginate">
                    {{ $pronostics->links() }}
                </div>
            </div>
        </div>
    </div>
    @include('footerDigi')
</body>

</html>
