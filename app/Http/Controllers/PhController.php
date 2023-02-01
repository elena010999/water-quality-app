<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Contract\Database;

class PhController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'parameters';
    }

    public function phTable()
    {
        $phs = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $maxPh = max(array_column($phs, 'ph'));
        $minPh = min(array_column($phs, 'ph'));
        $differencePh = $maxPh - $minPh;
        $currentPh = current(array_column($phs, 'ph'));
        return view('/ph/phChart', ['phs' => $phs, 'maxPh' => $maxPh, 'minPh' => $minPh, 'differencePh' => $differencePh, 'currentPh' => $currentPh]);
        return view('/parameters', ['currentPh' => $currentPh]);
    }

    public function phChartDay()
    {
        $phs = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue()); 
        $start = strtotime('today');
        $end = strtotime('today');
        $filter = array_filter($phs, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'ph'));
        return view('/ph/phChartDay', compact('labels', 'data'));
    }
    public function phChartWeek()
    {
        $phs = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue()); 
        $start = strtotime('last week sunday + 1 day');
        $end = strtotime('today');
        $filter = array_filter($phs, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'ph'));
        return view('/ph/phChartWeek', compact('labels', 'data'));
    }
    public function phChartLast10Days()
    {
        $phs = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-10 days');
        $end = strtotime('today');
        $filter = array_filter($phs, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'ph'));
        return view('/ph/phChartLast10Days', compact('labels', 'data'));
    }
    public function phChartLast30Days()
    {
        $phs = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-30 days');
        $end = strtotime('today');
        $filter = array_filter($phs, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'ph'));
        return view('/ph/phChartLast30Days', compact('labels', 'data'));
    }
    public function phChartLast60Days()
    {
        $phs = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-60 days');
        $end = strtotime('today');
        $filter = array_filter($phs, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'ph'));
        return view('/ph/phChartLast60Days', compact('labels', 'data'));
    }
}
