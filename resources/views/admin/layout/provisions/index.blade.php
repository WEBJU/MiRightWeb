@include('admin.inc.header')
<div class="card">
  <div class="card-header">
      <h3 class="card-title">Article Provisions</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    @if (Session::has('success'))
      <div class="alert alert-success">
          <p>Provision deleted Successfully!!</p>
      </div>
    @endif
    <table id="example2" class="table table-striped table-hover mt-3">
      <thead>
      <tr>
        <th>Article</th>
        <th>Provision</th>
        <th>Conditions</th>
        <th colspan="2">Actions</th>
      </tr>
      </thead>
      <tbody>
        @if (count($provisions) > 0)
          @foreach ($provisions as $provision)
            <tr>
              <td>Article {{$provision->article->article_number}}</td>
              <td>{{$provision->provision}}</td>
              <td>{{$provision->conditions}}</td>
              <td colspan="2">
                <form action="{{route('provision.destroy',$provision->id)}}" method="post">
                  <a href="{{route('provision.edit',$provision->id)}}" name="button" class="btn btn-primary">Edit</a>
                  @csrf
                  {{-- @method('DELETE') --}}
                  <button type="submit" name="button" class="btn btn-danger">Delete</button>

                </form>

              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td colspan="5">No provisions in the database!!</td>
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
