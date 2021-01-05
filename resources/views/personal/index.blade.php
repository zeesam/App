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
                        @if(Session::has('message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{Session::get('message')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif
                        <div class="card">
                          <div class="card-header">
                            Personal Details
                          </div>
                          <div class="card-body">
                            @if(empty($data->userid))
                            <form method="post" action="{{url('/personal/store')}}">@csrf
                              <input type="hidden" class="form-control" value="{{Auth::user()->id}}" name="userid">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm">
                                  <div class="form-group">
                                    <label for="fullname">Name</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->name}}" @error('name') in-valid @enderror name="name" id="fullname" aria-describedby="emailHelp">
                                    <span>@error('name') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="fullname">Email</label>
                                    <input type="email" class="form-control" value="{{Auth::user()->email}}" @error('email') in-valid @enderror name="email" id="fullname" aria-describedby="emailHelp">
                                    <span>@error('email') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="number" maxlength="10" name="mobile"  @error('mobile') in-valid @enderror class="form-control" id="mobile">
                                    <span>@error('mobile') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="State">State</label>
                                    <input type="text" maxlength="10" name="state" @error('state') in-valid @enderror class="form-control" id="State">
                                    <span>@error('state') {{$message}} @enderror</span>
                                  </div>
                                </div>
                                <div class="col-sm">
                                  <div class="form-group">
                                    <label for="fullname">Father's Name</label>
                                    <input type="text" class="form-control" name="fname" @error('fname') in-valid @enderror id="fullname" aria-describedby="emailHelp">
                                    <span>@error('fname') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="Address">Address </label>
                                    <input type="text" class="form-control" name="address" @error('address') in-valid @enderror id="Address" aria-describedby="emailHelp">
                                    <span>@error('address') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="Landmark">Landmark</label>
                                    <input type="text" name="landmark" @error('landmark') in-valid @enderror class="form-control" id="Landmark">
                                    <span>@error('landmark') {{$message}} @enderror</span>
                                  </div>
                                  <div class="form-group">
                                    <label for="pincde">Area Pincode</label>
                                    <input type="number" maxlength="10" name="pincode" @error('pincode') in-valid @enderror class="form-control" id="pincde">
                                    <span>@error('pincode') {{$message}} @enderror</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                            @else
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Name</th>
                                  <th scope="col">Father's Name</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">{{$data->name}}</th>
                                  <td>{{$data->fname}}</td>
                                </tr>
                              </tbody>
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Mobile</th>
                                  <th scope="col">Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">{{$data->mobile}}</th>
                                  <td>{{$data->email}}</td>
                                </tr>
                              </tbody>
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Address</th>
                                  <th scope="col">Landmark</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">{{$data->address}}</th>
                                  <td>{{$data->landmark}}</td>
                                </tr>
                              </tbody>
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Pincode</th>
                                  <th scope="col">State</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">{{$data->pincode}}</th>
                                  <td>{{$data->state}}</td>
                                </tr>
                              </tbody>
                            </table>
                            <a href="{{url('/personal/edit/'.$data->id)}}" class="btn btn-outline-danger">Edit/Modify</a>
                            @endif
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
