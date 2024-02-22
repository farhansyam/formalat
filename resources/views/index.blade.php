@extends('layouts.back2')

@section('content')
<div class="container-fluid">

  @foreach ($customer as $data)
  <br>
  <h5>Customer : {{$data->nama}}</h5>

  <div class="row" style="background-color: #9edda8;">
    <div class="col-sm-6 col-xl-3">
      <br>
      <div class="card bs-red shadow-none">
        <div class="card-body p-4">
          <div class="d-flex align-items-center">
            <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
              <i class="ti ti-engine text-white fs-7" title="ETH"></i>
            </div>
            <h6 class="mb-0 ms-3">JUMLAH EQUIPMENT</h6>
            <div class="ms-auto text-danger d-flex align-items-center">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-4">
            <h3 class="mb-0 fw-semibold fs-7">
              {{$data->equipment()->count()}}
              Unit
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <br>

      <div class="card bg-light-warning shadow-none">
        <div class="card-body p-4">
          <div class="d-flex align-items-center">
            <div class="round rounded bg-warning d-flex align-items-center justify-content-center">
              <i class="cc XRP text-white fs-7" title="XRP"></i>
            </div>
            <h6 class="mb-0 ms-3">TOTAL PM THIS MONTH</h6>
            <div class="ms-auto text-info d-flex align-items-center">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-4">
            <h3 class="mb-0 fw-semibold fs-7">
              {{$data->history()
           ->where('created_at', '>=', Carbon\Carbon::now()->startOfMonth())
           ->whereNotIn('type', ['Survei', 'Troubleshoot'])
           ->count()}} Unit
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <br>

      <div class="card bg-light-danger shadow-none">
        <div class="card-body p-4">
          <div class="d-flex align-items-center">
            <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
              <i class="cc XRPcc XRP text-white fs-7" title="BTC"></i>
            </div>
            <h6 class="mb-0 ms-3">TOTAL PM LAST MONTH</h6>
            <div class="ms-auto text-primary d-flex align-items-center">
              <!-- <i class="ti ti-trending-up text-primary fs-6 me-1"></i> -->
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-4">
            <h3 class="mb-0 fw-semibold fs-7">
              <h3 class="mb-0 fw-semibold fs-7">
                {{$data->history()
           ->where('created_at', '>=', Carbon\Carbon::now()->subMonth()->startOfMonth())
           ->where('created_at', '<', Carbon\Carbon::now()->startOfMonth())
           ->whereNotIn('type', ['Survey', 'Troubleshoot'])
           ->count()}} Unit
              </h3> Unit
            </h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-xl-3">
      <br>

      <div class="card bg-light-primary shadow-none">
        <div class="card-body p-4">
          <div class="d-flex align-items-center">
            <div class="round rounded bg-primary d-flex align-items-center justify-content-center">
              <i class="cc XRP text-white fs-7" title="LTC"></i>
            </div>
            <h6 class="mb-0 ms-3">TOTAL PM 2 MONTH AGO</h6>

            <div class="ms-auto text-info d-flex align-items-center">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-4">
            <h3 class="mb-0 fw-semibold fs-7">
              {{$data->history()
           ->where('created_at', '>=', Carbon\Carbon::now()->subMonths(2)->startOfMonth())
           ->where('created_at', '<', Carbon\Carbon::now()->subMonths(1)->startOfMonth())
           ->whereNotIn('type', ['Survey', 'Troubleshoot'])
           ->count()}} Unit
            </h3>
          </div>
        </div>
      </div>
    </div>

  </div>

  @endforeach
  <br>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold">History This Month</h5>
      <div class="table-responsive mt-4">
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
    </div>
  </div>
</div>
@endsection