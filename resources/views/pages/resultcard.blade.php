@php
    $memberid = App\Models\Nomination::where('member_id', $key)->get();

@endphp

@if ($office->id == $memberid[0]->office_id)
<div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/' . $memberid[0]->image) }}"
            class="card-img-top" alt="...">
        <div class="card-body text-center">
            <p class="card-text text-capitalize">{{ ucwords($members[$key]) }}</p>
            <p>Vote(s): <span
                    class="text-primary">{{ $value }}</span></p>
        </div>
    </div>
</div>
@endif

