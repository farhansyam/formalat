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
                            <form action="{{ route('cooling-unit.store') }}" method="POST">
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
                                             
                                        <div class="border-bottom title-part-padding text-bold">
                                            <h5 class="card-title mb-0 text-center">AC PANEL</h5>
                                        </div>

                                    <input type="hidden" name="id_equipment" value="{{ $equipmentId }}">
                                            <tr>
                                      
                                                <td>Cleaning Condensor</td>
                                                <td><input type="text" class="form-control text-center" name="q1[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q1[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q1[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Evaporator</td>
                                                <td><input type="text" class="form-control text-center" name="q2[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q2[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q2[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Fan Condensor</td>
                                                <td><input type="text" class="form-control text-center" name="q3[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q3[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q3[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Fan Evaporator	</td>
                                                <td><input type="text" class="form-control text-center" name="q4[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q4[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q4[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Body Compressor</td>
                                                <td><input type="text" class="form-control text-center" name="q5[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q5[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q5[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Cleaning Bak Drain</td>
                                                <td><input type="text" class="form-control text-center" name="q6[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q6[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q6[]"></td>
                                            </tr>
                                            
                                            <tr>
                                             
                                                <td>Flushing Selang Drain</td>
                                                <td><input type="text" class="form-control text-center" name="q7[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q7[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q7[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Check Ampere Kompressor</td>
                                                <td><input type="text" class="form-control text-center" name="q8[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q8[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q8[]"></td>
                                            </tr>

                                            <tr> 
                                                <td>Check Pressure Freon</td>
                                                <td><input type="text" class="form-control text-center" name="q9[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q9[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q9[]"></td>
                                            </tr>
                                        </tbody>
                                </table>
                                <table class="table table-bordered" id="personelTeamTable">
                                            <tbody>
                                            <div class="border-bottom title-part-padding">
                                                <h5 class="card-title mb-0 text-center">Cooling Unit</h5>
                                            </div>
                                            <tr>
                                             
                                                <td>Cleaning Condensor</td>
                                                <td><input type="text" class="form-control text-center" name="q10[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q10[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q10[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning area dalam Cooling</td>
                                                <td><input type="text" class="form-control text-center" name="q11[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q11[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q11[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning Filter</td>
                                                <td><input type="text" class="form-control text-center" name="q12[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q12[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q12[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Water Level</td>
                                                <td><input type="text" class="form-control text-center" name="q13[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q13[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q13[]"></td>
                                            </tr>

                                            <tr>
                                                <td>Cek Kebocoran</td>
                                                <td><input type="text" class="form-control text-center" name="q14[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q14[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q14[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Amper kompressor</td>
                                                <td><input type="text" class="form-control text-center" name="q15[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q15[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Amper Fan</td>
                                                <td><input type="text" class="form-control text-center" name="q16[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q16[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q15[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek Pressure Freon</td>
                                                <td><input type="text" class="form-control text-center" name="q17[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q17[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q17[]"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered" id="personelTeamTable">
                                        <tbody>
                                            <div class="border-bottom title-part-padding">
                                                <h5 class="card-title mb-0 text-center">Cooling Granitur</h5>
                                            </div>
                                            <tr>
                                             
                                                <td> Cleaning Body Unit </td>
                                                <td><input type="text" class="form-control text-center" name="q18[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q18[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q18[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cleaning Fan</td>
                                                <td><input type="text" class="form-control text-center" name="q19[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q19[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q19[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td> Cek Water Level </td>
                                                <td><input type="text" class="form-control text-center" name="q20[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q20[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q20[]"></td>
                                            </tr>

                                            <tr>
                                             
                                                <td>Cek sirkulasi air cooling</td>
                                                <td><input type="text" class="form-control text-center" name="q21[]"></td>
                                                <td><input type="text" class="form-control text-center" name="q21[]" value=""></td>
                                                <td class="text-center"><input type="text" class="form-control text-center" name="q21[]"></td>
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
