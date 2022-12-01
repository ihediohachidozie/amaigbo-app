<!doctype html>
<html lang="en">

@include('pages.partials.head')

<body>



    <div class="container py-3">
        @include('pages.partials.header')

        <main>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Membership Confirmation</h1>
                <p class="fs-5 text-muted">Kindly confirm your membership ID before uploading your nomination form and
                    credentials.</p>
            </div>
            <div class="row row-cols-1 mb-3 text-center">
                <form action="{{ route('check.member') }}" method="post" class="mb-4">
                    @csrf

                    <div class="mb-3">

                        <input type="text" class="form-control" id="regno" name="regno"
                            placeholder="Enter Membership ID">
                    </div>
                    @error('regno')
                        <div class="alert alert-danger">{{ 'Membership ID is required' }}</div>
                    @enderror
                    @if (session('status'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>



            </div>


        </main>

        @include('pages.partials.footer')
    </div>



</body>

</html>
