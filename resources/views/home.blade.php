@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                        @if (!Auth::guest() && Auth::user()->hasRole('admin'))
                            You are admin!
                        @else
                            You are subscriber!
                        @endif

                        @if (Auth::user()->can('negotiation-create'))
                            I can negotiation-create
                        @endif

                        @if (Auth::user()->can('schedule-create'))
                            I can schedule-create
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
