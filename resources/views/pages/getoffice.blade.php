<?php
    $officeid = App\Models\Nomination::where('member_id', $key)->pluck('office_id')->unique();

?>
{{ucwords($office[$officeid[0]])}}
