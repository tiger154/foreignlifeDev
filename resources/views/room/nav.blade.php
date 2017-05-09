<div class="question-manage row">
    <div class="col-lg-12 room-manage-right">
        <a href="/room"><button class="btn btn-primary pull-right"> List</button></a>
        @if(!empty($room)) <a href="/room/{{ $room->id }}/edit"><button class="btn btn-primary pull-right"> Edit</button></a> @endif
        <a href="/room/create"><button class="btn btn-primary pull-right"><i class="fa fa-pencil" aria-hidden="true"></i> Write</button></a>
    </div>
</div>