@extends('style.main')

@section('container')
    
<h1>Data Buku</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <button class="btn btn-warning">Edit</button>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        @endsection