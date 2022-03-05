@include('admin.inc.header')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Content</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    @if (Session::has('success'))
      <div class="alert alert-success">
          {{Session::get('success')}}
      </div>
    @endif
    <table id="example2" class="table table-bordered table-hover mt-3">
      <thead>
      <tr>
        <th>Article</th>
        <th>Content Type</th>
        <th>File</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        @if (count($contents) > 0)
          @foreach ($contents as $content)
            <tr>
              <td>{{$content->article->article_number}}</td>
              <td>{{$content->type}}</td>

              <td>
                @if ($content->type == "Animation" || $content->type == "Videos")
                  <video src="/content/{{$content->file}}" alt="Content" width="50px" height="50px" controls>
                  </video>
                @else
                  <image src="/content/{{$content->file}}" alt="Content" width="50px" height="50px">
                @endif
              </td>
              <td colspan="2">
                <form action="{{route('content.destroy',$content->id)}}" method="post">
                  <a href="{{route('content.edit',$content->id)}}" name="button" class="btn btn-primary">Edit</a>
                  @csrf
                  {{-- @method('DELETE') --}}
                  <button type="submit" name="button" class="btn btn-danger">Delete</button>

                </form>

              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td>No content in the database!!</td>
          </tr>
        @endif


      </tbody>
      <tfoot>
      <tr>
        <th>Article</th>
        <th>Content Type</th>
        <th>File</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@include('admin.inc.footer')
