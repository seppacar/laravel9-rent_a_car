@extends ('layouts.imagebase')

@section('title', 'Add Image')

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
</div>

