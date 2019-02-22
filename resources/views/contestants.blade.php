@extends('layouts.app')
@push('meta')
<meta http-equiv="refresh" content="180">
@section('content')
<div class="container-fluid p-10">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->

        @if($user->code == 'collation')
        <div class=" text-center">
            <h1>{{ config('app.name') }} DASHBOARD COLLATION CENTER</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h1 bg-dark text-white">PRESIDENTIAL</div>
                    <div class="card-body">
                    @php
                        $presidentialChart = new App\Charts\ResultChart;
                        $presidentialChart->labels(['Muhammadu Buhari', 'Atiku Abubakar']);
                        $presidentialChart->dataset('Presidential Result', 'bar',[
                            $presidential['apc'],
                            $presidential['pdp']
                        ])->backgroundColor(['#6da252', '#00c0ef'])
                        ->fill(true);
                    @endphp
                    <div class="col md-12">
                        {!! $presidentialChart->container() !!}
                        {!! $presidentialChart->script() !!}
                    </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        Muhammadu Buhari <br>
                                        (APC)
                                    </th>
                                    <th>
                                        Atiku Abubakar <br>
                                        (PDP)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$presidential['apc'] == 0 ? 'Not Available' : $presidential['apc']}}</td>
                                    <td>{{$presidential['pdp'] == 0 ? 'Not Available' : $presidential['pdp']}}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h1 bg-dark text-white">SENATORIAL</div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($senatorial as  $key => $senate)
                                    <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4">
                                        <div class="card">
                                            <div class="card-header bg-secondary text-white">{{ ++$key  }} - {{$senate['name']}}</div>
                                            <div class="card-body">
                                                <div class="">
                                                        @php
                                                            $chart = new App\Charts\ResultChart;
                                                            $chart->labels([
                                                                'APC',
                                                                'PDP'
                                                            ]);
                                                            $chart->dataset('Senatorial Result', 'bar',[
                                                                $senate['result']['apc'],
                                                                $senate['result']['pdp'],
                                                            ])->backgroundColor(['#6da252', '#00c0ef'])
                                                            ->fill(true);
                                                        @endphp

                                                        {!! $chart->container() !!}
                                                        {!! $chart->script() !!}
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>{{ $senate['contestants']['apc'] }} <br>(APC)</th>
                                                            <th>{{ $senate['contestants']['pdp'] }} <br>(PDP)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$senate['result']['apc'] == 0 ? 'Not Available' : $senate['result']['apc']}}</td>
                                                            <td>{{$senate['result']['pdp'] == 0 ? 'Not Available' : $senate['result']['pdp']}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h1 bg-dark text-white">REPRESENTATIVE</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($representative as $key => $representative)
                            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-2">
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">
                                        {{ ++$key  }} - {{$representative['name']}}
                                    </div>
                                    <div class="card-body">
                                        @php
                                            $chart = new App\Charts\ResultChart;
                                            $chart->labels([
                                                'APC',
                                                'PDP'
                                            ]);
                                            $chart->dataset('Representative Result', 'bar',[
                                                $representative['result']['apc'],
                                                $representative['result']['pdp'],
                                            ])->backgroundColor(['#6da252', '#00c0ef'])
                                            ->fill(true);
                                        @endphp
                                        <div class="">
                                            {!! $chart->container() !!}
                                            {!! $chart->script() !!}
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        {{$representative['contestants']['apc']}}
                                                        <br>(APC)
                                                    </th>
                                                    <th>
                                                        {{$representative['contestants']['pdp']}}
                                                        <br>(PDP)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{$representative['result']['apc'] == 0 ? 'Not Available' : $representative['result']['apc']}}</td>
                                                    <td>{{$representative['result']['pdp'] == 0 ? 'Not Available' : $representative['result']['pdp']}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @elseif($user->lga_id != null)
        <div class=" text-center">
            <h1>{{$user->lga->name.' Local Government 2019 Election Report'}}</h1>
        </div>
        <div class="row justify-content-center">
            @if(session('message'))
                {{session('message')}}
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="300">Local Government Name</td>
                                <td>{{$user->lga->name}}</td>
                            </tr>
                            <tr>
                                <td>No Of Registered Votes</td>
                                <td>{{$register == 0 ? 'Not Available' : $register}}</td>
                            </tr>
                            <tr>
                                <td>No Of Wards</td>
                                <td>{{count($user->lga->wards)}}</td>
                            </tr>
                            <tr>
                                <td>No Of Polling Units</td>
                                <td>{{$pollingUnits}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h1 bg-dark text-white">{{'Summary'}}</div>
                    <div class="card-body">
                        <span class="h3">Presidential</span>
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Registered Votes</th>
                                    <th>Acredited</th>
                                    <th>APC</th>
                                    <th>PDP</th>
                                    <th>Others</th>
                                    <th>Valid Votes</th>
                                    <th>Invalid Votes</th>
                                    <th>Total Votes Cast</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$summary['registered'] == 0 ? 'Not Avalable' : $summary['registered']}}</td>

                                    <td>{{$summary['acredited'] == 0 ? 'Not Avalable' : $summary['acredited']}}</td>

                                    <td>{{$user->lga->result()['presidential']['apc'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['apc']}}</td>

                                    <td>{{$user->lga->result()['presidential']['pdp'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['pdp']}}</td>

                                    <td>{{$user->lga->result()['presidential']['other'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['other']}}</td>

                                    <td>{{$user->lga->result()['presidential']['apc']+$user->lga->result()['presidential']['pdp']+$user->lga->result()['presidential']['other'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['apc']+$user->lga->result()['presidential']['pdp']+$user->lga->result()['presidential']['other']}}</td>

                                    <td>{{$user->lga->result()['presidential']['invalid'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['invalid']}}</td>

                                    <td>{{$user->lga->result()['presidential']['invalid']+$user->lga->result()['presidential']['apc']+$user->lga->result()['presidential']['pdp']+$user->lga->result()['presidential']['other'] == 0 ? 'No Available' : $user->lga->result()['presidential']['invalid']+$user->lga->result()['presidential']['apc']+$user->lga->result()['presidential']['pdp']+$user->lga->result()['presidential']['other']}}</td>

                                </tr>


                            </tbody>
                        </table>
                        <span class="h3">Senatorial</span>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Registered Votes</th>
                                    <th>Acredited</th>
                                    <th>APC</th>
                                    <th>PDP</th>
                                    <th>Others</th>
                                    <th>Valid Votes</th>
                                    <th>Invalid Votes</th>
                                    <th>Total Votes Cast</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$summary['registered'] == 0 ? 'Not Avalable' : $summary['registered']}}</td>

                                    <td>{{$summary['acredited'] == 0 ? 'Not Avalable' : $summary['acredited']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['apc'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['apc']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['pdp'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['pdp']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['other'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['other']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['apc']+$user->lga->result()['senatorial']['pdp']+$user->lga->result()['senatorial']['other'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['apc']+$user->lga->result()['senatorial']['pdp']+$user->lga->result()['senatorial']['other']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['invalid'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['invalid']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['invalid']+$user->lga->result()['senatorial']['apc']+$user->lga->result()['senatorial']['pdp']+$user->lga->result()['senatorial']['other'] == 0 ? 'No Available' : $user->lga->result()['senatorial']['invalid']+$user->lga->result()['senatorial']['apc']+$user->lga->result()['senatorial']['pdp']+$user->lga->result()['senatorial']['other']}}</td>
                                </tr>


                            </tbody>
                        </table>
                        <span class="h3">Representative</span>
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Registered Votes</th>
                                    <th>Acredited</th>
                                    <th>APC</th>
                                    <th>PDP</th>
                                    <th>Others</th>
                                    <th>Valid Votes</th>
                                    <th>Invalid Votes</th>
                                    <th>Total Votes Cast</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$summary['registered'] == 0 ? 'Not Avalable' : $summary['registered']}}</td>

                                    <td>{{$summary['acredited'] == 0 ? 'Not Avalable' : $summary['acredited']}}</td>

                                    <td>{{$user->lga->result()['representative']['apc'] == 0 ? 'Not Available' : $user->lga->result()['representative']['apc']}}</td>

                                    <td>{{$user->lga->result()['representative']['pdp'] == 0 ? 'Not Available' : $user->lga->result()['representative']['pdp']}}</td>

                                    <td>{{$user->lga->result()['representative']['other'] == 0 ? 'Not Available' : $user->lga->result()['representative']['other']}}</td>

                                    <td>{{$user->lga->result()['representative']['apc']+$user->lga->result()['representative']['pdp']+$user->lga->result()['representative']['other'] == 0 ? 'Not Available' : $user->lga->result()['representative']['apc']+$user->lga->result()['representative']['pdp']+$user->lga->result()['representative']['other']}}</td>

                                    <td>{{$user->lga->result()['representative']['invalid'] == 0 ? 'Not Available' : $user->lga->result()['representative']['invalid']}}</td>

                                    <td>{{$user->lga->result()['representative']['invalid']+$user->lga->result()['representative']['apc']+$user->lga->result()['representative']['pdp']+$user->lga->result()['representative']['other'] == 0 ? 'No Available' : $user->lga->result()['representative']['invalid']+$user->lga->result()['representative']['apc']+$user->lga->result()['representative']['pdp']+$user->lga->result()['representative']['other']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @foreach($user->lga->wards as $ward)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header h3 bg-dark text-white">{{$ward->name.' Ward'}} ({{count($ward->pollingUnits)}} POLLING UNITS )</div>
                        <div class="card-body">
                            <div class="row">
                            @foreach($ward->pollingUnits as $key => $pollingUnit)
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header h3 bg-secondary text-white"> {{ ++$key }} - {{$pollingUnit->name}}</div>
                                        <div class="card-body">
                                            @foreach($pollingUnit->results as $result)
                                            @if($result->type_id == 1)
                                            <span class="h3">Presidential</span>
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Registered Votes</th>
                                                        <th>Accredited</th>
                                                        <th>APC</th>
                                                        <th>PDP</th>
                                                        <th>Others</th>
                                                        <th>Valid Votes</th>
                                                        <th>Invalid Votes</th>
                                                        <th>Total Votes Cast</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$pollingUnit->registered == 0 ? 'Not Available' : $pollingUnit->registered}}</td>
                                                        <td>{{$pollingUnit->acredited == 0 ? 'Not Available' : $pollingUnit->acredited}}</td>
                                                        <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                                        <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                                        <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                                        <td>{{$result->valid_vote == 0 ? 'Not Available' : $result->valid_vote}}</td>
                                                        <td>{{$result->invalid_vote == 0 ? 'Not Available' : $result->invalid_vote}}</td>
                                                        <td>{{$result->valid_vote + $result->invalid_vote == 0 ? 'Not Available' : $result->valid_vote + $result->invalid_vote}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @elseif($result->type_id == 2)
                                            <span class="h3">Senatorial</span>
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Registered Votes</th>
                                                        <th>Accredited</th>
                                                        <th>APC</th>
                                                        <th>PDP</th>
                                                        <th>Others</th>
                                                        <th>Valid</th>
                                                        <th>Invalid</th>
                                                        <th>Total Votes Cast</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$pollingUnit->registered == 0 ? 'Not Available' : $pollingUnit->registered}}</td>
                                                        <td>{{$pollingUnit->acredited == 0 ? 'Not Available' : $pollingUnit->acredited}}</td>
                                                        <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                                        <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                                        <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                                        <td>{{$result->valid_vote == 0 ? 'Not Available' : $result->valid_vote}}</td>
                                                        <td>{{$result->invalid_vote == 0 ? 'Not Available' : $result->invalid_vote}}</td>
                                                        <td>{{$result->valid_vote + $result->invalid_vote == 0 ? 'Not Available' : $result->valid_vote + $result->invalid_vote}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @else
                                            <span class="h3">Representative</span>
                                            <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Registered Votes</th>
                                                        <th>Accredited</th>
                                                        <th>APC</th>
                                                        <th>PDP</th>
                                                        <th>Others</th>
                                                        <th>Valid</th>
                                                        <th>Invalid</th>
                                                        <th>Total Votes Cast</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$pollingUnit->registered == 0 ? 'Not Available' : $pollingUnit->registered}}</td>
                                                        <td>{{$pollingUnit->acredited == 0 ? 'Not Available' : $pollingUnit->acredited}}</td>
                                                        <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                                        <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                                        <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                                        <td>{{$result->valid_vote == 0 ? 'Not Available' : $result->valid_vote}}</td>
                                                        <td>{{$result->invalid_vote == 0 ? 'Not Available' : $result->invalid_vote}}</td>
                                                        <td>{{$result->valid_vote + $result->invalid_vote == 0 ? 'Not Available' : $result->valid_vote + $result->invalid_vote}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @endif
                                            @endforeach
                                            <form action="{{ route('new.result') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$pollingUnit->id}}">
                                                <input type="submit" class="btn btn-primary" value="Insert Result" >
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        @else
        <div class="row justify-content-center">
            <div class="alert alert-success h4" >{{$user->pollingUnit->name.' APC AGENT'}}</div>
            @if($user->pollingUnit->registered == 0)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3" style="background-color: seagreen; color: white;">How many Voters Registered</div>
                    <div class="card-body">
                        <form action="/accredited" method="post">
                            @csrf
                            <input class="form-control" type="text" name="registered" placeholder="number of registered voters"><br>
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            @elseif($user->pollingUnit->acredited == 0)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3"style="background-color: seagreen; color: white;">How many Voters are accredated</div>
                    <div class="card-body">
                        <form action="/accredited" method="post">
                            @csrf
                            <input class="form-control" type="text" name="acredited" placeholder="number of accredated voters"><br>
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            @include('incidence')
           @elseif($submitted == false)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3" style="background-color: seagreen; color: white;">SEND RESULT</div>

                    <div class="card-body">
                        <form action="/result" method="post">
                            @csrf
                            <fieldset>
                                <legend style="color: seagreen">PRESIDENTIAL ELECTION RESULT</legend>
                                <input class="form-control" type="text" name="presidential_apc" placeholder="APC"><br>
                                <input class="form-control" type="text" name="presidential_pdp" placeholder="PDP"><br>
                                <input class="form-control" type="text" name="presidential_other" placeholder="OTHER"><br>
                                <input class="form-control" type="text" name="presidential_invalid_vote" placeholder="INVALID VOTE">
                            </fieldset>
                            <fieldset>
                                <legend style="color: seagreen">SENATORIAL ELECTION RESULT</legend>
                                <input class="form-control" type="text" name="senatorial_apc" placeholder="APC"><br>
                                <input class="form-control" type="text" name="senatorial_pdp" placeholder="PDP"><br>
                                <input class="form-control" type="text" name="senatorial_other" placeholder="OTHER"><br>
                                <input class="form-control" type="text" name="senatorial_invalid_vote" placeholder="INVALID VOTE">
                            </fieldset>
                            <fieldset>
                                <legend style="color: seagreen">REPRESENTATIVE ELECTION RESULT</legend>
                                <input class="form-control" type="text" name="representative_apc" placeholder="APC"><br>
                                <input class="form-control" type="text" name="representative_pdp" placeholder="PDP"><br>
                                <input class="form-control" type="text" name="representative_other" placeholder="OTHER"><br>
                                <input class="form-control" type="text" name="representative_invalid_vote" placeholder="INVALID VOTE">
                            </fieldset>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            @include('incidence')
            @else
                <div class="alert alert-success h4" >{{'Thanks for using our Application in 2019 '}}</div>
            @endif
        </div>
        @endif
</div>
<script>

</script>
@endsection
