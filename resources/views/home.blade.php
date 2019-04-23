@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <box >
                
            </box>
        </div>
        <div class="col-md-3">
            <box>

            </box>
        </div>
        <div class="col-md-3">
            <box>

            </box>  
        </div>
        <div class="col-md-3">
            <box>

            </box>  
        </div>
    </div>
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-4">
            <panel title="I'm the title" color="orange">
                <h1>No</h1>
            </panel>
        </div>
        <div class="col-md-4">
            <panel title="Me too" color="green-as-hell">
                <h1>ok2</h1>
            </panel>
        </div>
        <div class="col-md-4">
            <panel title="Me too2" color="panel-primary">
                <h1>ok</h1>
            </panel>
        </div>
    </div>
</div>
@endsection