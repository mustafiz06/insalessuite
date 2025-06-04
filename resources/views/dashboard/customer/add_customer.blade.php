@extends('layouts.app')


@section('content')
    <section class="tab-components">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Add Customer</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#0">Customer</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Add
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <form class="form-elements-wrapper" method="POST" action="{{ route('add_customer_post') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <h6 class="mb-25">Add Customer</h6>
                            <div class="input-style-1">
                                <label>Full Name</label>
                                <input type="text" placeholder="Full Name" required name="fullname" />
                            </div>
                            <div class="input-style-1">
                                <label>Address</label>
                                <input type="text" placeholder="Address" required name="address" />
                            </div>
                            <div class="input-style-1">
                                <label>Phone</label>
                                <input type="text" placeholder="Phone" required name="phone" />
                            </div>
                            <div class="input-style-1">
                                <label>Email</label>
                                <input type="text" placeholder="email" name="email" />
                            </div>
                            <div class="select-style-1">
                                <label>Customer type</label>
                                <div class="select-position">
                                    <select name="type">
                                        <option value="">Select Type</option>
                                        <option value="Frequent">Frequent</option>
                                        <option value="Repeat">Repeat</option>
                                        <option value="Normal">Normal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        <!-- end container -->
    </section>
@endsection
