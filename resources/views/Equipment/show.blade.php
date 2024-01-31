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
            {!!$equipment->qrcode!!}
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
                      <div class="col-md-6 col-sm-12 mb-2">
                        <a href="{{ route('survey.create', $equipment->id) }}" class="btn btn-primary w-100">
                          <i class="ti ti-edit fs-5"></i> Survey
                        </a>
                      </div>
                      <div class="col-md-6 col-sm-12 mb-2">
                        <button type="button" class="btn btn-danger w-100">
                          Trouble Shoot
                        </button>
                      </div>
                      @php
                      $taskLists = [
                      1 => 'Ac Split',
                      2 => 'AUHP',
                      3 => 'Cooled Water Chiller',
                      4 => 'PAC',
                      5 => 'Cold Storage',
                      6 => 'Cooling Unit & AC Panel',
                      7 => 'Mini Chiller',
                      8 => 'Evaporative Air Cooler',
                      9 => 'AHU',
                      10 => 'Cooling Tower',
                      11 => 'Humidifier',
                      12 => 'Dehumidifier',
                      13 => 'Fan Cooling Unit',
                      14 => 'Exhaust Fan',
                      15 => 'Pompa',
                      16 => 'Spot Cooling',
                      17 => 'Water Mist',
                      18 => 'Chiller Centrifugal',
                      19 => 'Floor Standing',
                      20 => 'Ac Cassette',
                      21 => 'Split Duct'
                      ];
                      @endphp
                      @if (isset($taskLists[$equipment->jenis]))
                      <div class="col-md-6 col-sm-12 mb-2">
                        <a href="" class="btn btn-info w-100">
                          Task List {{ $taskLists[$equipment->jenis] }}
                        </a>
                      </div>
                      @endif
                    </div>
                  </div>
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