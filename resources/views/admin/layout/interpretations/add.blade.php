@include('admin.inc.header')

<form method="post" enctype="multipart/form-data" action="{{route('interpretations.store')}}">
  @csrf
    <div class="col-md-6">
      <div class="card-body">
        @if (Session::has('success'))
          <div class="alert alert-success">
              <p>Interpretation added Successfully!!</p>
          </div>
        @endif
        <div class="form-group">
          <label>Article</label>
          <input type="text" name="article_number" class="form-control" disabled value="{{'Article '.$article->article_number}}">
        </div>
        <div class="form-group">
          <label>Interpretation</label>
          <textarea type="text" name="interpretation" class="form-control" placeholder="Interpretation here.." rows="5"></textarea>
          <small class="text text-info">Use commas to separate the interpretations</small>
        </div>
        <input type="hidden" name="article_id" value="{{$article->id}}">
        <div class="form-group">
          <button type="submit" class="btn btn-danger float-right">Add Interpretation</button>
        </div>
      </div>
    </div>


  </div>
</form>
@include('admin.inc.footer')
