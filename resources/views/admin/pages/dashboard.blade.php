@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0 font-weight-bold">Hello, {{ auth()->user()->name }}</h3>
        </div>
    </div>
    <div class="row  mt-3 mb-3">
        <div class="col-3 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 text-center">Jumlah Proyek</h4>
                    <div class="display-2 text-center">
                        {{ $count['proyek'] }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 text-center">Jumlah Peralatan</h4>
                    <div class="display-2 text-center">
                        {{ $count['peralatan'] }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 text-center">Jumlah Personil</h4>
                    <div class="display-2 text-center">
                        {{ $count['personil'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
