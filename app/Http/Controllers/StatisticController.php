<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatisticController extends Controller
{
    public function join()
    {
        $data = DB::table('cameras_vehicles')
                ->join('cameras', 'cameras_vehicles.camera_id', '=', 'cameras.camera_id')
                ->join('vehicles', 'cameras_vehicles.vehicle_id', '=', 'vehicles.vehicle_id')
                ->join('vehicle_types', 'vehicles.vehicle_type_id', '=', 'vehicle_types.vehicle_type_id')
                ->join('toll_stations', 'cameras.toll_station_id', '=', 'toll_stations.toll_station_id');

        return $data;
    }

    public function day(){
        $daynow = Carbon::now()->day;
        $data_now = $this->join()->whereDay('time', $daynow)->get();
        $now = [0, 0, 0, 0, 0, 0];
        foreach($data_now as $item){
            switch ($item->vehicle_type_id){
                case 0:
                    $now[0]+=1;
                    break;
                case 1:
                    $now[1]+=1;
                    break;
                case 2:
                    $now[2]+=1;
                    break;
                case 3:
                    $now[3]+=1;
                    break;
                case 4:
                    $now[4]+=1;
                    break;    
                case 5:
                    $now[5]+=1;
                    break;            
            }
        }

        $yesterday = Carbon::yesterday();
        $data_yesterday = $this->join()->whereDay('time', $yesterday)->get();
        $sub = [0, 0, 0, 0, 0, 0];
        foreach($data_yesterday as $item){
            switch ($item->vehicle_type_id){
                case 0:
                    $sub[0]+=1;
                    break;
                case 1:
                    $sub[1]+=1;
                    break;
                case 2:
                    $sub[2]+=1;
                    break;
                case 3:
                    $sub[3]+=1;
                    break;
                case 4:
                    $sub[4]+=1;
                    break;    
                case 5:
                    $sub[5]+=1;
                    break;            
            }
        }
        

        $max = collect([$now, $sub])->collapse();
        $max = $max->max();
        
        
        return view('pages.statistics.index', compact('now', 'sub', 'max'));
    }

    public function week(){
        $daynow = Carbon::now()->day;
        $data_now = $this->join()->whereDay('time', $daynow)->get();
        $now = [0, 0, 0, 0, 0, 0];
        foreach($data_now as $item){
            switch ($item->vehicle_type_id){
                case 0:
                    $now[0]+=1;
                    break;
                case 1:
                    $now[1]+=1;
                    break;
                case 2:
                    $now[2]+=1;
                    break;
                case 3:
                    $now[3]+=1;
                    break;
                case 4:
                    $now[4]+=1;
                    break;    
                case 5:
                    $now[5]+=1;
                    break;            
            }
        }

        $week = Carbon::now()->subWeek();
        $day_week = $week->day;
        $month_week = $week->month;
        $data_yesterday = $this->join()->whereDay('time', $day_week)->whereMonth('time', $month_week)->get();
        $sub = [0, 0, 0, 0, 0, 0];
        foreach($data_yesterday as $item){
            switch ($item->vehicle_type_id){
                case 0:
                    $sub[0]+=1;
                    break;
                case 1:
                    $sub[1]+=1;
                    break;
                case 2:
                    $sub[2]+=1;
                    break;
                case 3:
                    $sub[3]+=1;
                    break;
                case 4:
                    $sub[4]+=1;
                    break;    
                case 5:
                    $sub[5]+=1;
                    break;            
            }
        }
        

        $max = collect([$now, $sub])->collapse();
        $max = $max->max();
        
        
        return view('pages.statistics.index', compact('now', 'sub', 'max'));
    }


    public function month(){
        $daynow = Carbon::now()->month;
        $data_now = $this->join()->whereMonth('time', $daynow)->get();
        $now = [0, 0, 0, 0, 0, 0];
        foreach($data_now as $item){
            switch ($item->vehicle_type_id){
                case 0:
                    $now[0]+=1;
                    break;
                case 1:
                    $now[1]+=1;
                    break;
                case 2:
                    $now[2]+=1;
                    break;
                case 3:
                    $now[3]+=1;
                    break;
                case 4:
                    $now[4]+=1;
                    break;    
                case 5:
                    $now[5]+=1;
                    break;            
            }
        }
        
        $sub = [0, 0, 0, 0, 0, 0];
        $max = collect([$now, $sub])->collapse();
        $max = $max->max();

        return view('pages.statistics.index', compact('now', 'sub', 'max'));
    }
}
