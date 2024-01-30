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
                            <h4 class="card-title mb-0 text-center">Task List Mini Chiller</h4>
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
                                    @for ($i = 1; $i <= 16; $i++)
                                        @php
                                            $pertanyaanTexts = [
                                                'INTENSIVE SAFETY BRIEFING TEAM',
                                                'Logsheet Parameter Unit',
                                                'Inspect Condition Condensor coil',
                                                'Cleaning Condensor coil',
                                                'Cleaning Fan Condensor',
                                                'Cleaning Component Unit',
                                                'Cleaning Strainer',
                                                'Check Physical Condition Unit',
                                                'Check Part Fungction (Compressor, TXV, Sensor, etc.)',
                                                'Check Pressure Water in & Out',
                                                'Check Temperature EWT & LWT',
                                                'Check Actual Pressure Refrigerant',
                                                'Check Motorize Valve Water',
                                                'Syncronize All Program Match With BMS',
                                                'Inspection Piping Chillwater',
                                                'Inspection Piping Refrigeration',
                                                'Checklist History PM'
                                            ]; 
                                        @endphp

                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>{{ $pertanyaanTexts[$i - 1] ?? '' }}</td>
                                            <td><input type="text" class="form-control" name="Frequency[]"></td>
                                            <td class="text-center">OK</td>
                                            <td class="text-center"><input type="checkbox" class="form-check-input" name="ActualCheck[]"></td>
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
