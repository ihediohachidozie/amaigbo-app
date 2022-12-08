@php
    $officeid = App\Models\Nomination::where('member_id', $key)
        ->pluck('office_id')
        ->unique();

@endphp

@if ($office->id == $officeid[0])
    <tr>
        <td>{{ ucwords($members[$key]) }}</td>
        <td class="text-center">
            {{ ucwords($office->name) }}
        </td>
        <td class="text-center">{{ $value }}</td>
    </tr>
@endif
{{-- {{ucwords($office[$officeid[0]])}} --}}
