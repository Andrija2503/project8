@section('title')
    All phones
@endsection

@extends('layouts.master')

@section('main')
    <h1 class="display-4 m-3">All phones</h1>
    <div class="col-18 offset-1">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_phones as $phone)
                    <tr>
                        <td>{{ $phone->name }}</td>
                        <td>{{ $phone->brand }}</td>
                        <td>{{ $phone->price }}</td>                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection