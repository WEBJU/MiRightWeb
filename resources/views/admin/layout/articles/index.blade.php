@include('admin.inc.header')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List of Articles</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    @if (Session::has('success'))
      <div class="alert alert-success">
          <p>Article deleted Successfully!!</p>
      </div>
    @endif
    <table id="example2" class="table table-bordered table-hover mt-3">
      <thead>
      <tr>
        <th>Article</th>
        <th>Title</th>
        {{-- <th>Category</th>
        <th>Cover</th> --}}
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        @if (count($articles) > 0)
          @foreach ($articles as $article)
            <tr>
              <td>Article {{$article->article_number}}</td>
              <td>{{$article->article_title}}</td>
              {{-- <td>{{$article->article_category}}</td>
              <td><img src="/img/{{$article->article_cover}}" alt="Article" width="50px" height="50px"></td> --}}
              <td colspan="2">
                <form action="{{route('articles.destroy',$article->id)}}" method="post">
                  <a href="{{route('provision.add',$article->id)}}" class="btn btn-default">Provisions</a>
                  <a href="{{route('interpretations.add',$article->id)}}" class="btn btn-info">Interpretations</a>
                  <a href="{{route('remedies.add',$article->id)}}" class="btn btn-success">Remedie</a>
                  <a href="{{route('scenario.add',$article->id)}}" class="btn btn-warning">Scenario</a>
                  <a href="{{route('content.add',$article->id)}}" class="btn btn-secondary">Content</a>
                  <a href="{{route('articles.edit',$article->id)}}" class="btn btn-primary">Edit</a>
                  @csrf
                  {{-- @method('DELETE') --}}
                  <button type="submit" name="button" class="btn btn-danger">Delete</button>

                </form>

              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td>No articles in the database!!</td>
          </tr>
        @endif


      </tbody>
      <tfoot>
      <tr>
        <th>Article</th>
        <th>Title</th>
        {{-- <th>Category</th>
        <th>Cover</th> --}}
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@include('admin.inc.footer')
