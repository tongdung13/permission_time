@extends('layouts.app')

@section('title', 'Time')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Time</h3>
            </div>
            <div class="col-6" style="text-align: right">
                <a href="{{ route('times.create') }}" class="btn btn-primary">Them moi</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date From</th>
                    <th>Date To</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if ($times->isEmpty())
                    <tr>
                        <td colspan="4" style="text-align: center; color: red">Khong co du lieu</td>
                    </tr>
                @else
                    @foreach ($times as $key => $time)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $time->date_from }}</td>
                            <td>{{ $time->date_to }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection

