@extends('layouts.back2')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <!-- ---------------------
                                    start Form with view only
                                ---------------- -->
    <div class="card">
      <div class="card-header bg-primary">
        <h5 class="mb-0 text-white"><?php
                                    // Array untuk memetakan angka ke jenis
                                    $jenis = [
                                      1 => "AC Split",
                                      2 => "AHUP",
                                      3 => "Cooled Water Chiller",
                                      4 => "PAC",
                                      5 => "Cold Storage",
                                      6 => "Cooling Unit & AC Panel",
                                      7 => "Mini Chiller",
                                      8 => "Evaporative Air Cooler",
                                      9 => "AHU",
                                      10 => "Cooling tower",
                                      11 => "Humidifier",
                                      12 => "Dehumidifier",
                                      13 => "FCU (Fan Cooling Unit)",
                                      14 => "Exhaust Fan",
                                      15 => "Pompa",
                                      16 => "Spot Cooling",
                                      17 => "Water Mist",
                                      18 => "Chiller Centrifugal",
                                      19 => "Floor Standing",
                                      20 => "Ac Cassette",
                                      21 => "Split Duct"
                                    ];
                                    // Ambil singkatan dari jenis berdasarkan angka
                                    $singkatan1 = isset($jenis[$equipment->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$equipment->jenis]))), 0, 3) : '';
                                    $singkatan2 = strtoupper(substr($equipment->area, 0, 1));

                                    // Mengambil karakter tengah (atau kedua karakter dari tengah jika panjang genap)
                                    $panjang = strlen($equipment->area);
                                    $posisi_tengah = floor($panjang / 2);
                                    $singkatan2 .= strtoupper(substr($equipment->area, $posisi_tengah, 1));

                                    // Mengambil karakter terakhir
                                    $singkatan2 .= strtoupper(substr($equipment->area, -1));
                                    echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $equipment->id));
                                    // Mengambil karakter pertama


                                    ?></h5>
      </div>
      <form class="form-horizontal">
        <div class="form-body">
          <div class="card-body">
            <h5 class="card-title mb-0">Equipment Info</h5><br>
            <img src="{{asset('')}}/{{$equipment->qrcode}}" alt="" width="200">

            @foreach(explode(',', $equipment->foto) as $imageName)
            <img src="{{asset('image')}}/{{$imageName}}" alt="" width="200">
            @endforeach
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
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Customer:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->customer}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Running Hours:</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->jamoperasi}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">Freon Type:</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->jenis_freon}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-3">Room :</label>
                  <div class="col-md-9">
                    <p class="form-control-static">{{$equipment->room}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="control-label text-end col-md-4">PM Regulerly :</label>
                  <div class="col-md-8">
                    <p class="form-control-static">{{$equipment->reguler}}</p>
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
                      <div class="col-md-4 col-sm-12 mb-2">
                        <a href="{{ route('survey.create', $equipment->id) }}" class="btn btn-primary w-100">
                          <i class="fs-5"></i> Form Survey
                        </a>
                      </div>
                      <div class="col-md-4 col-sm-12 mb-2">

                        @if($equipment->jenis == 1)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Ac Split
                          </button>
                        </a>
                        @elseif($equipment->jenis == 2)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM AUHP
                          </button>
                        </a>
                        @elseif($equipment->jenis == 3)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Cooled Water Chiller
                          </button>
                        </a>
                        @elseif($equipment->jenis == 4)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM PAC
                          </button>
                        </a>
                        @elseif($equipment->jenis == 5)
                        <a href="{{ route('cold-storage.index2',$equipment->id) }}">
                          <button type="button" class="btn btn-info w-100">Task List Cold Storage</button>
                        </a>

                        @elseif($equipment->jenis == 6)
                        <a href="{{ route('cooling-unit.index') }}">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Cooling Unit & AC Panel
                          </button>
                        </a>
                        @elseif($equipment->jenis == 7)
                        <a href="{{ route('mini-chiller.index') }}">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Mini Chiller
                          </button>
                        </a>
                        @elseif($equipment->jenis == 8)
                        <a href="{{ route('evaporator-aircooler.index') }}">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Evaporative Air Cooler
                          </button>
                        </a>
                        @elseif($equipment->jenis == 9)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM AHU
                          </button>
                        </a>
                        @elseif($equipment->jenis == 10)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Cooling Tower
                          </button>
                        </a>
                        @elseif($equipment->jenis == 11)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Humidifier
                          </button>
                        </a>
                        @elseif($equipment->jenis == 12)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Dehumidifier
                        </a>
                        @elseif($equipment->jenis == 13)

                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Fan Cooling Unit
                          </button>
                        </a>
                        @elseif($equipment->jenis == 14)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Exhaust Fan
                          </button>
                        </a>
                        @elseif($equipment->jenis == 15)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Pompa
                          </button>
                        </a>
                        @elseif($equipment->jenis == 16)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Spot Cooling
                          </button>
                        </a>
                        @elseif($equipment->jenis == 17)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Water Mist
                          </button>
                        </a>
                        @elseif($equipment->jenis == 18)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Chiller Centrifugal
                          </button>
                        </a>
                        @elseif($equipment->jenis == 19)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Floor Standing
                          </button>
                        </a>
                        @elseif($equipment->jenis == 20)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Ac Cassette
                          </button>
                        </a>
                        @elseif($equipment->jenis == 21)
                        <a href="">
                          <button type="button" class="btn btn-info w-100">
                           Form PM Split Duct
                          </button>
                        </a>
                        @endif
                      </div>
                      <div class="col-md-4 col-sm-12 mb-2">
                        <a href="{{ route('ts.create', $equipment->id) }}" type="button" class="btn btn-danger w-100">
                          Form TS
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <hr>
              <h6>History Equipment</h6>
              <table class="table table-borderless text-nowrap align-middle mb-0" id="example">
                <thead>
                  <th>No</th>
                  <th>Id</th>
                  <th>Site</th>
                  <th>Jenis Equipment</th>
                  <th>Date</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @php
                  $no =1;
                  @endphp
                  @foreach ($history as $data)
                  @php
                  $equipment = \App\Models\Equipment::find($data->id_equipment);
                  @endphp
                  <tr class="bg-light">
                    <td class="rounded-start bg-transparent">
                      <div class="d-flex align-items-center gap-3">
                        <div>
                          <span class="">{{$no++}}</span>
                        </div>
                      </div>
                    </td>
                    <td class="bg-transparent">
                      <!-- <i class=""></i>{{$equipment->brand}} -->
                      <i class=""></i><?php
                                      // Array untuk memetakan angka ke jenis
                                      $jenis = [
                                        1 => "AC Split",
                                        2 => "AHUP",
                                        3 => "Cooled Water Chiller",
                                        4 => "PAC",
                                        5 => "Cold Storage",
                                        6 => "Cooling Unit & AC Panel",
                                        7 => "Mini Chiller",
                                        8 => "Evaporative Air Cooler",
                                        9 => "AHU",
                                        10 => "Cooling tower",
                                        11 => "Humidifier",
                                        12 => "Dehumidifier",
                                        13 => "FCU (Fan Cooling Unit)",
                                        14 => "Exhaust Fan",
                                        15 => "Pompa",
                                        16 => "Spot Cooling",
                                        17 => "Water Mist",
                                        18 => "Chiller Centrifugal",
                                        19 => "Floor Standing",
                                        20 => "Ac Cassette",
                                        21 => "Split Duct"
                                      ];
                                      // Ambil singkatan dari jenis berdasarkan angka
                                      $singkatan1 = isset($jenis[$equipment->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$equipment->jenis]))), 0, 3) : '';
                                      $singkatan2 = strtoupper(substr($equipment->area, 0, 1));

                                      // Mengambil karakter tengah (atau kedua karakter dari tengah jika panjang genap)
                                      $panjang = strlen($equipment->area);
                                      $posisi_tengah = floor($panjang / 2);
                                      $singkatan2 .= strtoupper(substr($equipment->area, $posisi_tengah, 1));

                                      // Mengambil karakter terakhir
                                      $singkatan2 .= strtoupper(substr($equipment->area, -1));
                                      echo strtoupper($singkatan1 . $singkatan2 . $formattedId = sprintf('%05d', $equipment->id));
                                      // Mengambil karakter pertama


                                      ?>
                    </td>
                    <td class="bg-transparent">
                      {{$equipment->area}}
                    </td>
                    <td class="bg-transparent">
                      @if($equipment->jenis == 1)
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
                    </td>
                    <td class="bg-transparent">{{$data->created_at}}</td>
                    <td class="text-end rounded-end bg-transparent">
                      <span class="badge bg-warning">{{$data->type}}</span>
                      <a href="{{ route('formberitaacara.show', $data->id_act) }}" class="badge bg-primary">Detail</a>
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