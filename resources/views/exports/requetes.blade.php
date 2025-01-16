<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
    <style>
         table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000; /* Ajoute des bordures */
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2; /* Fond des en-têtes */
        }
    </style>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Pays</th>
                <th>Requete</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requetes as $user)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->pays }}</td>
                    <td>{{ $user->requete }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
