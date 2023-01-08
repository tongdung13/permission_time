@extends('layouts.app')

@section('title', 'Create Time')

@section('content')

    <div class="container">
        <h3>Them moi time</h3>
        <hr>
        <form action="{{ route('times.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Date From</label>
                        <div class='input-group date' id='datetimepicker'>
                            <input type="text" name="date_from" class="form-control " value="{{ old('date_from') }}"
                                id="">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <label for="">From To</label>
                    <div class='input-group date' id='datetimepicker'>
                        <input type="text" name="date_to" class="form-control " value="{{ old('date_to') }}"
                            id="">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success">Them moi</button>
            </div>

        </form>
    </div>


@endsection
