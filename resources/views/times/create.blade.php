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
                        <div class='input-group date'>
                            <input type="text" name="date_from" class="form-control " id='datepicker'
                                value="{{ old('date_from') }}" id="">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <label for="">From To</label>
                    <div class='input-group date'>
                        <input type="text" name="date_to" class="form-control " id='datepicker1'
                            value="{{ old('date_to') }}" id="">
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

@section('script')

    <script>
        $(document).ready(function() {
            $("#datepicker").datepicker({
                dateFormat: "dd-m-yy",
                // showMonthAfterYear: true,

                numberOfMonths: 1,
                minDate: 0,
                // onSelect: function(selected) {
                //     $("#datepicker1").datepicker("option", "minDate", selected);
                //     select();
                // }
            });
            $("#datepicker1").datepicker({
                dateFormat: "dd-m-yy",
                minDate: 1,
                onClose: function() {
                    var dt1 = $('#datepicker').datepicker('getDate');
                    var dt2 = $('#datepicker1').datepicker('getDate');
                    if (dt2 <= dt1) {
                        var minDate = $('#datepicker1').datepicker('option', 'minDate');
                        $('#datepicker1').datepicker('setDate', minDate);
                    }
                }
            }).datepicker("datepicker", new Date());


        });
    </script>

@endsection
