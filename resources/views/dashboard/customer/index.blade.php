@extends('layouts.app')

@section('content')
    <!-- ========== Main Content ========== -->
    <section class="table-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <a href="{{ route('add.customer') }}">
                                <button class="main-btn primary-btn square-btn btn-hover">
                                    Add Customer
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Customer
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>

            <!-- ========== Content-wrapper start ========== -->
            <div class="tables-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <h6 class="mb-10">Customers List</h6>
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="lead-info">
                                                <h6>SL</h6>
                                            </th>
                                            <th class="lead-email">
                                                <h6>Name</h6>
                                            </th>
                                            <th class="lead-phone">
                                                <h6>Phone No</h6>
                                            </th>
                                            <th class="lead-company">
                                                <h6>Address</h6>
                                            </th>
                                            <th>
                                                <h6>Action</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $index => $customer)
                                            <tr>
                                                <td class="min-width">
                                                    <p><a href="#0"> {{ $index + 1 }}</a></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><a href="#0">{{ $customer->name }}</a></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><a href="#0">{{ $customer->phone }}</a></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><a href="#0">{{ $customer->address }}</a></p>
                                                </td>
                                                <td>
                                                    <div class="action">
                                                        <form action="{{ route('delete.customer', $customer->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button class="text-danger">
                                                                <i class="lni lni-trash-can"></i>
                                                            </button>
                                                        </form>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
