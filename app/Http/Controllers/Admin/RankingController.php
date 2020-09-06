<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlternativeValueModel;
use App\Models\AlternativeModel;
use App\Models\CriteriaModel;
use App\Models\CriterionValueModel;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n_critreria = CriteriaModel::count();        
        for ($i=1; $i <= $n_critreria; $i++) { 
            $alternative_value[] = AlternativeValueModel::where('criteria_id', $i)->get();            
            foreach ($alternative_value as $key => $value) {                             
                foreach ($value as $key2 => $value2) {                     
                    $get_value_for_array = CriterionValueModel::where('id', $value2->criterion_value_id)->first();
                    $criterion_value_id_n[] = $get_value_for_array->value;                    
                }            
                // return min($criterion_value_id_n);                
                $result = [];
                foreach ($value as $key3 => $value3) {
                    // return $value3;
                    // return $value3;
                    $check_attribute = CriteriaModel::where('id', $value3->criteria_id)->first();
                    $get_value = CriterionValueModel::where('id', $value3->criterion_value_id)->first();
                    if ($check_attribute->attribute == 'cost') {                                                 
                        $result[] = min($criterion_value_id_n) / $get_value->value; 
                    }else{
                        $result[] = $get_value->value / max($criterion_value_id_n);                         
                    }                    
                }
                // return $criteria_value[] = min($criterion_value_id_n) / $value[0]->criterion_value_id;    
            }
            $result_n[] = $result;
            // return $j;
            // return $criterion_value_id_n;
        }   
        // return $result_n;        

        //normalisasi matriks
        $n_value = count($result_n[0]);        
        for ($i=0; $i < $n_value ; $i++) {          
            $alternative = [];   
            foreach ($result_n as $key => $value) {                                
                $alternative[] = $value[$i];                
            }
            $alternative_all[] = $alternative;
        }

        // return $alternative_all;
        // kalikan dengan product
        $get_bobot = CriteriaModel::all(); 

        foreach ($alternative_all as $key => $value) {
            $ranking = [];            
            $key_up = 0;
            foreach ($value as $key33 => $value33) {                
                $ranking[] = $value33 *  ($get_bobot[$key_up]->weight/100);
                $key_up++;                
            }
            $ranking_all[] = $ranking;
        }
        // return $ranking_all;    
        // return view('admin.ranking.index', $data);

        // sum total array
        foreach ($ranking_all as $key => $value) {            
            $ranking_sum[] = array_sum($value);
        }

        $alt = DB::select("SELECT DISTINCT alternative_id FROM alternative_value");
        foreach ($alt as $key => $value) {
            $alt_id[] = $value->alternative_id;
            $gym[] = AlternativeModel::where('id', $value->alternative_id)->first();
        }
        $n_for = count($alt_id);        

        foreach ($gym as $key => $value) {
            $list_gym[] = $value->name;
            $description[] = $value->description;
        }
        // for checking data
        // for ($i=0; $i < $n_for; $i++) { 
        //     $hasil[] = array($alt_id[$i] => $ranking_sum[$i]);
        // }        


        $data['jumlah_alternative'] = $n_for;
        $data['alt_id'] = $alt_id;
        $data['ranking_sum'] = $ranking_sum;
        $data['gym_alt'] = $list_gym;
        $data['description'] = $description;

        return view('admin.ranking.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
