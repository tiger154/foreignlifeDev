@extends('layouts.modal.base')
<style>
    .modal-region-container {

    }
</style>
@section('content')
    <div class="row">
        <div class="modal-region-container">
            <label>Region</label>
            <div class="modal-region-list">
                <div class="modal-region-item"> England </div>
                <div class="modal-region-item"> Korea </div>
            </div>
        </div>
        <div class="modal-region-language">
            <label>Language</label>
            <div class="modal-region-list">
                <div class="modal-region-item"> English </div>
                <div class="modal-region-item"> Korean </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
@endsection