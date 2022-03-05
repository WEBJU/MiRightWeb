@include('admin.inc.header')

<form method="post" enctype="multipart/form-data" action="{{route('provision.store')}}">
  @csrf
    <div class="col-md-6">
      <div class="card-body">
        @if (Session::has('success'))
          <div class="alert alert-success">
              {{Session::get('success')}}
          </div>
        @endif
        <div class="form-group">
          <label>Article Category</label>
          <input type="text" name="article_category" class="form-control" value="{{'Article: '.$article->article_number}}" disabled>
        </div>
        <div class="form-group">
          <label>Provision</label>
          <textarea type="text" name="provision" class="form-control"  placeholder="Article provisions e.g. Every person has the right to life. "></textarea>
        </div>

        <div class="form-group">
          <label for="exampleFormControlFile1">Provision Conditions</label>
          <textarea type="file" class="form-control" name="conditions" placeholder="e.g "></textarea>
          <small class="text text-info">Note:Use commas to separate the conditions</small>
        </div>

        <input type="hidden" name="article_id" value="{{$article->id}}">
        <div class="form-group">
          <button type="submit" class="btn btn-danger float-right">Add Provision</button>
        </div>
      </div>
    </div>


  </div>
</form>
@include('admin.inc.footer')
