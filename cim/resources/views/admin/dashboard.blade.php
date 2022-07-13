@extends('layouts/admindash')
@section('content')
@include('layouts/header')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1">
                <h4 class=" ">Dashboard</h4>
            </div>
            <div class="col-sm-9">
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-primary btn-sm"><i class=" fa-solid  fa-rotate"></i>| Refresh
                    Page
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
            </div>
            <div class="col-sm-5">
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-primary btn-sm"><i class=" fa-solid  fa-rotate"></i>| Download
                    Contract report
                </button>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-5">
            </div>
            <div class="col-sm-5">
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-primary btn-sm"><i class=" fa-solid  fa-rotate"></i>| Download
                    APG report
                </button>
            </div>
        </div>
        <h4> Quick Links</h4>
        <a href=""> <i class="fa-solid fa fa-link"></i> All contracts</a>
        <div>
            <a href=""> <i class="fa-solid fa fa-link"></i> Office Settings</a>
        </div>
        <a href=""> <i class="fa-solid fa fa-link"></i>Create New Contract</a>
        <!-- Content -->
        <div class="mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6" style="background-color:#eaffea">
                        <strong class="text-green">Opened Project</strong>
                        <p class="text-green"> 11 contracts</p>
                    </div>
                    <div class="col-lg-6 " style="background-color:#E5C1CD">
                        <strong class="text-red">Closed Project</strong>
                        <span>
                            <p class="text-red"> 11 contracts</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <table class="table table-bordered border-dark mt-4 ">
                        <thead>
                            <tr class="">
                                <!-- Contract Reports -->
                                <th scope="col-lg-6" class="border-dark">Contract Reports
                                    <div class="container-fluid" class="border-dark">
                                        <div class="row  ">
                                            <div class="col-lg-5" style="background-color:#eaffea">
                                                <strong class="text-green">On Time</strong> <span>
                                                    <p class="text-green"> 4 contracts</p>
                                                </span>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-5 " style="background-color:#FFF59E">
                                                <strong class="text-warning">About To Expire</strong>
                                                <span>
                                                    <p class="text-warning"> 11 contracts</p>
                                                </span>
                                            </div>
                                            <div class="col-lg-6 mt-4" style="background-color:#E5C1CD">
                                                <strong class="text-danger">Expired </strong>
                                                <span>
                                                    <p class="text-danger"> 11 contracts</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <!-- End Contact Reports -->
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="col-lg-6">
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <!-- PBG Report -->
                                <th scope="col-lg-6" class="border-dark">PBG Reports
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-5" style="background-color:#eaffea">
                                                <strong class="text-green">On Time</strong> <span>
                                                    <p class="text-green"> 4 contracts</p>
                                                </span>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-5 " style="background-color:#FFF59E">
                                                <strong class="text-warning">About To Expire</strong>
                                                <span>
                                                    <p class="text-warning"> 11 contracts</p>
                                                </span>
                                            </div>
                                            <div class="col-lg-6 mt-4" style="background-color:#E5C1CD">
                                                <strong class="text-danger">Expired </strong>
                                                <span>
                                                    <p class="text-danger"> 11 contracts</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <!-- End PBG Report -->
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- Second Grid -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr class="">
                                        <!-- APG Reports -->
                                        <th scope="col-lg-6" class="border-dark">APG Reports
                                            <div class="container-fluid">
                                                <div class="row  ">
                                                    <div class="col-lg-5" style="background-color:#eaffea">
                                                        <strong class="text-green">On Time</strong> <span>
                                                            <p class="text-green"> 4 contracts</p>
                                                        </span>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-5 " style="background-color:#FFF59E">
                                                        <strong class="text-warning">About To Expire</strong>
                                                        <span>
                                                            <p class="text-warning"> 11 contracts</p>
                                                        </span>
                                                    </div>
                                                    <div class="col-lg-6 mt-4" style="background-color:#E5C1CD">
                                                        <strong class="text-danger">Expired </strong>
                                                        <span>
                                                            <p class="text-danger"> 11 contracts</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- End APG Reports -->
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <!-- Insurance Report -->
                                        <th scope="col-lg-6" class="border-dark">PBG Reports
                                            <div class="container-fluid">
                                                <div class="row  ">
                                                    <div class="col-lg-5" style="background-color:#eaffea">
                                                        <strong class="text-green">On Time</strong> <span>
                                                            <p class="text-green"> 4 contracts</p>
                                                        </span>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-5" style="background-color:#FFF59E">
                                                        <strong class="text-warning">About To Expire</strong>
                                                        <span>
                                                            <p class="text-warning"> 11 contracts</p>
                                                        </span>
                                                    </div>
                                                    <div class="col-lg-6 mt-4" style="background-color:#E5C1CD">
                                                        <strong class="text-danger">Expired </strong>
                                                        <span>
                                                            <p class="text-danger"> 11 contracts</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- End Insurance Report -->
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- Work Schedule Reports -->
                        <div class="col-lg-6">
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <!-- Work Schedule Report -->
                                        <th scope="col-lg-6" class="border-dark">Work Schedule Reports
                                            <div class="container-fluid">
                                                <div class="row  ">
                                                    <div class="col-lg-5" style="background-color:#eaffea">
                                                        <strong class="text-green">On Time</strong> <span>
                                                            <p class="text-green"> 4 contracts</p>
                                                        </span>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-5" style="background-color:#FFF59E">
                                                        <strong class="text-warning">About To Expire</strong>
                                                        <span>
                                                            <p class="text-warning"> 11 contracts</p>
                                                        </span>
                                                    </div>
                                                    <div class="col-lg-6 mt-4" style="background-color:#E5C1CD">
                                                        <strong class="text-danger">Expired </strong>
                                                        <span>
                                                            <p class="text-danger"> 11 contracts</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- Work Schedule Reports -->
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- End -->

                    </div>
                </div>

                </table>
            </div>
        </div>
        @endsection
