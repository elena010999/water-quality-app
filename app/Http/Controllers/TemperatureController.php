<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Contract\Database;

class TemperatureController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'parameters';
    }

    public function tempTable()
    {
        $temperatures = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $maxTemp = max(array_column($temperatures, 'temperature'));
        $minTemp = min(array_column($temperatures, 'temperature'));
        $differenceTemp = $maxTemp - $minTemp;
        $currentTemp = current(array_column($temperatures, 'temperature'));
        return view('/temperature/tempChart', ['temperatures' => $temperatures, 'maxTemp' => $maxTemp, 'minTemp' => $minTemp, 'differenceTemp' => $differenceTemp, 'currentTemp' => $currentTemp]);
        return view('/temperature/parameters', ['currentTemp' => $currentTemp]);
    }

    public function tempChartDay()
    {
        $temperatures = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('today');
        $end = strtotime('today');
        $filter = array_filter($temperatures, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'temperature'));
        return view('/temperature/tempChartDay', compact('labels', 'data'));
    }
    public function tempChartWeek()
    {
        $temperatures = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('last week sunday + 1 day');
        $end = strtotime('today');
        $filter = array_filter($temperatures, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'temperature'));
        return view('/temperature/tempChartWeek', compact('labels', 'data'));
    }
    public function tempChartLast10Days()
    {
        $temperatures = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-10 days');
        $end = strtotime('today');
        $filter = array_filter($temperatures, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'temperature'));
        return view('/temperature/tempChartLast10Days', compact('labels', 'data'));
    }
    public function tempChartLast30Days()
    {
        $temperatures = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-30 days');
        $end = strtotime('today');
        $filter = array_filter($temperatures, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'temperature'));
        return view('/temperature/tempChartLast30Days', compact('labels', 'data'));
    }
    public function tempChartLast60Days()
    {
        $temperatures = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-60 days');
        $end = strtotime('today');
        $filter = array_filter($temperatures, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'temperature'));
        return view('/temperature/tempChartLast60Days', compact('labels', 'data'));
    }
}
