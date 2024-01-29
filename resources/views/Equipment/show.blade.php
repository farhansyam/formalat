@extends('layouts.back2')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <!-- ---------------------
                                    start Form with view only
                                ---------------- -->
    <div class="card">
      <div class="card-header bg-primary">
        <h5 class="mb-0 text-white">{{$formattedId = sprintf('%05d', $equipment->id)}}EQ</h5>
      </div>
      <form class="form-horizontal">
        <div class="form-body">
          <div class="card-body">
            <h5 class="card-title mb-0">Equipment Info</h5>
            <img src="{{asset('storage/image')}}/{{$equipment->foto}}" alt="">
          </div>
          <hr class="mt-0 mb-5">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Jenis:
                  </label>
                  <div class="col-md-8">
                    <p class="form-control-static"> @if($equipment->jenis == 1)
                      {{ "AC Split" }}
                      @elseif($equipment->jenis == 2)
                      {{ "AHUP" }}
                      @elseif($equipment->jenis == 3)
                      {{ "Cooled Water Chiller" }}
                      @elseif($equipment->jenis == 4)
                      {{ "PAC" }}
                      @elseif($equipment->jenis == 5)
                      {{ "Cold Storage" }}
                      @elseif($equipment->jenis == 6)
                      {{ "Cooling Unit & AC Panel" }}
                      @elseif($equipment->jenis == 7)
                      {{ "Mini Chiller" }}
                      @elseif($equipment->jenis == 8)
                      {{ "Evaporative Air Cooler" }}
                      @elseif($equipment->jenis == 9)
                      {{ "AHU" }}
                      @elseif($equipment->jenis == 10)
                      {{ "Cooling tower" }}
                      @elseif($equipment->jenis == 11)
                      {{ "Humidifier" }}
                      @elseif($equipment->jenis == 12)
                      {{ "Dehumidifier" }}
                      @elseif($equipment->jenis == 13)
                      {{ "FCU (Fan Cooling Unit)" }}
                      @elseif($equipment->jenis == 14)
                      {{ "Exhaust Fan" }}
                      @elseif($equipment->jenis == 15)
                      {{ "Pompa" }}
                      @elseif($equipment->jenis == 16)
                      {{ "Spot Cooling" }}
                      @elseif($equipment->jenis == 17)
                      {{ "Water Mist" }}
                      @elseif($equipment->jenis == 18)
                      {{ "Chiller Centrifugal" }}
                      @elseif($equipment->jenis == 19)
                      {{ "Floor Standing" }}
                      @elseif($equipment->jenis == 20)
                      {{ "Ac Cassette" }}
                      @elseif($equipment->jenis == 21)
                      {{ "Split Duct" }}
                      @endif
                    </p>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Brand:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->brand}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Serial Number:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->serial_number}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Plat Name:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->nameplate}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Tahun Pembuatan:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->tahun_pembuatan}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Tahun Instalasi:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->tahun_installasi}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Kapasitas:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->kapasitas}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Area:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->area}}</p>
                  </div>
                </div>
              </div>
              <!--/span-->
            </div>
            <hr>
            <div class="form-actions">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-offset-9 col-md-9">
                        <a href="{{route('survey.create',$equipment->id)}}" class="btn btn-primary">

                          <i class="ti ti-edit fs-5"></i> Survey
                        </a>
                        <a href="">
                          <button type="button" class="btn btn-danger">
                            Trouble Shoot
                          </button>
                        </a>
                        @if($equipment->jenis == 1)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Ac Split
                          </button>
                        </a>
                        @elseif($equipment->jenis == 2)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List AUHP
                          </button>
                        </a>
                        @elseif($equipment->jenis == 3)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Cooled Water Chiller
                          </button>
                        </a>
                        @elseif($equipment->jenis == 4)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List PAC
                          </button>
                        </a>
                        @elseif($equipment->jenis == 5)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Cold Storage
                          </button>
                        </a>
                        @elseif($equipment->jenis == 6)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Cooling Unit & AC Panel
                          </button>
                        </a>
                        @elseif($equipment->jenis == 7)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Mini Chiller
                          </button>
                        </a>
                        @elseif($equipment->jenis == 8)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Evaporative Air Cooler
                          </button>
                        </a>
                        @elseif($equipment->jenis == 9)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List AHU
                          </button>
                        </a>
                        @elseif($equipment->jenis == 10)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Cooling Tower
                          </button>
                        </a>
                        @elseif($equipment->jenis == 11)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Humidifier
                          </button>
                        </a>
                        @elseif($equipment->jenis == 12)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Dehumidifier
                        </a>
                        @elseif($equipment->jenis == 13)

                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Fan Cooling Unit
                          </button>
                        </a>
                        @elseif($equipment->jenis == 14)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Exhaust Fan
                          </button>
                        </a>
                        @elseif($equipment->jenis == 15)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Pompa
                          </button>
                        </a>
                        @elseif($equipment->jenis == 16)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Spot Cooling
                          </button>
                        </a>
                        @elseif($equipment->jenis == 17)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Water Mist
                          </button>
                        </a>
                        @elseif($equipment->jenis == 18)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Chiller Centrifugal
                          </button>
                        </a>
                        @elseif($equipment->jenis == 19)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Floor Standing
                          </button>
                        </a>
                        @elseif($equipment->jenis == 20)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Ac Cassette
                          </button>
                        </a>
                        @elseif($equipment->jenis == 21)
                        <a href="">
                          <button type="button" class="btn btn-info">
                            Task List Split Duct
                          </button>
                        </a>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <hr>
              <h6>History Equipment</h6>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Type</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($history as $data)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data->created_at}}</td>
                      <td>{{$data->type}}</td>
                      <td><button class="btn btn-primary">Detail</button></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!--/span-->
            <!--/span-->
          </div>
      </form>
    </div>
    <!-- ---------------------
                                    start Form with view only
                                ---------------- -->
  </div>
</div>
@endsection