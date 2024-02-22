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
                            <form action="{{ route('mini-chiller.store') }}" method="POST">
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
                                        <td>Losgsheet Parameter Unit</td>
                                        <td><input type="text" class="form-control text-center" name="q1[]"></td>
                                        <!-- Kolom "Standard Condition" dengan input yang tidak bisa diubah -->
                                        <td><input type="text"  class="form-control text-center text-center" name="q1[]"  value="OK" readonly></td>
                                        <td class="text-center"><input type="text" class="form-control text-center" name="q1[]"></td>
                                    </tr>
                                    
                                            
                                            <tr>
                                             
                                                <td>Inspect Condition Condensor coil</td>
                                                
                                                <td><input type="text" class="form-control text-center" name="q2[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q2[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Cleaning Condensor coil</td>
                                                <td><input type="text" class="form-control text-center" name="q3[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q3[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Cleaning Fan Condensor</td>
                                                <td><input type="text" class="form-control text-center" name="q4[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q4[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td> Cleaning Component Unit</td>
                                                <td><input type="text" class="form-control text-center" name="q5[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q5[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Strainer</td>
                                                <td><input type="text" class="form-control text-center" name="q6[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q6[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Check Physical Condition Unit</td>
                                                <td><input type="text" class="form-control text-center" name="q7[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q7[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Check Part Fungction
                                                    ( Compressor , TXV, Sensor, etc. )"</td>
                                                <td><input type="text" class="form-control text-center" name="q8[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q8[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q8[]"></td>
                                            </tr>

                                            <tr> 
                                                <td>Check Pressure Water in & Out</td>
                                                <td><input type="text" class="form-control text-center" name="q9[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q9[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q9[]"></td>
                                            </tr>
    
                                            <tr>
                                             
                                                <td>Check Temperatur EWT & LWT</td>
                                                <td><input type="text" class="form-control text-center" name="q10[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q10[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Actual Pressure Refrigerant</td>
                                                <td><input type="text" class="form-control text-center" name="q11[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q11[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Motorize Valve Water</td>
                                                <td><input type="text" class="form-control text-center" name="q12[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q12[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Syncronize All Program Match With BMS</td>
                                                <td><input type="text" class="form-control text-center" name="q13[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q13[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q13[]"></td>
                                            </tr>

                                            <tr>
                                                <td>Inspection Piping Chillwater</td>
                                                <td><input type="text" class="form-control text-center" name="q14[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q14[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Inspection Piping Refrigeration</td>
                                                <td><input type="text" class="form-control text-center" name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q15[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Checklist History PM</td>
                                                <td><input type="text" class="form-control text-center" name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q16[]" value="OK" readonly></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q16[]"></td>
                                            </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered" id="personelTeamTable">
                                    <div class="border-bottom title-part-padding">
                                        <h4 class="card-title mb-0 text-center">Service Check</h4>
                                    </div>

                                    <thead>
                                        <tr>
                                            <th class="text-center">Description</th>
                                            <th></th>
                                            <th class="text-center">Uom</th>
                                            <th class="text-center">Standar</th>
                                            <th class="text-center">Measurement</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax">Before</td> 
                                            <td class="tg-0lax">After</td> 
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">EWT</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q17[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q17[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q17[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q17[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">LWT</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q18[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q18[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q18[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q18[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Setpoint</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q19[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q19[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q19[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q19[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Load</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q20[]" value="%" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q20[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q20[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q20[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">EXV Level</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q21[]" value="%" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q21[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q21[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q21[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Suction Press A</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q22[]" value="kPa" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q22[]" value="600-750" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q22[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q22[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Discharge Press A</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q23[]" value="kPa" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q23[]" value="2400-3200" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q23[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q23[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Suction Press B<Btn></Btn></td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q24[]" value="kPa" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q24[]" value="600-750" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q24[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q24[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Discharge press B</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q25[]" value="kPa" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q25[]" value="2400-3200" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q25[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q25[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat.Suction Temp A</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q26[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q26[]" value="0-5" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q26[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q26[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat.Suction Temp B</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q27[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q27[]" value="0-5" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q27[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q27[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Oil Level A</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q28[]" value="%" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q28[]" value="50-75" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q28[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q28[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Oil Level B</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q29[]" value="%" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q29[]" value="50-75" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q29[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q29[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center py-5">Voltage</td>
                                            <td><input type="text" class="form-control text-center" name="q30[]" value="L1-L2" readonly>
                                                <input type="text" class="form-control text-center" name="q30[]" value="L2-L3" readonly>
                                                <input type="text" class="form-control text-center" name="q30[]" value="L3-L1" readonly>
                                            </td>
                                            <td><input type="text" class="form-control text-center" name="q30[]" value="V" readonly>
                                                <input type="text" class="form-control text-center" name="q30[]" value="V" readonly>
                                                <input type="text" class="form-control text-center" name="q30[]" value="V" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="q30[]"value="380" readonly>
                                                <input type="text" class="form-control text-center" name="q30[]"value="380" readonly>
                                                <input type="text" class="form-control text-center" name="q30[]"value="380" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="q30[]">
                                                <input type="text" class="form-control text-center" name="q30[]">
                                                <input type="text" class="form-control text-center" name="q30[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="q30[]">
                                                <input type="text" class="form-control text-center" name="q30[]">
                                                <input type="text" class="form-control text-center" name="q30[]">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center py-5">Ampere</td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="q31[]" value="A1" readonly>
                                                <input type="text" class="form-control text-center" name="q31[]" value="A2" readonly>
                                                <input type="text" class="form-control text-center" name="q31[]" value="B1" readonly>
                                                <input type="text" class="form-control text-center" name="q31[]" value="B2" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="q31[]" value="Amp" readonly>
                                                <input type="text" class="form-control text-center" name="q31[]" value="Amp" readonly>
                                                <input type="text" class="form-control text-center" name="q31[]" value="Amp" readonly>
                                                <input type="text" class="form-control text-center" name="q31[]" value="Amp" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="q31[]">
                                                <input type="text" class="form-control text-center" name="q31[]">
                                                <input type="text" class="form-control text-center" name="q31[]">
                                                <input type="text" class="form-control text-center" name="q31[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="q31[]">
                                                <input type="text" class="form-control text-center" name="q31[]">
                                                <input type="text" class="form-control text-center" name="q31[]">
                                                <input type="text" class="form-control text-center" name="q31[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="q31[]">
                                                <input type="text" class="form-control text-center" name="q31[]">
                                                <input type="text" class="form-control text-center" name="q31[]">
                                                <input type="text" class="form-control text-center" name="q31[]">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Ambient Temp</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q32[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q32[]" value="max 35" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q32[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q32[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Outlet Air Temp</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q33[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q33[]" value="max 40" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q33[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q33[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat. Cond Temp A</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q34[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q34[]" value="max 45" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q34[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q34[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Sat. Cond Temp B</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q35[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q35[]" value="max 45" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q35[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q35[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Air Flow</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q36[]" value="m/s" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q36[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q36[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q36[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Ampere Fan 1</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q37[]" value="Amp" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q37[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q37[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q37[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Ampere Fan 2</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q38[]" value="Amp" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q38[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q38[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q38[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Press In</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q39[]" value="Bar" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q39[]" value="3" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q39[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q39[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Press Out</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q40[]" value="Bar" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q40[]" value="2" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q40[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q40[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Temp In</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q41[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q41[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q41[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q41[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">CHW Temp Out</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q42[]" value="°C" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q42[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q42[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q42[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Flow Switch Status</td>
                                            <td class="text-center"></td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="q43[]" value="ON = " readonly>
                                                <input type="text" class="form-control text-center" name="q43[]" value="OFF = " readonly>
                                            </td>
                                            <td class="text-center">
                                                <input type="text" class="form-control text-center" name="q43[]" value="Close"readonly>
                                                <input type="text" class="form-control text-center" name="q43[]" value="Open"readonly>
                                            </td>
                                            <td><input type="text" class="form-control text-center" name="q43[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q43[]"></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">Flow Rate</td>
                                            <td class="text-center"></td>
                                            <td><input type="text" class="form-control text-center" name="q44[]" value="Gpm" readonly></td>
                                            <td class="text-center"><input type="text" class="form-control text-center" name="q44[]" value="30-177" readonly></td>
                                            <td><input type="text" class="form-control text-center" name="q44[]"></td>
                                            <td><input type="text" class="form-control text-center" name="q44[]"></td>
                                        </tr>
                                    </tbody>
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
