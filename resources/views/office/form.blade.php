<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Member Name"
        value="{{ old('name') ?? $office->name }}">
    <label for="floatingInput">Elective Position</label>
    @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>


@if (session('status'))
    <div class="alert alert-success mt-2 mb-2">
        {{ session('status') }}
    </div>
@endif
