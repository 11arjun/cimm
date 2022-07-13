@extends('layouts.admindash')
@section('content')
<div class="content-wrapper mt-4">
    <div class="container card">
        <div class="row">
            <div class="col-2">
                <h2>Contracts</h2>
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
        <p class="inactive"><small>Search by Contact No. or Project Name</small></p>
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
                <div class="row">
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
                </div>
                <table class="table mt-4">
                    <thead class="color-secondary">
                        <tr>
                            <th scope="col">Contract No</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Project Location</th>
                            <th scope="col">Project Completion Date</th>
                            <th scope="col">Project Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 981262121</td>
                            <td> 2,000</td>
                            <td> Hello</td>
                            <td> London</td>
                            <td> 14 hours ago</td>
                            <td> <a href="#" class="badge badge-pill  badge-success">On Time</a>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="" class="btn btn-">
                                        <li class="list-inline-item">
                                            <button class="btn btn-primary btn-sm rounded-1" type="button"
                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-edit"></i></button>
                                        </li>
                                    </a>
                                    <a href="" class="btn btn-">
                                        <li class="list-inline-item">
                                            <button class="btn btn-outline-primary btn-sm rounded-1" type="button"
                                                data-toggle="tooltip" data-placement="top" title="lock"><i
                                                    class="fa fa-lock"></i></button>
                                        </li>
                                    </a>
                                    <form action="" method="POST">
                                        <li class="list-inline-item mt-2">
                                            <button class="btn btn-danger btn-sm rounded-1" type="button"
                                                data-toggle="tooltip" data-placement="" title="Delete"><i
                                                    class="fa fa-trash"></i></button>
                                        </li>
                                    </form>
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
