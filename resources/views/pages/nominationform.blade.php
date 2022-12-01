<!doctype html>
<html lang="en">

@include('pages.partials.head')

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        @include('pages.partials.header')

        <main>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Nomination Form</h1>
                <p class="fs-5 text-muted">Kindly fill the form below with your details and click submit button.</p>
                <span class="text-sm text-success">
                    NB: Repeat the process if you want to replace any document

                </span>
            </div>

            <div class="row row-cols-1 mb-3">
                <form action="{{ route('nomination.store') }}" method="post" class="mb-4"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Member's Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Membership ID" value="{{ $member->name }}" readonly>
                            </div>
                        </div>
                        <input type="hidden" name="member_id" value="{{ $member->id }}">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-bold">Elective
                                    Positions</label>
                                <select class="form-select" aria-label="Default select example" required
                                    name="office_id">
                                    <option value="">Select...</option>
                                    @foreach ($offices as $key => $value)
                                        <option value="{{ $key }}">{{ ucwords($value) }}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('office_id')
                                <div class="alert alert-danger">{{ 'Elective Position is required' }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nomination Form</label>
                                <input class="form-control" type="file" name="nominationform" id="nominationform"
                                    required>
                            </div>
                            @error('nominationform')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Passport Photograph</label>
                                <input class="form-control" type="file" name="image" id="image" required>
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">CV</label>
                                <input class="form-control" type="file" name="resume" id="resume" required>
                            </div>
                            @error('resume')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>

                </form>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

            </div>


        </main>
        <h2 class="display-6 text-center mb-4">Uploaded files</h2>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>

                        <th style="width: 22%;">Elective Position</th>
                        <th style="width: 22%;" class="text-center">Passport</th>
                        <th style="width: 22%;" class="text-center">Nomination Form</th>
                        <th style="width: 22%;" class="text-center">CV</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($nomination->count() > 0)


                        @foreach ($nomination as $data)
                            <tr>

                                <td>{{ ucwords($data->office->name) }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/' . $data->image) }}" class="img-fluid img-thumbnail"
                                        alt="" srcset="">

                                </td>
                                <td class="text-center">
                                    <a href="{{ asset('storage/' . $data->nominationform) }}" target="_blank"
                                        rel="noopener noreferrer">
                                        View
                                    </a>

                                </td>
                                <td class="text-center">
                                    <a href="{{ asset('storage/' . $data->resume) }}" target="_blank"
                                        rel="noopener noreferrer">
                                        View
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    @endif


                </tbody>
            </table>
        </div>

        @include('pages.partials.footer')
    </div>



</body>

</html>
