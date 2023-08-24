@extends('layouts.main')

@section('container')
<div class="content">
    <h2>Get Ready For This!</h2>
    <h1>OVERVIEW {{ $overview }}</h1>   
    <div class="form">
        <p>{{ $desc }}</p>
        <div class="fee">
            <p><b>Registration fee:</b> RP80.000(Early Bird)/RP100.000(Reguler)</p>
        </div>

        <a href="/error"><button class="btnCompe">Guide Book</button></a>
        <a href="https://forms.gle/iGzdvmsKVkCnvGeSA"><button class="btnCompe"><b>Register</b></button></a>
    </div>
</div>
@endsection