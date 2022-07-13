@extends('layouts.admindash')
@section('content')
<div class="content-wrapper mt-4">
    <div class="container card">
        <div class="row">
            <div class="col-2">
                <h2>Invoice</h2>
            </div>
            <div class="col-8">

            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary btn-sm"><i class=" fa-solid  fa-rotate"></i>| Refresh
                    Page</button>
            </div>
        </div>
    </div>
    <div class="container">
        <h5>Search</h5>
        <p class="inactive"><small>Search by Chalani No. or Project Name</small></p>
        <!-- Search form -->
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    <input class="form-control" type="text" placeholder="search" aria-label="Search">
                </div>
                <div class="col-lg-1">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </div>
            </div>
            <div class="container">
                <!-- <div class="row">
                        <div class="col-lg-2 mt-4">
                            <a href="{{url('/contracts/create')}}" class="btn btn-primary"> <i
                                    class=" fa fa-solid fa-plus"></i> Create New Entry
                            </a>
                        </div>
                        <div class="col-lg-6"></div>
                        <div class="col-lg-2 mt-4">
                            <a href="" class="btn btn-outline-primary"> Reset Filter
                            </a>
                        </div>
                        <div class="col-lg-2 mt-4">
                            <a href="" class="btn btn-primary">open Filter Window
                            </a>
                        </div>
                    </div> -->
                <table class="table mt-4">
                    <thead class="color-secondary">
                        <tr>
                            <th scope="col">चलानी नम्बर</th>
                            <th scope="col">Flow</th>
                            <th scope="col">Related Contract</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 981262121</td>
                            <td> 2,000</td>
                            <td> Hello</td>
                            <td> London</td>


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
