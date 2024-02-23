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
                      {{ "Cooled Water Chiller" }}
                      @elseif($equipment->jenis == 3)
                      {{ "AHUP" }}
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
                        <a href="">
                          <button type="button" class="btn btn-danger">
                            Trouble Shoot
                          </button>
                        </a>
                        @if($equipment->jenis == 1)
                        <a href="{{ route('ac-split.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Ac Split
                          </button>
                        </a>                        
                        @elseif($equipment->jenis == 2)
                        <a href="{{ route('air-cooled-water-chiller.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Cooled Water Chiller
                          </button>
                        </a>

                        @elseif($equipment->jenis == 3)
                        <a href="{{ route('AUHP.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List AUHP
                          </button>
                        </a>

                        @elseif($equipment->jenis == 4)
                        <a href="{{ route('PAC.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List PAC
                          </button>
                        </a>
                        
                        @elseif($equipment->jenis == 5)
                        <a href="{{ route('cold-storage.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">Task List Cold Storage</button>
                        </a>

                        @elseif($equipment->jenis == 6)
                        <a href="{{ route('cooling-unit.create',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Cooling Unit & AC Panel
                          </button>
                        </a>
                        @elseif($equipment->jenis == 7)
                        <a href="{{ route('mini-chiller.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Mini Chiller
                          </button>
                        </a>
                        @elseif($equipment->jenis == 8)
                        <a href="{{ route('evaporator-aircooler.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Evaporative Air Cooler
                          </button>
                        </a>
                        @elseif($equipment->jenis == 9)
                        <a href="{{ route('AHU.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List AHU
                          </button>
                        </a>
                        @elseif($equipment->jenis == 10)
                        <a href="{{ route('cooling-tower.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Cooling Tower
                          </button>
                        </a>
                        @elseif($equipment->jenis == 11)
                        <a href="{{ route('humidifier.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Humidifier
                          </button>
                        </a>
                        @elseif($equipment->jenis == 12)
                        <a href="{{ route('dehumidifier.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Dehumidifier
                        </a>
                        @elseif($equipment->jenis == 13)
                        <a href="{{ route('FCU.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Fan Cooling Unit
                          </button>
                        </a>
                        @elseif($equipment->jenis == 14)
                        <a href="{{ route('exhaust-fan.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Exhaust Fan
                          </button>
                        </a>
                        @elseif($equipment->jenis == 15)
                        <a href="{{ route('pompa.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Pompa
                          </button>
                        </a>
                        @elseif($equipment->jenis == 16)
                        <a href="{{ route('spot-cooling.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Spot Cooling
                          </button>
                        </a>
                        @elseif($equipment->jenis == 17)
                        <a href="{{ route('water-mist.create2',$equipment->id) }}">
                          <button type="button" class="btn btn-info">
                            Task List Water Mist
                          </button>
                        </a>
                        @elseif($equipment->jenis == 18)
                        <a href="{{ route('chiller-centrifugal.create2',$equipment->id) }}">
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
                      <div class="col-md-6 col-sm-12 mb-2">
                        <button type="button" class="btn btn-danger w-100">
                          Trouble Shoot
                        </button>
                      </div>
                      @php
                      $taskLists = [
                      1 => 'Ac Split',
                      2 => 'Cooled Water Chiller',
                      3 => 'AUHP',
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
                    <td>

                      @if($equipment->jenis == 1)
                      <div class="btn-group">
                        <a href="{{ route("ac-split.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                        <a href="{{ route("ac-split.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                          <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                      </div>

                      @elseif($equipment->jenis == 2)
                        <div class="btn-group">
                          <a href="{{ route("air-cooled-water-chiller.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("air-cooled-water-chiller.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 3)
                        <div class="btn-group">
                          <a href="{{ route("AUHP.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("AUHP.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 4)
                        <div class="btn-group">
                          <a href="{{ route("PAC.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("PAC.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 5)
                        <div class="btn-group">
                          <a href="{{ route("cold-storage.show",$data->id_equipment) }}" class="btn btn-primary mx-1 btn-block">detail</a>
                          <a href="{{ route("cold-storage.edit",$data->id_equipment) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 6) 
                        <div class="btn-group">
                          <a href="{{ route("cooling-unit.show",$data->id_equipment) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("cooling-unit.edit",$data->id_equipment) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 7)
                        <div class="btn-group">
                          <a href="{{ route("mini-chiller.show",$data->id_equipment) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("mini-chiller.edit",$data->id_equipment) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href=""e class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 8)
                        <div class="btn-group">
                          <a href="{{ route("evaporator-aircooler.show",$data->id_equipment) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("evaporator-aircooler.edit",$data->id_equipment) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 9)
                        <div class="btn-group">
                          <a href="{{ route("AHU.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("AHU.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 10)
                        <div class="btn-group">
                          <a href="{{ route("cooling-tower.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("cooling-tower.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 11)
                        <div class="btn-group">
                          <a href="{{ route("humidifier.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("humidifier.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 12)
                        <div class="btn-group">
                          <a href="{{ route("dehumidifier.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("dehumidifier.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 13)
                        <div class="btn-group">
                          <a href="{{ route("FCU.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("FCU.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 14)
                        <div class="btn-group">
                          <a href="{{ route("exhaust-fan.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("exhaust-fan.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 15)
                        <div class="btn-group">
                          <a href="{{ route("pompa.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("pompa.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 16)
                        <div class="btn-group">
                          <a href="{{ route("spot-cooling.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("spot-cooling.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 17)
                        <div class="btn-group">
                          <a href="{{ route("water-mist.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("water-mist.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @elseif($equipment->jenis == 18)
                        <div class="btn-group">
                          <a href="{{ route("chiller-centrifugal.show",$data->id) }}" class="btn btn-primary mx-1 btn-block">Detail</a>
                          <a href="{{ route("chiller-centrifugal.edit",$data->id) }}" class="btn btn-warning mx-1 btn-block">edit</a>
                            <a href="" class="btn btn-danger mx-1 btn-block">DELETE</a>
                        </div>
                        @endif
                    </td>
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