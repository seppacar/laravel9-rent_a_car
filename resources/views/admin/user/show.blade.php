@extends ('layouts.imagebase')

@section('title', 'Add Image')
    @include('message')
    <h5 class="m-4 font-weight-bold text-primary">Message Details</h5>
    <table class="table table-responsive table-striped">
    <tr>
      <th style="width: 125px">#</th>
      <td>{{$data->id}}</td>
    </tr>
    <tr>
      <th>Name</th>
      <td>{{$data->name}}</td>
    </tr>
    <tr>
      <th>email</th>
      <td>{{$data->email}}</td>
    </tr>
    <tr>
      <th>Roles</th>
      <td>
      @foreach($data->roles as $role)
        {{$role->name}}
        <a href="{{route('admin.user.destroyrole', ['uid'=>$data->id, 'rid'=>$role->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Do you want to delete this role?')">Delete</a>
      @endforeach
    </td>
    <tr>
      <th>Created At</th>
      <td>{{$data->created_at}}</td>
    </tr>
    <tr>
      <th>Updated At</th>
      <td>{{$data->updated_at}}</td>
    </tr>
    <tr>
      <th>Add Role to User</th>
      <td>    <div class="mb-3">
        <form role="form" action="{{route('admin.user.addrole', ['id'=>$data->id])}}" method="post"> 
          @csrf
          <div class="mb-3">
            <label for="role_id" class="form-label">
            <select class="form-control" name="role_id" id="role_id">
              @foreach($roles as $role)
              <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
            </select>
        </div>
    <button type="submit" class="btn btn-dark btn-icon-split">
                                    <span class="icon text-gray-600">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">Add</span>
                                </a>
                              </form>
                            </div></td>
    </tr>
    </table>

</div>

