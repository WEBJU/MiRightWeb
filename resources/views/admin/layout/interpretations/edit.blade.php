@include('admin.inc.header')

<form method="post" enctype="multipart/form-data" action="{{route('article.update',$article->id)}}">
  @csrf
  {{-- @method('PUT') --}}
    <div class="col-md-6">
      @if (Session::has('success'))
        <div class="alert alert-success">
            <p>Article edited Successfully</p>
        </div>
      @endif
      <div class="card-body">
        <div class="form-group">
          <label>Article</label>
          <input type="text" name="article_number" class="form-control" id="exampleInputEmail1" placeholder="Article e.g Article 1" value="{{$article->article_number}}">
        </div>
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="article_title" class="form-control" id="exampleInputPassword1" placeholder="Article title e.g. Sovereignity of the people" value="{{$article->article_title}}">
        </div>
        <div class="form-group">
          <label>Category</label>
          <select class="form-control" name="article_category" value="{{$article->article_category}}">
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
          <img src="/img/{{$article->article_cover}}" alt="" height="50px" width="50px" class="img-rounded mt-2">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-danger float-right">Edit Article</button>
        </div>
      </div>
    </div>


  </div>
</form>
@include('admin.inc.footer')
