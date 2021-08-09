<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use App\Models\Covid;

class CovidController extends Controller
{
    public function getDetailsAPI() {
        $response = Http::get('https://hpb.health.gov.lk/api/get-current-statistical');
        $dataObj = $response['data'];
        
        $dataObjNew['update_date_time'] = $dataObj['update_date_time'];
        $dataObjNew['local_new_cases'] = $dataObj['local_new_cases'];
        $dataObjNew['local_total_number_of_individuals_in_hospitals'] = $dataObj['local_total_number_of_individuals_in_hospitals'];
        $dataObjNew['local_deaths'] = $dataObj['local_deaths'];
        $dataObjNew['local_new_deaths'] = $dataObj['local_new_deaths'];
        $dataObjNew['local_recovered'] = $dataObj['local_recovered'];
        $dataObjNew['local_active_cases'] = $dataObj['local_active_cases'];
        $dataObjNew['global_new_cases'] = $dataObj['global_new_cases'];
        $dataObjNew['global_total_cases'] = $dataObj['global_total_cases'];
        $dataObjNew['global_deaths'] = $dataObj['global_deaths'];
        $dataObjNew['global_new_deaths'] = $dataObj['global_new_deaths'];
        $dataObjNew['global_recovered'] = $dataObj['global_recovered'];
        $dataObjNew['total_pcr_testing_count'] = $dataObj['total_pcr_testing_count'];
        $dataObjNew['today_pcr_testing_count'] = $dataObj['daily_pcr_testing_data'][0]; //Get today PCR count only since charts are not required.
        
        $dataToSave = json_encode($dataObjNew); 
        
        $data = new Covid();
        $data->data_object = $dataToSave;
        $data->save();
        return 'Covid details updated successfully';
    }

    public function getDetails(){
        $data = Covid::orderBy('id', 'desc')->first();
        return response()->json(['details'=>$data], 200);
    }

}
