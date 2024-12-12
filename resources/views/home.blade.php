@extends('layouts.app_modern')

@section('content')
    <div class="row">
        <div class="col-xxl-4 col-sm-6">
            <div class="card widget-flat text-bg-pink">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-shopping-basket-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Total Order</h6>
                    <h2 class="my-2">8,652</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-4 col-sm-6">
            <div class="card widget-flat text-bg-purple">
                <div class="card-body">
                    <div class="float-end">
                    <i class="ri-shopping-basket-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Total Proses</h6>
                    <h2 class="my-2">$9,254.62</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-4 col-sm-6">
            <div class="card widget-flat text-bg-info">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-shopping-basket-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Total Selesai</h6>
                    <h2 class="my-2">753</h2>
                </div>
            </div>
        </div> <!-- end col-->
    </div>
@endsection