<!doctype html>
<html lang="en">

@include('pages.partials.head')

<body>



    <div class="container py-3">
        @include('pages.partials.header')

        <main>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Accreditation & Voting</h1>
                <p class="fs-5 text-muted">To vote members for an electorial office, enter your Voter's ID and Voter's Eligibility Number (VEN) below to comfirm your eligibility.</p>
            </div>
            <div class="row row-cols-1 mb-3 text-center">
                <form action="{{ route('accreditate') }}" method="post" class="mb-4">
                    @csrf

                    <div class="row">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="regno" name="regno"
                                    placeholder="Enter Membership ID">
                                <label for="regno">Enter Voter's ID</label>
                            </div>

                            @error('regno')
                                <div class="alert alert-danger">{{ 'Voter\'s ID is required' }}</div>
                            @enderror
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="pin" name="pin"
                                    placeholder="Enter Voter's Eligibility Number">
                                <label for="regno">Enter Voter's Eligibility Number</label>
                            </div>

                            @error('pin')
                                <div class="alert alert-danger">{{ 'Voter\'s Eligibility Number is required' }}</div>
                            @enderror
                        </div>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Accreditate</button>
                    </div>
                </form>



            </div>


        </main>

        @include('pages.partials.footer')
    </div>



</body>

</html>
