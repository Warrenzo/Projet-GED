@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-4">Admin Dashboard</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Documents Totals</h5>
                                <i class="bi bi-file-earmark-text" style="font-size: 2rem;"></i>
                            </div>
                            <p class="card-text display-4">{{ $totalDocuments }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Utilisateurs Totals</h5>
                                <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                            </div>
                            <p class="card-text display-4">{{ $totalUsers }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-white bg-warning mb-3" >
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Repertoires Total</h5>
                                <i class="bi bi-layers-fill" style="font-size: 2rem;"></i>
                            </div>
                            <p class="card-text display-4">{{ $totalClassifications }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
