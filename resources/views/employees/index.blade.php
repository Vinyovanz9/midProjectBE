<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: rgb(244, 244, 244)">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <table class="table table-light table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Usia</th>
                            <th>Alamat</th>
                            <th>No_Telp</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($employees as $employee)
                            <tr>
                                <td>{{ $employee->Nama }}</td>
                                <td>{{ $employee->Usia }}</td>
                                <td>{{ $employee->Alamat }}</td>
                                <td>{{ $employee->No_Telp }}</td>
                                <td>
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('delete', ['id' => $employee->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
                <a href="{{ route('employees.create') }}" class="btn btn-success">Tambah</a>
                {{ $employees->links() }} 
            </div>
            </div>
        </div>
    </div>

</body>

</html>
