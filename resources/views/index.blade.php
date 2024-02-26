<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ltse of tasks </title>
</head>
<body>
    <div class="container">
            <div class="row justify-content-center">
                <h1 class="mx-auto">Liste des taches </h1>
            </div>
            <a class="btn btn-success" href="{{route('task.create')}}" > Ajouter une tache </a>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Task</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
            <td>{{$task->name}}</td>
            <td>
                <button type="button" class="btn btn-info">Modifier</button>
                <button type="button" class="btn btn-danger" id="delete">Supprimer</button>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <script>
        $('#delete').on('click', function(){
            Swal.fire({
            title: 'Supprission du tache',
            text: "Vous voulez vraiment supprimer cette tache ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire( 'Supprimer!','success')
            }
            })
        })
    </script>
</body>
</html>
