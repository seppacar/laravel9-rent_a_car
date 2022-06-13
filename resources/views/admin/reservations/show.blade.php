@extends ('layouts.imagebase')

@section('title', 'Reservation Details')
    @include('message')
    <h5 class="m-4 font-weight-bold text-primary">Reservation Order Details</h5>
    <table class="table table-responsive table-striped">
    <tr>
      <th style="width: 125px">#</th>
      <td>{{$data->id}}</td>
    </tr>
    <tr>
      <th>User ID</th>
      <td>{{$data->user->id}}</td>
    </tr>
    <tr>
      <th>User Name</th>
      <td>{{$data->user->name}}</td>
    </tr>
    <tr>
      <th>Reservation Date</th>
      <td>{{$data->rezdate}} {{$data->reztime}}</td>
    </tr>
    <tr>
      <th>Return Date</th>
      <td>{{$data->returndate}} {{$data->returntime}}</td>
    </tr>
    <tr>
      <tr>
        <th>Days</th>
        <td>{{$data->days}}</td>
      </tr>
      <tr>
        <th>Total Price</th>
        <td>{{$data->price}}</td>
      </tr>
      <tr>
        <tr>
          <th>Note</th>
          <td>{{$data->note}}</td>
        </tr>
      <th>IP Address</th>
      <td>{{$data->ip}}</td>
    </tr>
    <tr>
      <th>Status</th>
      <td>{{$data->status}}</td>
    </tr>
    <tr>
      <th>Order Created At</th>
      <td>{{$data->created_at}}</td>
    </tr>
    <tr>
      <th>Order Updated At</th>
      <td>{{$data->updated_at}}</td>
    </tr>
    </table>
    <div class="mb-3">
      <form role="form" action="{{route('admin.reservation.update', ['id'=>$data->id])}}" method="post"> 
        @csrf
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-control" name="status" id="status">
              <option @if ($data->status == "Payment Succesful") selected @endif>Payment Succesful</option>
              <option @if ($data->status == "Payment Failed") selected @endif >Payment Failed</option>>
              <option @if ($data->status == "Confirmed") selected @endif >Confirmed</option>>
              <option @if ($data->status == "Pending") selected @endif >Pending</option>>
              <option @if ($data->status == "Contact User") selected @endif >Contact User</option>>
              <option @if ($data->status == "Waiting Payment") selected @endif >Waiting Payment</option>>
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

