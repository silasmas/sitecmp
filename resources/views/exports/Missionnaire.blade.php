<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Users</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; white-space: nowrap; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Liste des Missionnaire</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>État Civil</th>
                <th>Profession</th>
                <th>Année de conversion</th>
                <th>Date & Lieu Baptême</th>
                <th>Église Attachée</th>
                <th>Temps au CMP</th>
                <th>Département</th>
                <th>Participation Mission</th>
                <th>Formation Biblique</th>
                <th>Lecture Bible</th>
                <th>Livre Bible</th>
                <th>Base Mission</th>
                <th>Concept Familier</th>
                <th>Français</th>
                <th>Anglais</th>
                <th>Autres Langues</th>
                <th>Réseaux Sociaux</th>
                <th>Disponible</th>
                <th>Validation</th>
                <th>Date d'inscription</th>
                <th>Date de modification</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->birthday }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->etat_civil }}</td>
                    <td>{{ $user->profession }}</td>
                    <td>{{ $user->annee_conversion }}</td>
                    <td>{{ $user->date_lieu_bapteme }}</td>
                    <td>{{ $user->eglise_attache }}</td>
                    <td>{{ $user->temps_au_cmp }}</td>
                    <td>{{ $user->departement }}</td>
                    <td>{{ $user->participer_mission }}</td>
                    <td>{{ $user->formation_biblique }}</td>
                    <td>{{ $user->lecture_bible }}</td>
                    <td>{{ $user->livre_bible }}</td>
                    <td>{{ $user->base_mission }}</td>
                    <td>{{ $user->concepte_familier }}</td>
                    <td>{{ $user->langue_fr }}</td>
                    <td>{{ $user->langue_en }}</td>
                    <td>{{ $user->autres }}</td>
                    <td>{{ $user->outils_rs }}</td>
                    <td>{{ $user->disponible }}</td>
                    <td>{{ $user->validationFormulaire }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
