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
      <td>{{$data->id}}</td>
    </tr>
    <tr>
      <th>Email</th>
      <td>{{$data->email}}</td>
    </tr>
    <tr>
      <th>Phone</th>
      <td>{{$data->phone}}</td>
    </tr>
    <tr>
      <th>IP Address</th>
      <td>{{$data->ip}}</td>
    </tr>
    <tr>
      <th>Subject</th>
      <td>{{$data->subject}}</td>
    </tr>
    <tr>
      <th>Message</th>
      <td>{{$data->message}}</td>
    </tr>
    <tr>
      <th>Status</th>
      <td>{{$data->status}}</td>
    </tr>
    <tr>
      <th>Created at</th>
      <td>{{$data->created_at}}</td>
    </tr>
    </table>
    <div class="mb-3">
      <form role="form" action="{{route('admin.message.update', ['id'=>$data->id])}}" method="post"> 
        @csrf
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-control" name="status" id="status">
              <option @if ($data->status == "New") selected @endif>New</option>
              <option @if ($data->status == "Read") selected @endif >Read</option>>
          </select>
      </div>
  <button type="submit" class="btn btn-dark btn-icon-split">
                                  <span class="icon text-gray-600">
                                      <i class="fas fa-arrow-right"></i>
                                  </span>
                                  <span class="text">Update</span>
                              </a>
                            </form>
                          </div>
</div>

