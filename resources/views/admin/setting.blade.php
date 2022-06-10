@extends('layouts.adminbase')

@section('title', 'Title Placeholder')

@section('content')
<div class="row">
    <div class="col-2">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active show" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-general" aria-selected="true">General</a>
        <a class="nav-link" id="v-pills-smtp-tab" data-toggle="pill" href="#v-pills-smtp" role="tab" aria-controls="v-pills-smtp" aria-selected="false">SMTP</a>
        <a class="nav-link" id="v-pills-social-tab" data-toggle="pill" href="#v-pills-social" role="tab" aria-controls="v-pills-social" aria-selected="false">Social Media</a>
        <a class="nav-link" id="v-pills-about-tab" data-toggle="pill" href="#v-pills-about" role="tab" aria-controls="v-pills-about" aria-selected="false">About Us</a>
        <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="v-pills-contact" aria-selected="false">Contact Us</a>
        <a class="nav-link" id="v-pills-references-tab" data-toggle="pill" href="#v-pills-references" role="tab" aria-controls="v-pills-references" aria-selected="false">References</a>

      </div>
    </div>
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade active show" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
            <div class="card">
                <div class="card-header">
                    General Settings
                </div>
                <div class="card-body">
                <form role="form" action="{{route('admin.setting.update')}}"  method="post" enctype='multipart/form-data'> 
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kewyords" class="form-label">Keywords</label>
                        <input type="text" class="form-control" name="keywords" id="keywords" value="{{$data->keywords}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description" value="{{$data->description}}">
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company</label>
                        <input type="text" class="form-control" name="company" id="company" value="{{$data->company}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{$data->address}}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{$data->phone}}">
                    </div>
                    <div class="mb-3">
                        <label for="fax" class="form-label">Fax</label>
                        <input type="text" class="form-control" name="fax" id="fax" value="{{$data->fax}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{$data->email}}">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Icon</label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" name="icon" id="icon" value="{{$data->icon}}">
                                <label class="custom-file-label" for="image">Choose Icon</label>
                            </div>
                        </div>
                        <div class="col">
                            @if ($data->icon)
                            <img src="{{Storage::url($data->icon)}}"  width="200" height="auto">
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option @if ($data->status == "True") selected @endif>True</option>
                            <option @if ($data->status == "False") selected @endif >False</option>>
                        </select>
                    </div>
    
                    <button type="submit" class="btn btn-light btn-icon-split">
                                                    <span class="icon text-gray-600">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                    <span class="text">Update</span>
                                                </a>
                </form>
                </div>
            </div>       
        </div>
        <div class="tab-pane fade" id="v-pills-smtp" role="tabpanel" aria-labelledby="v-pills-smtp-tab">
            <div class="card">
                <div class="card-header">
                    SMTP Settings
                </div>
                <div class="card-body">
                <form role="form" action="{{route('admin.setting.update')}}"  method="post" enctype='multipart/form-data'> 
                    @csrf
                    <div class="mb-3">
                        <label for="smtpserver" class="form-label">SMTP Server</label>
                        <input type="text" class="form-control" name="smtpserver" id="smtpserver" value="{{$data->smtpserver}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="smtpemail" class="form-label">SMTP E-Mail</label>
                        <input type="text" class="form-control" name="smtpemail" id="smtpemail" value="{{$data->smtpemail}}">
                    </div>
                    <div class="mb-3">
                        <label for="smtppassword" class="form-label">SMTP Password</label>
                        <input type="text" class="form-control" name="smtppassword" id="smtppassword" value="{{$data->keywords}}">
                    </div>
                    <div class="mb-3">
                        <label for="smtpport" class="form-label">SMTP Port</label>
                        <input type="number" class="form-control" name="smtpport" id="smtpport" value="{{$data->smtpport}}">
                    </div>
                    <button type="submit" class="btn btn-light btn-icon-split">
                                                    <span class="icon text-gray-600">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                    <span class="text">Update</span>
                                                </a>
                </form>
                </div>
            </div>         </div>
        <div class="tab-pane fade" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">
            <div class="card">
                <div class="card-header">
                    Social Settings
                </div>
                <div class="card-body">
                <form role="form" action="{{route('admin.setting.update')}}"  method="post" enctype='multipart/form-data'> 
                    @csrf
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control" name="facebook" id="facebook" value="{{$data->facebook}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" name="instagram" id="instagram" value="{{$data->instagram}}">
                    </div>
                    <div class="mb-3">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" class="form-control" name="twitter" id="twitter" value="{{$data->twitter}}">
                    </div>
                    <button type="submit" class="btn btn-light btn-icon-split">
                                                    <span class="icon text-gray-600">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                    <span class="text">Update</span>
                                                </a>
                </form>
                </div>
            </div>        </div>
        <div class="tab-pane fade" id="v-pills-about" role="tabpanel" aria-labelledby="v-pills-about-tab">
            <div class="card">
                <div class="card-header">
                    About Us
                </div>
                <div class="card-body">
                <form role="form" action="{{route('admin.setting.update')}}"  method="post" enctype='multipart/form-data'> 
                    @csrf
                    <div class="mb-3">
                        <label for="aboutus" class="form-label">About us</label>
                        <textarea type="text" class="form-control" name="aboutus" id="aboutus">
                            {{$data->aboutus}}
                        </textarea>
                    <script>
                            ClassicEditor
                                    .create( document.querySelector( '#aboutus' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                    </script>
                    </div>
                    <button type="submit" class="btn btn-light btn-icon-split">
                                                    <span class="icon text-gray-600">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                    <span class="text">Update</span>
                                                </a>
                </form>
                </div>
            </div>  
      </div>
        <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
            <div class="card">
                <div class="card-header">
                    Contact
                </div>
                <div class="card-body">
                <form role="form" action="{{route('admin.setting.update')}}"  method="post" enctype='multipart/form-data'> 
                    @csrf
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <textarea type="text" class="form-control" name="contact" id="contact">
                            {{$data->contact}}
                        </textarea>
                    <script>
                            ClassicEditor
                                    .create( document.querySelector( '#contact' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                    </script>
                    </div>
                    <button type="submit" class="btn btn-light btn-icon-split">
                                                    <span class="icon text-gray-600">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                    <span class="text">Update</span>
                                                </a>
                </form>
                </div>
            </div>            </div>
          <div class="tab-pane fade" id="v-pills-references" role="tabpanel" aria-labelledby="v-pills-references-tab">
            <div class="card">
                <div class="card-header">
                    References
                </div>
                <div class="card-body">
                <form role="form" action="{{route('admin.setting.update')}}"  method="post" enctype='multipart/form-data'> 
                    @csrf
                    <div class="mb-3">
                        <label for="references" class="form-label">References</label>
                        <textarea type="text" class="form-control" name="references" id="references">
                            {{$data->references}}
                        </textarea>
                    <script>
                            ClassicEditor
                                    .create( document.querySelector( '#references' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                    </script>
                    </div>
                    <button type="submit" class="btn btn-light btn-icon-split">
                                                    <span class="icon text-gray-600">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                    <span class="text">Update</span>
                                                </a>
                </form>
                </div>
            </div>             </div>
      </div>
    </div>
  </div>
@endsection