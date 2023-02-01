<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Contract\Database;

class LevelController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'parameters';
    }

    public function levelTable()
    {
        $levels = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $maxLevel = max(array_column($levels, 'level'));
        $minLevel = min(array_column($levels, 'level'));
        $differenceLevel = $maxLevel - $minLevel;
        $currentLevel = current(array_column($levels, 'level'));
        return view('/level/waterLevelChart', ['levels' => $levels, 'maxLevel' => $maxLevel, 'minLevel' => $minLevel, 'differenceLevel' => $differenceLevel, 'currentLevel' => $currentLevel]);
        return view('/level/parameters', ['currentLevel' => $currentLevel]);
    }

    public function levelChartDay()
    {
        $levels = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('today');
        $end = strtotime('today');
        $filter = array_filter($levels, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'level'));
        return view('/level/waterLevelChartDay', compact('labels', 'data'));
    }
    public function levelChartWeek()
    {
        $levels = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('last week sunday + 1 day');
        $end = strtotime('today');
        $filter = array_filter($levels, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'level'));
        return view('/level/waterLevelChartWeek', compact('labels', 'data'));
    }
    public function levelChartLast10Days()
    {
        $levels = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-10 days');
        $end = strtotime('today');
        $filter = array_filter($levels, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'level'));
        return view('/level/waterLevelChartLast10Days', compact('labels', 'data'));
    }
    public function levelChartLast30Days()
    {
        $levels = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-30 days');
        $end = strtotime('today');
        $filter = array_filter($levels, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'level'));
        return view('/level/waterLevelChartLast30Days', compact('labels', 'data'));
    }
    public function levelChartLast60Days()
    {
        $levels = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $start = strtotime('-60 days');
        $end = strtotime('today');
        $filter = array_filter($levels, function ($var) use ($start, $end) {
            $etime = strtotime($var['date']);
            return $etime <= $end && $etime >= $start;
        });
        $labels = array_reverse(array_column($filter, 'date'));
        $data = array_reverse(array_column($filter, 'level'));
        return view('/level/waterLevelChartLast60Days', compact('labels', 'data'));
    }
}
