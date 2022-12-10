<div class="row">
    <div class="col-md">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Member's Name</label>
            <select class="form-select" aria-label="Default select example" required name="member_id">
                <option value="">Select...</option>
                @foreach ($members as $key => $value)
                    <option value="{{ $key }}" {{$candidate->member_id == $key ? 'selected' : ''}}>{{ ucwords($value) }}</option>
                @endforeach

            </select>
        </div>
    </div>

    <div class="col-md">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label text-bold">Elective
                Positions</label>
            <select class="form-select" aria-label="Default select example" required name="office_id">
                <option value="">Select...</option>
                @foreach ($offices as $key => $value)
                    <option value="{{ $key }}" {{$candidate->office_id == $key ? 'selected' : ''}}>{{ ucwords($value) }}</option>
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
            <input class="form-control" type="file" name="nominationform" id="nominationform" required>
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
