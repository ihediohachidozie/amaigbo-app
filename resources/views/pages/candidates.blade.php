@php
    $candidates = App\Models\Nomination::where('office_id', $office)->get();
@endphp
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    @foreach ($candidates as $candidate)

    <div class="col-md-4">
        <div class="card mb-2">
            <img src="{{ asset('storage/' . $candidate->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio"
                        name="{{ str_replace(' ', '', $candidate->office_id) }}"
                        id="{{ str_replace(' ', '', $candidate->office_id) }}"
                        value="{{ $candidate->member->id }}">
                    <label class="form-check-label" for="{{ $candidate->office->name }}">
                        {{ $candidate->member->name }}
                    </label>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
