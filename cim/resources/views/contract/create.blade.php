@extends('layouts.admindash')
@section('content')
<div class="content-wrapper mt-4">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="">
                                <!-- Contract Information -->
                                <h2>Basic Information</h2>
                                <form action="" method="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput">Contract Number <span class="text-red">
                                                            *</span> </label>
                                                    <small class=" form-text text-muted">Contract Number for the
                                                        specific
                                                        contract</small>
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput">Contract Amount <span
                                                            class="text-red">*</span> </label>
                                                    <small class=" form-text text-muted">The Total Amount of the
                                                        contract </small>
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput">Project Name <span
                                                            class="text-red">*</span></label>
                                                    <small class=" form-text text-muted">Project Name for the
                                                        contract</small>
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput"> Project Life <span class="text-red">*
                                                        </span> </label>
                                                    <small class=" form-text text-muted"> Project Life </small>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">

                                            <label for="exampleInput"> Project Location <span class="text-red">*
                                                </span> </label>
                                            <small class=" form-text text-muted">Project location for
                                                the contract
                                            </small>
                                            <input type="number" class="form-control">

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleInput"> Contract Completion Date <span class="text-red">*
                                                </span> </label>
                                            <small class=" form-text text-muted">The date the contract is
                                                intended to be
                                                completed
                                            </small>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                </form>
                                <!-- Contract Information -->
                                <h4>Contract Information</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                <form action="" method="">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInput">Contract Name <span
                                                                            class="text-red">
                                                                            *</span> </label>
                                                                    <small class=" form-text text-muted">The name of the
                                                                        Contractor</small>
                                                                    <input type="text" class="form-control mt-3">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInput">Contract Email <span
                                                                            class="text-red">*</span> </label>
                                                                    <small class=" form-text text-muted">The address of
                                                                        the contractor. Multiple emails
                                                                        must be separated by pressing Enter </small>
                                                                    <input type="text" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInput">Contractor Phone Number
                                                                        <span class="text-red">*</span></label>
                                                                    <small class=" form-text text-muted"> The Phone
                                                                        Number of the
                                                                        Contractor Multiple</small>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInput">Contractor Address
                                                                        <span class="text-red">*</span></label>
                                                                    <small class=" form-text text-muted"> The email
                                                                        Address for the contractor</small>
                                                                    <input type="text" class="form-control mt-3">
                                                                </div>
                                                            </div>
                                                </form>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                                <!-- End -->
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- PBG information -->
            <div class="col-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="">
                                <h2>PBG Information</h2>
                                <form action="" method="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput">PBG Number </label>
                                                    <small class=" form-text text-muted">The PBG number of the
                                                        contract</small>
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput">PBG Amount
                                                    </label>
                                                    <small class=" form-text text-muted">The Total Amount of the
                                                        PBG </small>
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">

                                            <label for="exampleInput">PBG Description </label>
                                            <small class=" form-text text-muted">The description of the
                                                PBG</small>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea>

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput"> PBG Bank name </label>
                                                    <small class=" form-text text-muted"> PBG issuing bank name
                                                        and
                                                        branch name </small>
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput"> PBG Bank Email </label>
                                                    <small class=" form-text text-muted"> PBG issuing bank name
                                                        email </small>
                                                    <input type="email" class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput"> PBG Issued Date </label>
                                                    <small class=" form-text text-muted"> The date the PBG was issued
                                                    </small>
                                                    <input type="text" class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInput"> PBG Completion Date </label>
                                                    <small class=" form-text text-muted"> The date the PBG is expected
                                                        to be completed </small>
                                                    <input type="email" class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- End -->
        </div>
    </div>
    <!-- Insurance and Work Schedule Information -->
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        <div class="col-lg-12">

                            <h4>
                                Insurance and Work Schedule Information
                            </h4>
                            <h6>
                                Equipment and Work Insurance Information
                            </h6>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="">
                                                        <!-- Insurance Information -->
                                                        <form action="" method="">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Insurance Company
                                                                                Name
                                                                            </label>
                                                                            <small
                                                                                class=" form-text text-muted">insurance
                                                                                issuing company name</small>
                                                                            <input type="text" class="form-control">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Insurance Premium
                                                                            </label>
                                                                            <small class=" form-text text-muted">contact
                                                                                insurance Premium</small>
                                                                            <input type="text" class="form-control">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Insurance
                                                                                Number</label>
                                                                            <small
                                                                                class=" form-text text-muted">Contract
                                                                                Insurance Number</small>
                                                                            <input type="text" class="form-control">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">Insurance Company
                                                                            Email
                                                                            </label> <small
                                                                                class=" form-text text-muted">
                                                                                Contract insurance companv Email</small>
                                                                            <input type="number"
                                                                                class="form-control mt-2">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">Insurance Description

                                                                            </label> <small
                                                                                class=" form-text text-muted">
                                                                                Contract Insurance Description</small>
                                                                            <textarea class="form-control"
                                                                                id="exampleFormControlTextarea1"
                                                                                rows="3"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInput">Insurance
                                                                                        Issued Date</label>
                                                                                    <small
                                                                                        class=" form-text text-muted">Contract
                                                                                        Insurance Issued Date</small>
                                                                                    <input type="text"
                                                                                        class="form-control">

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">Insurance
                                                                                    Completion Date
                                                                                    </label> <small
                                                                                        class=" form-text text-muted">
                                                                                        Contract Insurance Completion
                                                                                        Date</small>
                                                                                    <input type="number"
                                                                                        class="form-control mt-2">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        </form>

                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>

                                    </div>
                                    <!-- Manpower Insurance Information -->
                                    <div class="col-6">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="">
                                                        <!-- Insurance Information -->
                                                        <form action="" method="">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Insurance Company
                                                                                Name
                                                                            </label>
                                                                            <small
                                                                                class=" form-text text-muted">insurance
                                                                                issuing company name</small>
                                                                            <input type="text" class="form-control">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Insurance Premium
                                                                            </label>
                                                                            <small class=" form-text text-muted">contact
                                                                                insurance Premium</small>
                                                                            <input type="text" class="form-control">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInput">Insurance
                                                                                Number</label>
                                                                            <small
                                                                                class=" form-text text-muted">Contract
                                                                                Insurance Number</small>
                                                                            <input type="text" class="form-control">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">Insurance Company
                                                                            Email
                                                                            </label> <small
                                                                                class=" form-text text-muted">
                                                                                Contract insurance companv Email</small>
                                                                            <input type="number"
                                                                                class="form-control mt-2">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">Insurance Description

                                                                            </label> <small
                                                                                class=" form-text text-muted">
                                                                                Contract Insurance Description</small>
                                                                            <textarea class="form-control"
                                                                                id="exampleFormControlTextarea1"
                                                                                rows="3"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInput">Insurance
                                                                                        Issued Date</label>
                                                                                    <small
                                                                                        class=" form-text text-muted">Contract
                                                                                        Insurance Issued Date</small>
                                                                                    <input type="text"
                                                                                        class="form-control">

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">Insurance
                                                                                    Completion Date
                                                                                    </label> <small
                                                                                        class=" form-text text-muted">
                                                                                        Contract Insurance Completion
                                                                                        Date</small>
                                                                                    <input type="number"
                                                                                        class="form-control mt-2">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        </form>

                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>

                                    </div>
                                    <!-- Insurance  End -->
                                </div>
                            </div>
                        </div>
    </div>
    <!-- Work Schedule information -->

    <!-- End Work Schedule information -->

    </th>
    </tr>
    </thead>
    </table>

</div>
</div>
@endsection
