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
                            <h4 class="card-title mb-0 text-center">Task List Cold Storage</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="personelTeamTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pertanyaan</th>
                                        <th>Frequency</th>
                                        <th>Standard Condition</th>
                                        <th>Actual Check</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= 34; $i++)
                                        @php
                                            $pertanyaanTexts = ["Check Oil Condition (Pressure,Cleanliness & Level)",
                                             "Check HLPS Function","Check gauge conditon (Press. & Temp. gauge)",
                                             "Check belt condition","Check Compressor pressure (suction & discharge)",
                                             "Check suction & discharge temperature","Check terminal block condition",
                                             "Check vibration & noise","Check current compressor",
                                              "Check filter dryer condition",	
                                              "Clean body compressor",
                                              "Check oil leak",
                                              "Check crankcase oil heater function",	
                                              "Check solenoid valve function",
                                              "Clean oil strainer",
                                              "Replace oil compressor",
                                              "Replace core / filter dryer",
                                              "Check condensor fin condition (corrosion & damage)",
                                              "Check pipe leakage",
                                              "Clean condensor coil & Body",
                                              "Clean panel control",
                                              "Check vibration & Noise",
                                              "Check blade imbalance",	
                                              "Check part corrosion",	
                                              "Clean blade & body",	
                                              "Check current fans",
                                              "Replace bearing",
                                              "Check fin condition (corrosion & damage)",
                                              "Check pipe leakage",
                                              "Check TXV function",
                                              "Check defrost function",
                                              "Clean evaporator coil & Body",
                                              "Check door heater function",	
                                              "Check ventilation & infiltration"];

                                              
                                              if ($i == 1) {
                                                echo '<tr><td colspan="5"><h4 class="card-title py-2 mb-0 text-center bg-black text-white">Compressor</h4></td></tr>';
                                            }

                                              if ($i == 22) {
                                                echo '<tr><td colspan="5"><h4 class="card-title py-2 mb-0 text-center bg-black text-white">Fans</h4></td></tr>';
                                            }

                                            if ($i == 28) {
                                                echo '<tr><td colspan="5"><h4 class="card-title py-2 mb-0 text-center bg-black text-white">Evaporator & Cooling Room</h4></td></tr>';
                                            }
                                        @endphp


                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>{{ $pertanyaanTexts[$i - 1] ?? '' }}</td>
                                            <td><input type="text" class="form-control" name="Frequency[]"></td>
                                            <td><input type="text" class="form-control" name="Standard Condition[]" value="{{ $standardConditionTexts[$i - 1] ?? '' }}"></td>
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