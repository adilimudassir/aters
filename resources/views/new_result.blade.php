@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin:20px">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header h3">Submit Result</div>

                <div class="card-body">
                    <form action="/result" method="post" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                        <fieldset>
                            <legend>POLLING UNIT INFORMATION</legend>
                            <div class="form-group">
                                <label for="usr">Registered Votes:</label>
                                <input class="form-control" type="number" value="0" name="registered" placeholder="REGISTERED VOTES">
                            </div>

                            <div class="form-group">
                                <label for="Acredited">Acredited Votes</label>
                                <input class="form-control" type="number" value="0" name="acredited" placeholder="ACREDITED VOTES">
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>PRESIDENTIAL ELECTION RESULT</legend>
                            <div class="form-group">
                                <label for="APC">APC</label>
                                <input class="form-control" type="number" value="{{$presidential['apc']}}" name="presidential_apc" placeholder="APC">
                            </div>
                            <div class="form-group">
                                <label for="PDP">PDP</label>
                                <input class="form-control" type="number" value="{{$presidential['pdp']}}"  name="presidential_pdp" placeholder="PDP">
                            </div>
                            <div class="form-group">
                                <label for="OTHER">OTHER</label>
                                <input class="form-control" type="number" value="{{$presidential['other']}}"  name="presidential_other" placeholder="OTHER">
                            </div>
                            <div class="form-group">
                                <label for="presidential_invalid_vote">Invalid Vote</label>
                                <input class="form-control" type="number" value="{{$presidential['invalid_vote']}}"  name="presidential_invalid_vote" placeholder="INVALID VOTE">
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>SENATORIAL ELECTION RESULT</legend>
                            <div class="form-group">
                                <label for="APC">APC</label>
                                <input class="form-control" type="number" value="{{$senatorial['apc']}}"  name="senatorial_apc" placeholder="APC">
                            </div>
                            <div class="form-group">
                                <label for="PDP">PDP</label>
                                <input class="form-control" type="number" value="{{$senatorial['pdp']}}" name="senatorial_pdp" placeholder="PDP">
                            </div>
                            <div class="form-group">
                                <label for="OTHER">OTHER</label>
                                <input class="form-control" type="number" value="{{$senatorial['other']}}" name="senatorial_other" placeholder="OTHER">
                            </div>
                            <div class="form-group">
                                <label for="Invalid Votes">Invalid Votes</label>
                                <input class="form-control" type="number" value="{{$senatorial['invalid_vote']}}" name="senatorial_invalid_vote" placeholder="INVALID VOTE">
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>REPRESENTATIVE ELECTION RESULT</legend>
                            <div class="form-group">
                                <label for="APC">APC</label>
                                <input class="form-control" type="number" value="{{$representative['apc']}}" name="representative_apc" placeholder="APC">
                            </div>
                            <div class="form-group">
                                <label for="PDP">PDP</label>
                                <input class="form-control" type="number" value="{{$representative['pdp']}}" name="representative_pdp" placeholder="PDP">
                            </div>
                            <div class="form-group">
                                <label for="OTHER">OTHER</label>
                                <input class="form-control" type="number" value="{{$representative['other']}}" name="representative_other" placeholder="OTHER">
                            </div>
                            <div class="form-group">
                                <label for="Invalid Votes">Invalid Votes</label>
                                <input class="form-control" type="number" value="{{$representative['invalid_vote']}}" name="representative_invalid_vote" placeholder="INVALID VOTE">
                            </div>
                        </fieldset>
                        <div style="margin:10px">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        <a class="btn btn-primary" href="/home">Go Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
