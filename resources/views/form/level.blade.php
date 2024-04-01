@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Form</h1>
@stop
@section('content')
    <!-- general form elements disabled -->
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Form Level</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form>
                <div class="col">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Kode Level</label>
                            <input type="text" class="form-control" placeholder="Kode Level">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Level</label>
                            <input type="text" class="form-control" placeholder="Nama Level<">
                        </div>
                        <div class="p-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@stop
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
