@extends('template.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                   <table align="right"><tr><td><IMG SRC="imajen/am.png" ></td>
                    <IMG SRC="imajen/11.jpg" ></IMG></IMG><td></td></tr></table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
        $(function () {
            $('#from').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            $('#to').datetimepicker({
                language: 'es',
                minDate: new Date()
            });

        });
    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
