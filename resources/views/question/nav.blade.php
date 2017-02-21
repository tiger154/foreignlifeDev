<div class="question-manage row">
    <ul class="nav nav-pills col-lg-6">
      <li class="active"><a href="/question">All</a></li>
      <li><a href="/question?tag=place">Place</a></li>
      <li><a href="/question?tag=study">Study</a></li>
      <li><a href="/question?tag=visa">Visa</a></li>
      <li><a href="/tags">More...</a></li>
    </ul>
    <div class="col-lg-6 question-manage-right">
        <a href="/question"><button class="btn btn-primary pull-right question-manage-right-btn"> List</button></a>
        @if(!empty($question)) <a href="/question/{{ $question->id }}/edit"><button class="btn btn-primary pull-right question-manage-right-btn"> Edit</button></a> @endif
        <a href="/question/create"><button class="btn btn-primary pull-right question-manage-right-btn"><i class="fa fa-pencil" aria-hidden="true"></i> Write</button></a>
    </div>
</div>