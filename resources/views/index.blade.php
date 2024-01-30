@extends('layouts.back2')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 col-xl-3">
      <div class="card bg-light-primary shadow-none">
        <div class="card-body p-4">
          <div class="d-flex align-items-center">
            <div class="round rounded bg-primary d-flex align-items-center justify-content-center">
              <i class="ti ti-building text-white fs-7" title="BTC"></i>
            </div>
            <h6 class="mb-0 ms-2">CUSTOMER </h6>
            <div class="ms-auto text-primary d-flex align-items-center">
              <!-- <i class="ti ti-trending-up text-primary fs-6 me-1"></i> -->
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-4">
            <h3 class="mb-0 fw-semibold fs-7">{{$customer}}</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card bg-light-danger shadow-none">
        <div class="card-body p-4">
          <div class="d-flex align-items-center">
            <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
              <i class="ti ti-engine text-white fs-7" title="ETH"></i>
            </div>
            <h6 class="mb-0 ms-3">EQUIPMENT</h6>
            <div class="ms-auto text-danger d-flex align-items-center">
              <!-- <i class="ti ti-trending-up text-danger fs-6 me-1"></i> -->
              <!-- <aspan class="fs-2 fw-bold">{{$equipment}}</aspan> -->
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-4">
            <h3 class="mb-0 fw-semibold fs-7">{{$equipment}}</h3>
            <!-- <span class="fw-bold">{{$equipment}}</span> -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card bg-light-success shadow-none">
        <div class="card-body p-4">
          <div class="d-flex align-items-center">
            <div class="round rounded bg-success d-flex align-items-center justify-content-center">
              <i class="ti ti-checklist text-white fs-7" title="LTC"></i>
            </div>
            <h6 class="mb-0 ms-3">Survey</h6>
            <div class="ms-auto text-info d-flex align-items-center">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-4">
            <h3 class="mb-0 fw-semibold fs-7">{{$survey}}</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card bg-light-warning shadow-none">
        <div class="card-body p-4">
          <div class="d-flex align-items-center">
            <div class="round rounded bg-warning d-flex align-items-center justify-content-center">
              <i class="cc XRP text-white fs-7" title="XRP"></i>
            </div>
            <h6 class="mb-0 ms-3">Troubleshoot</h6>
            <div class="ms-auto text-info d-flex align-items-center">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mt-4">
            <h3 class="mb-0 fw-semibold fs-7">1.150</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold">History This Month</h5>
      <div class="table-responsive mt-4">
        <table class="table table-borderless text-nowrap align-middle mb-0">
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
                    <span class="">{{$no}}</span>
                  </div>
                </div>
              </td>
              <td class="bg-transparent"> {{$equipment->customer}} <i class="ti ti-chevron-down text-danger ms-1 fs-4"></i>
              </td>
              <td class="bg-transparent">
                <i class=""></i>{{$equipment->brand}}
              </td>
              <td class="bg-transparent">{{$data->created_at}}</td>
              <td class="text-end rounded-end bg-transparent">
                <span class="badge bg-danger">{{$data->type}}</span>
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