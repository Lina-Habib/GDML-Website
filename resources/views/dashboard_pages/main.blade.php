@extends('layouts.dashboard')


@section('content_body')

<!-- Header -->
<div class="header d-flex justify-content-between align-items-center">
    <h2>مرحبًا، {{ Auth::user()->name }}</h2>
    <div class="d-flex">
        <div class="toggle-dark-mode" onclick="toggleDarkMode()">
            <i class="fas fa-moon"></i>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">عدد البطاقات</h5>
            </div>
            <div class="card-body text-center">
              	<h3>2,456</h3>
                <p class="text-muted">+5% عن الشهر الماضي</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">عدد الرسائل الواردة</h5>
            </div>
	        <div class="card-body text-center">
	            <h3>$18,320</h3>
	            <p class="text-muted">+10% عن الشهر الماضي</p>
	        </div>
    	</div>
    </div>
</div>

@stop