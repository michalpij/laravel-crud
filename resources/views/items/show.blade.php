@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Item Details</h2>
        <table class="table">
            <tr>
                <th>ID:</th>
                <td>{{ $item->id }}</td>
            </tr>
            <tr>
                <th>Name:</th>
                <td>{{ $item->name }}</td>
            </tr>
            <tr>
                <th>Description:</th>
                <td>{{ $item->description }}</td>
            </tr>
        </table>
        <a href="{{ route('items.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
