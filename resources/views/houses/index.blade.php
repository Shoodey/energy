@extends('layouts.app')

@section('content')
    <div class="row row-cards row-deck">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">My houses</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-center table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Owner</th>
                            <th>Address</th>
                            <th>Solar Powered</th>
                            <th>Energy Consumption</th>
                            <th>Monthly Bill</th>
                            <th class="w-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>221B Baker Street</td>
                            <td><i class="fe fe-check-circle text-green"></i></td>
                            <td>
                                24MW
                            </td>
                            <td>
                                $85
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm">
                                        Details
                                    </button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
