@extends('layouts.theme')
@section('menu-active-emr','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')


<div class="page-content header-clear-small">

    <div class="card card-style">
        <div class="d-flex content">
            <div class="flex-grow-1">
                <div>
                    <h1 class="font-700 mb-1">{{ $moduletitle }}</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="footer card card-style">
        <a href="#" class="footer-title"><span class="color-highlight">หมายเหตุ</span></a>
        <p class="footer-text">
            <span>แสดงประวัติตรวจสุขภาพประจำปีย้อนหลังทุกครั้ง
            </span>
        <div class="clear"></div>
    </div>
</div>
<!-- End of Page Content-->

@endsection

@section('footer_script')

@endsection