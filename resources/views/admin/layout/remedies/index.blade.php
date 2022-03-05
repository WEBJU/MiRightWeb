@include('admin.inc.header')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List of Articles</h3>
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
        <th>Remedy</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        @if (count($remedies) > 0)
          @foreach ($remedies as $remedy)
            <tr>
              <td>Article {{$remedy->article->article_number}}</td>
              <td>{{$remedy->remedy}}</td>
              <td colspan="2">
                <form action="{{route('remedies.destroy',$remedy->id)}}" method="post">
                  <a href="{{route('remedies.edit',$remedy->id)}}" name="button" class="btn btn-primary">Edit</a>
                  @csrf
                  {{-- @method('DELETE') --}}
                  <button type="submit" name="button" class="btn btn-danger">Delete</button>

                </form>

              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td>No remedies in the database!!</td>
          </tr>
        @endif


      </tbody>
      <tfoot>
      <tr>
        <th>Article</th>
        <th>Title</th>
        <th>Category</th>
        <th>Cover</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@include('admin.inc.footer')
