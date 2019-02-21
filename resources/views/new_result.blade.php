@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin:20px">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header h3">Submit Result</div>

                <div class="card-body">
                    <form action="{{ route('result')  }}" method="POST" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                        <fieldset>
                            <legend>POLLING UNIT INFORMATION</legend>
                           <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="usr">Registered Votes:</label>
                                    <input class="form-control" type="number" min="0" max="900" value="0" name="registered"
                                        placeholder="REGISTERED VOTES">
                                </div>
                            </div>
                            {{-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Acredited">Acredited Votes</label>
                                    <input class="form-control" disabled type="number" min="0" max="900" value="0" name="acredited"
                                        placeholder="ACREDITED VOTES">
                                </div>
                            </div> --}}
                           </div>
                        </fieldset>
                        <fieldset>
                            <legend>PRESIDENTIAL ELECTION RESULT</legend>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="APC">APC</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$presidential['apc']}}"
                                            name="presidential_apc" placeholder="APC">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="PDP">PDP</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$presidential['pdp']}}"
                                            name="presidential_pdp" placeholder="PDP">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="OTHER">OTHER</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$presidential['other']}}"
                                            name="presidential_other" placeholder="OTHER">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="presidential_invalid_vote">Invalid Vote</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$presidential['invalid_vote']}}"
                                            name="presidential_invalid_vote" placeholder="INVALID VOTE">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>SENATORIAL ELECTION RESULT</legend>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="APC">APC</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$senatorial['apc']}}"
                                            name="senatorial_apc" placeholder="APC">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="PDP">PDP</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$senatorial['pdp']}}"
                                            name="senatorial_pdp" placeholder="PDP">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                    <label for="OTHER">OTHER</label>
                                    <input class="form-control" type="number" min="0" max="900" value="{{$senatorial['other']}}" name="senatorial_other" placeholder="OTHER">
                                </div>
                                </div>
                                <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Invalid Votes">Invalid Votes</label>
                                    <input class="form-control" type="number" min="0" max="900" value="{{$senatorial['invalid_vote']}}"
                                        name="senatorial_invalid_vote" placeholder="INVALID VOTE">
                                </div>
                            </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>REPRESENTATIVE ELECTION RESULT</legend>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="APC">APC</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$representative['apc']}}"
                                            name="representative_apc" placeholder="APC">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="PDP">PDP</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$representative['pdp']}}"
                                            name="representative_pdp" placeholder="PDP">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="OTHER">OTHER</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$representative['other']}}"
                                            name="representative_other" placeholder="OTHER">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="Invalid Votes">Invalid Votes</label>
                                        <input class="form-control" type="number" min="0" max="900" value="{{$representative['invalid_vote']}}"
                                            name="representative_invalid_vote" placeholder="INVALID VOTE">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div style="margin:10px">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a class="btn btn-primary" href="/">Go Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
