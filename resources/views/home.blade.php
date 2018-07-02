@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Dashboard
        </h1>
    </div>

    <div class="row row-cards">
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                        50%
                        <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">15</div>
                    <div class="text-muted mb-4">Solar Panels</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                        -3%
                        <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">29.3<small>MW</small></div>
                    <div class="text-muted mb-4">Energy Consumption</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                        9%
                        <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">30<small>MW</small></div>
                    <div class="text-muted mb-4">Generated Power</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                        3%
                        <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">$92</div>
                    <div class="text-muted mb-4">Monthly Bill</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                        -2%
                        <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">$3.75</div>
                    <div class="text-muted mb-4">Daily Bill</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                        -1%
                        <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">27<small>KW</small></div>
                    <div class="text-muted mb-4">Daily Usage</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-blue mr-3">
                      <i class="fe fe-dollar-sign"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">27
                                <small>Bills</small>
                            </a></h4>
                        <small class="text-muted">3 waiting payments</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-green mr-3">
                      <i class="fe fe-shopping-cart"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">7
                                <small>Purchases</small>
                            </a></h4>
                        <small class="text-muted">7 shipped</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-red mr-3">
                      <i class="fe fe-users"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">1
                                <small>Households</small>
                            </a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-yellow mr-3">
                      <i class="fe fe-message-square"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">4
                                <small>Messages</small>
                            </a></h4>
                        <small class="text-muted">4 waiting</small>
                    </div>
                </div>
            </div>
        </div>
        <consumption-chart></consumption-chart>
        <drainers-chart></drainers-chart>
    </div>
@endsection
