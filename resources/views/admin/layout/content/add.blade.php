@include('admin.inc.header')

<form method="post" enctype="multipart/form-data" action="{{route('content.store')}}">
  @csrf
    <div class="col-md-6">
      <div class="card-body">
        @if (Session::has('success'))
          <div class="alert alert-success">
              {{Session::get('success')}}
          </div>
        @endif
        <div class="form-group">
          <label>Article</label>
          <input type="text" name="article_number" class="form-control" value="Article {{$article->article_number}}" disabled>
        </div>

        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label>Content Type</label>
          <select class="form-control" name="type">
            <option>Animation</option>
            <option>Video</option>
            <option>Memes</option>
          </select>
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Animation showing article 1"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">File</label>
          <input type="file" class="form-control-file" name="file">
        </div>
        <input type="hidden" name="article_id" class="form-control" value="{{$article->id}}">

        <div class="form-group">
          <button type="submit" class="btn btn-danger float-right">Add Content</button>
        </div>
      </div>
    </div>


  </div>
</form>
@include('admin.inc.footer')
