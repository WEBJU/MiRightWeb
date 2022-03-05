@include('admin.inc.header')

<form method="post" enctype="multipart/form-data" action="{{route('article.store')}}">
  @csrf
    <div class="col-md-6">
      <div class="card-body">
        @if (Session::has('success'))
          <div class="alert alert-success">
              <p>Article added Successfully!!</p>
          </div>
        @endif
        <div class="form-group">
          <label>Article</label>
          <input type="text" name="article_number" class="form-control" id="exampleInputEmail1" placeholder="Article e.g  1">
        </div>
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="article_title" class="form-control" id="exampleInputPassword1" placeholder="Article title e.g. Sovereignity of the people">
        </div>
        <div class="form-group">
          <label>Category</label>
          <select class="form-control" name="article_category">
            <option>Constitutional Law</option>
            <option>Criminal Law</option>
            <option>Public Law</option>
            <option>Private Law</option>
            <option>Civil Law</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Cover Image</label>
          <input type="file" class="form-control-file" name="article_cover">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-danger float-right">Add Article</button>
        </div>
      </div>
    </div>


  </div>
</form>
@include('admin.inc.footer')
