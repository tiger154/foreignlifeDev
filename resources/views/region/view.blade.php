@extends('layouts.modal.base')
<style>
    .modal-region-language-container {

    }

    .modal-language-container {
        margin-top: 1em;
    }
    .modal-region-title, .modal-language-title {
        font-weight: bold;
    }
    .modal-region-item, .modal-language-item {
        text-align: left;
        max-width: 9em;
        margin-right: 0.5em;
        margin-top: 0.5em;
    }
    .flag-icon {
        margin-right: 0.3em;
    }

</style>
@section('content')
    <div class="row modal-region-language-container">
        <div class="modal-region-container col-xs-12">
            <h5 class="modal-region-title ">Region</h5>
            <div class="modal-region-list">
                <a href="{{ Regions::buildSubDomainUrl('ie','/') }}">
                    <div class="btn btn-default modal-region-item col-xs-6">
                        <span class="flag-icon flag-icon-ie"></span>Ireland
                    </div>
                </a>
                <a href="{{ Regions::buildSubDomainUrl('gb','/') }}">
                    <div class="btn btn-default modal-region-item col-xs-6">
                        <span class="flag-icon flag-icon-gb"></span>England
                    </div>
                </a>
                <a href="{{ Regions::buildSubDomainUrl('kr','/') }}">
                    <div class="btn btn-default modal-region-item col-xs-6">
                        <span class="flag-icon flag-icon-kr"></span> Korea
                    </div>
                </a>
            </div>
        </div>
        <div class="modal-language-container col-xs-12">
            <h5 class="modal-language-title">Language</h5>
            <div class="modal-region-list">
                <div class="btn btn-default modal-language-item col-xs-6">
                    <a href="{{ LaravelLocalization::getLocalizedURLShowDefaultLocale('en','/') }}"><span class="flag-icon flag-icon-gb"></span> English</a>
                </div>
                <div class="btn btn-default modal-language-item col-xs-6">
                    <a href="{{ LaravelLocalization::getLocalizedURLShowDefaultLocale('ko','/') }}"><span class="flag-icon flag-icon-kr"></span> Korean</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
@endsection