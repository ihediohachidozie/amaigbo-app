<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Member Name"
        value="{{ old('name') ?? $member->name }}">
    <label for="floatingInput">Member Name</label>
    @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label mx-3">Financial Status</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="fin_status" id="inlineRadio1" value=1
        {{$member->fin_status == 1 ? 'checked' : ''}}>
        <label class="form-check-label" for="inlineRadio1">Cleared</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="fin_status" id="inlineRadio2" value=0
            {{$member->fin_status == 0 ? 'checked' : ''}}>
        <label class="form-check-label" for="inlineRadio2">Not Cleared</label>
    </div>
    @error('fin_status')
        <div class="alert alert-danger mt-2">{{ 'Financial Status field must be checked' }}</div>
    @enderror

</div>

@if (session('status'))
    <div class="alert alert-success mt-2 mb-2">
        {{ session('status') }}
    </div>
@endif
