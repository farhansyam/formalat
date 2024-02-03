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
                            <form action="{{ route('cold-storage.store') }}" method="POST">
                                @csrf
                                <table class="table table-bordered" id="personelTeamTable">
                                    <thead>
                                        <tr>
                            
                                            <th>Pertanyaan</th>
                                            <th>Frequency</th>
                                            <th>Standard Condition</th>
                                            <th>Actual Check</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                             

                                    <input type="hidden" name="id_equipment" value="{{ $equipmentId }}">
                                            <tr>
                                             
                                                <td>Check Oil Condition (Pressure,Cleanliness & Level)</td>
                                                <td><input type="text" class="form-control" name="q1[]"></td>
                                                <td><input type="text" class="form-control" name="q1[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q1[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check HLPS Function</td>
                                                <td><input type="text" class="form-control" name="q2[]"></td>
                                                <td><input type="text" class="form-control" name="q2[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check gauge conditon (Press. & Temp. gauge)</td>
                                                <td><input type="text" class="form-control" name="q3[]"></td>
                                                <td><input type="text" class="form-control" name="q3[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check belt condition</td>
                                                <td><input type="text" class="form-control" name="q4[]"></td>
                                                <td><input type="text" class="form-control" name="q4[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check Compressor pressure (suction & discharge)</td>
                                                <td><input type="text" class="form-control" name="q5[]"></td>
                                                <td><input type="text" class="form-control" name="q5[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check suction & discharge temperature</td>
                                                <td><input type="text" class="form-control" name="q6[]"></td>
                                                <td><input type="text" class="form-control" name="q6[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check terminal block condition</td>
                                                <td><input type="text" class="form-control" name="q7[]"></td>
                                                <td><input type="text" class="form-control" name="q7[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check vibration & noise</td>
                                                <td><input type="text" class="form-control" name="q8[]"></td>
                                                <td><input type="text" class="form-control" name="q8[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q8[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check current compressor</td>
                                                <td><input type="text" class="form-control" name="q9[]"></td>
                                                <td><input type="text" class="form-control" name="q9[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q9[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check filter dryer condition</td>
                                                <td><input type="text" class="form-control" name="q10[]"></td>
                                                <td><input type="text" class="form-control" name="q10[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean body compressor</td>
                                                <td><input type="text" class="form-control" name="q11[]"></td>
                                                <td><input type="text" class="form-control" name="q11[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check oil leak</td>
                                                <td><input type="text" class="form-control" name="q12[]"></td>
                                                <td><input type="text" class="form-control" name="q12[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check crankcase oil heater function</td>
                                                <td><input type="text" class="form-control" name="q13[]"></td>
                                                <td><input type="text" class="form-control" name="q13[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q13[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check solenoid valve function</td>
                                                <td><input type="text" class="form-control" name="q14[]"></td>
                                                <td><input type="text" class="form-control" name="q14[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean oil strainer</td>
                                                <td><input type="text" class="form-control" name="q15[]"></td>
                                                <td><input type="text" class="form-control" name="q15[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Replace oil compressor</td>
                                                <td><input type="text" class="form-control" name="q16[]"></td>
                                                <td><input type="text" class="form-control" name="q16[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q16[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Replace core / filter dryer </td>
                                                <td><input type="text" class="form-control" name="q17[]"></td>
                                                <td><input type="text" class="form-control" name="q17[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q17[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check condensor fin condition (corrosion & damage)</td>
                                                <td><input type="text" class="form-control" name="q18[]"></td>
                                                <td><input type="text" class="form-control" name="q18[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q18[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check pipe leakage</td>
                                                <td><input type="text" class="form-control" name="q19[]"></td>
                                                <td><input type="text" class="form-control" name="q19[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q19[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean condensor coil & Body</td>
                                                <td><input type="text" class="form-control" name="q20[]"></td>
                                                <td><input type="text" class="form-control" name="q20[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q20[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean panel control</td>
                                                <td><input type="text" class="form-control" name="q21[]"></td>
                                                <td><input type="text" class="form-control" name="q21[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q21[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check vibration & Noise</td>
                                                <td><input type="text" class="form-control" name="q22[]"></td>
                                                <td><input type="text" class="form-control" name="q22[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q22[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check blade imbalance</td>
                                                <td><input type="text" class="form-control" name="q23[]"></td>
                                                <td><input type="text" class="form-control" name="q23[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q23[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check part corrosion</td>
                                                <td><input type="text" class="form-control" name="q24[]"></td>
                                                <td><input type="text" class="form-control" name="q24[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q24[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean blade & body</td>
                                                <td><input type="text" class="form-control" name="q25[]"></td>
                                                <td><input type="text" class="form-control" name="q25[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q25[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check current fans</td>
                                                <td><input type="text" class="form-control" name="q26[]"></td>
                                                <td><input type="text" class="form-control" name="q26[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q26[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Replace bearing</td>
                                                <td><input type="text" class="form-control" name="q27[]"></td>
                                                <td><input type="text" class="form-control" name="q27[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q27[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check fin condition (corrosion & damage)</td>
                                                <td><input type="text" class="form-control" name="q28[]"></td>
                                                <td><input type="text" class="form-control" name="q28[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q28[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check pipe leakage</td>
                                                <td><input type="text" class="form-control" name="q29[]"></td>
                                                <td><input type="text" class="form-control" name="q29[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q29[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check TXV function</td>
                                                <td><input type="text" class="form-control" name="q30[]"></td>
                                                <td><input type="text" class="form-control" name="q30[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q30[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check defrost function</td>
                                                <td><input type="text" class="form-control" name="q31[]"></td>
                                                <td><input type="text" class="form-control" name="q31[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q31[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Clean evaporator coil & Body</td>
                                                <td><input type="text" class="form-control" name="q32[]"></td>
                                                <td><input type="text" class="form-control" name="q32[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q32[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check door heater function</td>
                                                <td><input type="text" class="form-control" name="q33[]"></td>
                                                <td><input type="text" class="form-control" name="q33[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q33[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check ventilation & infiltration</td>
                                                <td><input type="text" class="form-control" name="q34[]"></td>
                                                <td><input type="text" class="form-control" name="q34[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control" name="q34[]"></td>
                                            </tr>

                                    </tbody>
                                </table>
                                <button class="btn btn-info px-4 mt-3" type="submit">Submit form</button>
                            </form>
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
