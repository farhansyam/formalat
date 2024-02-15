@extends('layouts.back2')
@section('content')
<!-- --------------------------------------------------- -->
<!-- Header End -->
<!-- --------------------------------------------------- -->
<div class="container-fluid">
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid Start -->
  <!-- --------------------------------------------------- -->
  <section>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0 text-center">equipment</h4>
          </div>
          <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
          <div class="card-body">
            <a href="{{route('equipment.create')}}">
              <button class="btn btn-primary">Tambah</button></a><br><br>
            <table class="table table-striped table-hover table-bordered table no-wrap tablesaw-columntoggle" data-tablesaw-mode="columntoggle" id="tablesaw-1386">
              <thead>
                <tr>


                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    No
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    Id
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    jenis
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    brand
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="2" class="border tablesaw-priority-2">
                    area
                  </th>
                  <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="1" class="border tablesaw-priority-1">
                    <abbr title="Rotten Tomato Rating">Option</abbr>
                  </th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($equipment as $data)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$formattedId = sprintf('%05d', $data->id)}}EQ</td>

                  <td class="tablesaw-priority-3">@if($data->jenis == 1)
                    {{ "AC Split" }}
                    @elseif($data->jenis == 2)
                    {{ "AHUP" }}
                    @elseif($data->jenis == 3)
                    {{ "Cooled Water Chiller" }}
                    @elseif($data->jenis == 4)
                    {{ "PAC" }}
                    @elseif($data->jenis == 5)
                    {{ "Cold Storage" }}
                    @elseif($data->jenis == 6)
                    {{ "Cooling Unit & AC Panel" }}
                    @elseif($data->jenis == 7)
                    {{ "Mini Chiller" }}
                    @elseif($data->jenis == 8)
                    {{ "Evaporative Air Cooler" }}
                    @elseif($data->jenis == 9)
                    {{ "AHU" }}
                    @elseif($data->jenis == 10)
                    {{ "Cooling tower" }}
                    @elseif($data->jenis == 11)
                    {{ "Humidifier" }}
                    @elseif($data->jenis == 12)
                    {{ "Dehumidifier" }}
                    @elseif($data->jenis == 13)
                    {{ "FCU (Fan Cooling Unit)" }}
                    @elseif($data->jenis == 14)
                    {{ "Exhaust Fan" }}
                    @elseif($data->jenis == 15)
                    {{ "Pompa" }}
                    @elseif($data->jenis == 16)
                    {{ "Spot Cooling" }}
                    @elseif($data->jenis == 17)
                    {{ "Water Mist" }}
                    @elseif($data->jenis == 18)
                    {{ "Chiller Centrifugal" }}
                    @elseif($data->jenis == 19)
                    {{ "Floor Standing" }}
                    @elseif($data->jenis == 20)
                    {{ "Ac Cassette" }}
                    @elseif($data->jenis == 21)
                    {{ "Split Duct" }}
                    @endif
                  </td>
                  <td class="tablesaw-priority-3">{{$data->brand}}</td>
                  <td class="tablesaw-priority-3">{{$data->area}}</td>
                  <td class="tablesaw-priority-1">
                    <div style="display: flex; align-items: center;">
                      <a href="{{ route('equipment.show', $data->id) }}" style="text-decoration: none;">
                        <button class="btn btn-success">Detail</button>
                      </a>
                      <a href="{{ route('equipment.print', $data->id) }}" style="text-decoration: none;margin-left: 10px;">
                        <button class="btn btn-warning">Print</button>
                      </a>

                      <form action="{{ route('equipment.destroy', $data->id) }}" method="POST" style="margin-left: 10px;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                      </form>
                    </div>


                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$equipment->links()}}
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- --------------------------------------------------- -->
  <!--  Form Inputs Grid End -->
  <!-- --------------------------------------------------- -->
</div>
</div>

</div>

@endsection