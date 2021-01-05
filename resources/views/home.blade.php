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
                            Application for Non-Teaching Post
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Important Dates</h5>
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Date of Application Opening</th>
                                  <th scope="col">Date of Application Closing</th>
                                  <th scope="col">Date of Offline Submission</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>05/01/2021</td>
                                  <td>30/01/2021</td>
                                  <td>15/02/2021</td>
                                </tr>
                              </tbody>
                            </table>
                            <a href="#">Click here</a> to download the Advertisement Notice
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
