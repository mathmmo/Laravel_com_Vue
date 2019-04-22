@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <panel title="Var title of the component">
                <p>I'm inside a panel component</p>
                <div class="row">
                    <div class="col-md-4">
                        <panel title="I'm the title">
                            <p>I'm inside a panel</p>
                        </panel>
                    </div>
                    <div class="col-md-4">
                        <panel title="Me too">
                            <p>Same her bro!</p>
                        </panel>
                    </div>
                </div>
            </panel>
        </div>
    </div>
</div>
@endsection
