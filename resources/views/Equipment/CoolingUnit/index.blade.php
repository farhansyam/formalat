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
                            <h4 class="card-title mb-0 text-center">Task List Cooling Unit & AC Panel</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pertanyaan</th>
                                        <th>Frequency</th>
                                        <th>Standard</th>
                                        <th>Actual Check</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= 21; $i++)
                                        @php
                                            $pertanyaanTexts = [
                                                'Cleaning Condensor', 'Cleaning Evaporator',
                                                'Cleaning Fan Condensor', 'Cleaning Fan Evaporator',
                                                'Cleaning Body Compressor', 'Cleaning Bak Drain',
                                                'Flushing Selang Drain', 'Cek amper kompressor',
                                                'Cek Pressure Freon',
                                                
                                                'Cleaning Condensor', 'Cleaning area dalam Cooling',
                                                'Cleaning Filter', 'Cek Water Level', 'Cek Kebocoran',
                                                'Cek Amper kompressor', 'Cek amper Fan', 'Cek Pressure Freon',
                                                'Cleaning body unit', 'Cleaning Fan', 'Cek Water Level',
                                                'Cek sirkulasi air cooling',
                                            ];

                                            // Display the title after 9 and 15
                                            if ($i == 10) {
                                                echo '<tr><td colspan="5"><h4 class="card-title mb-0 text-center bg-black text-white">Cooling Unit</h4></td></tr>';
                                            }

                                            if ($i == 18) {
                                                echo '<tr><td colspan="5"><h4 class="card-title mb-0 text-center bg-black text-white">Cooling Granitur</h4></td></tr>';
                                            }
                                        @endphp

                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>{{ $pertanyaanTexts[$i - 1] ?? '' }}</td>
                                            <td><input type="text" class="form-control" name="Frequency[]"></td>
                                            <td><input type="text" class="form-control" name="Standard Condition[]" value="{{ $standardConditionTexts[$i - 1] ?? '' }}"></td>
                                            <td class="text-center"><input type="checkbox" class="form-check-input align-self-center" name="ActualCheck[]"></td>
                                        </tr>
                                    @endfor
                                    
                                </tbody>
                            </table>
                            <a href="">
                                <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- --------------------------------------------------- -->
        <!--  Form Inputs Grid End -->
        <!-- --------------------------------------------------- -->
    </div>
@endsection
