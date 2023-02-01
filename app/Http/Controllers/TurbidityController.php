<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Contract\Database;

class TurbidityController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'parameters';
    }

    public function turbTable()
    {
        $turbidities = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $maxTurb = max(array_column($turbidities, 'turbidity'));
        $minTurb = min(array_column($turbidities, 'turbidity'));
        $differenceTurb = $maxTurb - $minTurb;
        $currentTurb = current(array_column($turbidities, 'turbidity'));
        return view('/turbidity/turbChart', ['turbidities' => $turbidities, 'maxTurb' => $maxTurb, 'minTurb' => $minTurb, 'differenceTurb' => $differenceTurb, 'currentTurb' => $currentTurb]);
        return view('/turbidity/parameters', ['currentTurb' => $currentTurb]);
    }

    public function turbChartDay()
    {
        $turbidities = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue()); 
        $start = strtotime('today');
        $end = strtotime('today');
        $filter = array_filter($turbidities, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'turbidity'));
        return view('/turbidity/turbChartDay', compact('labels', 'data'));
    }
    public function turbChartWeek()
    {
        $turbidities = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue()); 
        $start = strtotime('last week sunday + 1 day');
        $end = strtotime('today');
        $filter = array_filter($turbidities, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'turbidity'));
        return view('/turbidity/turbChartWeek', compact('labels', 'data'));
    }
    public function turbChartLast10Days()
    {
        $turbidities = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-10 days');
        $end = strtotime('today');
        $filter = array_filter($turbidities, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'turbidity'));
        return view('/turbidity/turbChartLast10Days', compact('labels', 'data'));
    }
    public function turbChartLast30Days()
    {
        $turbidities = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-30 days');
        $end = strtotime('today');
        $filter = array_filter($turbidities, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'turbidity'));
        return view('/turbidity/TurbChartLast30Days', compact('labels', 'data'));
    }
    public function turbChartLast60Days()
    {
        $turbidities = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-60 days');
        $end = strtotime('today');
        $filter = array_filter($turbidities, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'turbidity'));
        return view('/turbidity/turbChartLast60Days', compact('labels', 'data'));
    }
}
