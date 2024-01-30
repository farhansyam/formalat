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
                            <h4 class="card-title mb-0 text-center">Task List Evaporator Air Cooler</h4>
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
                                    @for ($i = 1; $i <= 23; $i++)
                                        @php
                                            $pertanyaanTexts = [
                                                'INTENSIVE SAFETY BRIEFING TEAM',
                                                'Check Condition Filler',
                                                'Cleainng Filler',
                                                'Replace Filler',
                                                'Check Basin Condition',
                                                'Backwash Water From basin',
                                                'Cleaning Basin',
                                                'Check Water Pump',
                                                'Cleaning Filter Water Pump',
                                                'Check Water Level Switch',
                                                'Check Floating Valve',
                                                'Check Water Quality',
                                                'Check Water Line Distribution',
                                                'Check Support Bracket Fan',
                                                'Check Fan Blade Motor Supply',
                                                'Cleaning Fan Motor',
                                                'Check Temperature Motor',
                                                'Check Insulation Motor',
                                                'Check Ampere',
                                                'Check Display HMI',
                                                'Check Output Air Temperature',
                                                'Check Output Air Flow',
                                                'Checklist History PM'
                                            ]; 
                                        @endphp

                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>{{ $pertanyaanTexts[$i - 1] ?? '' }}</td>
                                            <td><input type="text" class="form-control" name="Frequency[]"></td>
                                            
                                            @if($i == 1)
                                                <td class="text-center">OK</td>
                                            @else
                                                <td></td>
                                            @endif
                                            
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
