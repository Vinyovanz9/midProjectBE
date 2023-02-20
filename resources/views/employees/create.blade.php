<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: rgb(244, 244, 244)">
    <div class="container card mt-5">
        <div class="card-body">
            <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                    @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Usia</label>
                    <input type="text" class="form-control" name="usia" value="{{ old('usia') }}">
                    @error('usia')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">No_Telp</label>
                    <input type="text" class="form-control" name=">no_Telp" value="{{ old('>no_Telp') }}">
                    @error('>no_Telp')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-md btn-primary">Save</button>
            </form>
        </div>
    </div>

</body>

</html>
