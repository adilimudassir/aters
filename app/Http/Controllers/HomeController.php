<?php

namespace App\Http\Controllers;

use App\Lga;
use App\Ward;
use App\Result;
use App\Incidence;
use App\PollingUnit;
use Illuminate\Http\Request;
use App\Services\Collation\Senatorial;
use App\Services\Collation\Presidential;
use App\Http\Requests\ElectionFormRequest;
use App\Services\Collation\Representative;
use App\Http\Requests\ElectionResultFormRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function localSummary()
    {
        if (auth()->User()->lga_id != null) {
            $acredited = 0;
            $registered = 0;
            $pdp = 0;
            $apc = 0;
            $valid_vote = 0;
            $invalid_vote = 0;
            $other = 0;
            foreach (auth()->User()->lga->wards as $ward) {
                foreach ($ward->pollingUnits as $pollingUnit) {
                    $acredited = $acredited + $pollingUnit->acredited;
                    $registered = $registered + $pollingUnit->registered;
                }
            }
            return [
                'registered' => $registered,
                'acredited' => $acredited,
                'pdp' => $pdp,
                'apc' => $apc,
                'valid_vote' => $valid_vote,
                'invalid_vote' => $invalid_vote,
                'other' => $other
            ];
        } else {
            return [];
        }
    }

    public function index()
    {
        if (auth()->user()->code == 'collation') {
            $representative = new Representative();

            $senatorial = new Senatorial();
            $presidential = new Presidential();
            return view('home', [
                'representative' => $representative->result,
                'presidential' => $presidential->result,
                'senatorial' => $senatorial->result,
                'user' => auth()->User()
            ]);
        } else {
            $submitted = true;
            if (auth()->user()->lga_id == null) {
                $pollingUnits = null;
                $registered = null;
                foreach (auth()->user()->pollingUnit->results as $result) {
                    if ($result->apc == 0) {
                        $submitted = false;
                    }
                }
            } else {
                $unit = 0;
                $register = 0;
                foreach (auth()->user()->lga->wards as $ward) {
                    $unit = $unit + count($ward->pollingUnits);
                    foreach ($ward->pollingUnits as $pollingUnit) {
                        $register = $register + $pollingUnit->registered;
                    }
                }
                $pollingUnits = $unit;
                $registered = $register;
            }
            return view('home', [
                'submitted' => $submitted,
                'register' => $registered,
                'pollingUnits' => $pollingUnits,
                'user' => auth()->User(),
                'summary' => $this->localSummary()
            ]);
        }
    }

    public function contestants()
    {
        if (auth()->user()->code == 'collation') {
            $representative = new Representative();

            $senatorial = new Senatorial();
            $presidential = new Presidential();
            return view('contestants', [
                'representative' => $representative->result,
                'presidential' => $presidential->result,
                'senatorial' => $senatorial->result,
                'user' => auth()->User()
            ]);
        } else {
            $submitted = true;
            if (auth()->user()->lga_id == null) {
                $pollingUnits = null;
                $registered = null;
                foreach (auth()->user()->pollingUnit->results as $result) {
                    if ($result->apc == 0) {
                        $submitted = false;
                    }
                }
            } else {
                $unit = 0;
                $register = 0;
                foreach (auth()->user()->lga->wards as $ward) {
                    $unit = $unit + count($ward->pollingUnits);
                    foreach ($ward->pollingUnits as $pollingUnit) {
                        $register = $register + $pollingUnit->registered;
                    }
                }
                $pollingUnits = $unit;
                $registered = $register;
            }
            return view('home', [
                'submitted' => $submitted,
                'register' => $registered,
                'pollingUnits' => $pollingUnits,
                'user' => auth()->User(),
                'summary' => $this->localSummary()
            ]);
        }
    }

    public function accredited(ElectionFormRequest $request)
    {
        if (isset($request->registered)) {
            Auth()
                ->User()
                ->pollingUnit->update(['registered' => $request->registered]);
        } else {
            Auth()
                ->User()
                ->pollingUnit->update(['acredited' => $request->acredited]);
        }

        session()->flash('message', 'Acredited voters was sent successfully');
        return redirect('/');
    }

    public function result(ElectionResultFormRequest $request)
    {
        if (isset($request->id)) {
            $pollingUnit = PollingUnit::find($request->id);

            $pollingUnit->update([
                'acredited' => $request->acredited ?? 0,
                'registered' => $request->registered ?? 0
            ]);
        } else {
            $pollingUnit = auth()->User()->pollingUnit;
        }
        $presidential_result = Result::where(
            'polling_unit_id',
            $pollingUnit->id
        )->where('type_id', 1);

        $senatorial_result = Result::where(
            'polling_unit_id',
            $pollingUnit->id
        )->where('type_id', 2);

        $representative_result = Result::where(
            'polling_unit_id',
            $pollingUnit->id
        )->where('type_id', 3);

        $presidential_result->update([
            'pdp' => $request->presidential_pdp,
            'apc' => $request->presidential_apc,
            'other' => $request->presidential_other,
            'valid_vote' =>
                $request->presidential_apc +
                    $request->presidential_pdp +
                    $request->presidential_other,
            'invalid_vote' => $request->presidential_invalid_vote
        ]);
        $senatorial_result->update([
            'pdp' => $request->senatorial_pdp,
            'apc' => $request->senatorial_apc,
            'other' => $request->senatorial_other,
            'valid_vote' =>
                $request->senatorial_pdp +
                    $request->senatorial_apc +
                    $request->senatorial_other,
            'invalid_vote' => $request->senatorial_invalid_vote
        ]);
        $representative_result->update([
            'pdp' => $request->representative_pdp,
            'apc' => $request->representative_apc,
            'other' => $request->representative_other,
            'valid_vote' =>
                $request->representative_pdp +
                    $request->representative_other +
                    $request->representative_other,
            'invalid_vote' => $request->representative_invalid_vote
        ]);
        session()->flash('message', 'Election result was sent successfully');
        return redirect('/');
    }

    public function newResult(Request $request)
    {
        $pollingUnit = PollingUnit::find($request->id);

        $presidential_result = Result::where(
            'polling_unit_id',
            $pollingUnit->id
        )
            ->where('type_id', 1)
            ->first();

        $senatorial_result = Result::where('polling_unit_id', $pollingUnit->id)
            ->where('type_id', 2)
            ->first();

        $representative_result = Result::where(
            'polling_unit_id',
            $pollingUnit->id
        )
            ->where('type_id', 3)
            ->first();

        return view('new_result', [
            'id' => $request->id,
            'presidential' => $presidential_result,
            'senatorial' => $senatorial_result,
            'representative' => $representative_result
        ]);
    }
    public function incidence(Request $request, Incidence $incidence)
    {
        $new_incidence = $incidence->firstOrCreate([
            'name' => $request->incidence
        ]);
        $poll = $new_incidence
            ->pollingUnitIncidence()
            ->create([
                'polling_unit_id' => auth()->User()->polling_unit_id,
                'incidence_id' => $new_incidence->id
            ]);
        session()->flash('message', 'The was sent successfully');
        return redirect('/');
    }
}
