@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                          <div class="card-header">
                            Contents
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                              <a href="{{url('/personal/index')}}" class="btn btn-primary btn-block">Personal Details</a>
                            </li>
                            <li class="list-group-item">
                              <a href="{{url('/academic/index')}}" class="btn btn-primary btn-block">Academic Details</a>
                            </li>
                            <li class="list-group-item">
                              <a href="{{url('/fee/index')}}" class="btn btn-primary btn-block">Application Fee Details</a>
                            </li>
                            <li class="list-group-item">
                              <a href="#" class="btn btn-primary btn-block">Preview Application</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="card">
                          <div class="card-header">
                            Personal Details
                          </div>
                          <div class="card-body">
                            <form method="post" action="{{url('/personal/update/'.$data->id)}}">@csrf
                              <input type="hidden" class="form-control" value="{{Auth::user()->id}}" name="userid">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm">
                                  <div class="form-group">
                                    <label for="fullname">Name</label>
                                    <input type="text" class="form-control" value="{{$data->name}}" @error('name') in-valid @enderror name="name" id="fullname" aria-describedby="emailHelp">
                                    <span>@error('name') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="fullname">Email</label>
                                    <input type="email" class="form-control" value="{{$data->email}}" @error('email') in-valid @enderror name="email" id="fullname" aria-describedby="emailHelp">
                                    <span>@error('email') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="number" maxlength="10" name="mobile" value="{{$data->mobile}}"   @error('mobile') in-valid @enderror class="form-control" id="mobile">
                                    <span>@error('mobile') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="State">State</label>
                                    <input type="text" maxlength="10" name="state" value="{{$data->state}}" @error('state') in-valid @enderror class="form-control" id="State">
                                    <span>@error('state') {{$message}} @enderror</span>
                                  </div>
                                </div>
                                <div class="col-sm">
                                  <div class="form-group">
                                    <label for="fullname">Father's Name</label>
                                    <input type="text" class="form-control" name="fname" value="{{$data->fname}}" @error('fname') in-valid @enderror id="fullname" aria-describedby="emailHelp">
                                    <span>@error('fname') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="Address">Address </label>
                                    <input type="text" class="form-control" name="address" value="{{$data->address}}" @error('address') in-valid @enderror id="Address" aria-describedby="emailHelp">
                                    <span>@error('address') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="Landmark">Landmark</label>
                                    <input type="text" name="landmark" value="{{$data->landmark}}" @error('landmark') in-valid @enderror class="form-control" id="Landmark">
                                    <span>@error('landmark') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="pincde">Area Pincode</label>
                                    <input type="number" maxlength="10" name="pincode" value="{{$data->pincode}}" @error('pincode') in-valid @enderror class="form-control" id="pincde">
                                    <span>@error('pincode') {{$message}} @enderror</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
