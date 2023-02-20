<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Employees Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: rgb(244, 244, 244)">
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center">{{ __('UPDATE ITEM') }} </div>
        <div class="card-body">
            
            <form action="{{route('employees.update', $employee->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input name="nama" type="text" value="{{$employee->nama}}" class="form-control" placeholder="Input Your Name">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
 
                <div class="mb-3">
                    <label for="usia" class="form-label">Usia</label>
                    <input name="usia" type="integer" value="{{$employee->usia}}" class="form-control" id="formGroupExampleInput" placeholder="How Old Are You?">
                    @error('usia')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input name="alamat" type="text" value="{{$employee->alamat}}" class="form-control" id="formGroupExampleInput" placeholder="Where do you live?">
                    @error('alamat')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="no_telp" class="form-label">No_Telp</label>
                    <input name="no_telp" type="text" value="{{$employee->no_telp}}" class="form-control" id="formGroupExampleInput" placeholder="What is Your Number?">
                    @error('no_telp')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="card-body text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
