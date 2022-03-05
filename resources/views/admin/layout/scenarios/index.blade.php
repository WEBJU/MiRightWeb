@include('admin.inc.header')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List of Scenario</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    @if (Session::has('success'))
      <div class="alert alert-success">
          <p>Scenario deleted Successfully!!</p>
      </div>
    @endif
    <table id="example2" class="table table-bordered table-hover mt-3">
      <thead>
      <tr>
        <th>Article</th>
        <th>Scenario</th>
        {{-- <th>Category</th>
        <th>Cover</th> --}}
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        @if (count($scenarios) > 0)
          @foreach ($scenarios as $scenario)
            <tr>
              <td>{{$scenario->article->article_number}}</td>
              <td>{{$scenario->scenario}}</td>
              {{-- <td>{{$article->article_category}}</td>
              <td><img src="/img/{{$article->article_cover}}" alt="Article" width="50px" height="50px"></td> --}}
              <td colspan="2">
                <form action="{{route('scenario.destroy',$scenario->id)}}" method="post">
                  <a href="{{route('scenario.edit',$scenario->id)}}" name="button" class="btn btn-primary">Edit</a>
                  @csrf
                  {{-- @method('DELETE') --}}
                  <button type="submit" name="button" class="btn btn-danger">Delete</button>

                </form>

              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td>No Scenarios in the database!!</td>
          </tr>
        @endif


      </tbody>
      <tfoot>
      <tr>
        <th>Article</th>
        <th>Scenario</th>
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
