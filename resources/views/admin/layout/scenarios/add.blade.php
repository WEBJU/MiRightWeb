@include('admin.inc.header')

<form method="post" enctype="multipart/form-data" action="{{route('scenario.store')}}">
  @csrf
    <div class="col-md-6">
      <div class="card-body">
        @if (Session::has('success'))
          <div class="alert alert-success">
              <p>Scenario added Successfully!!</p>
          </div>
        @endif
        <div class="form-group">
          <label>Article</label>
          <input type="text" name="article_number" class="form-control" disabled value="{{'Article '.$article->article_number}}">
        </div>
        <div class="form-group">
          <label>Scenario</label>
          <textarea type="text" name="scenario" class="form-control" placeholder="Scenario here.." rows="5"></textarea>
          <small class="text text-info">Use commas to separate the scenarios</small>
        </div>
        <input type="hidden" name="article_id" value="{{$article->id}}">
        <div class="form-group">
          <button type="submit" class="btn btn-danger float-right">Add Scenario</button>
        </div>
      </div>
    </div>


  </div>
</form>
@include('admin.inc.footer')
