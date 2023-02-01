<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kreait\Firebase\Contract\Database;


class ParameterController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'parameters';
    }
    public function table()
    {
        $parameters = array_reverse($this->database->getReference($this->tablename)->orderByChild('date','time')->getValue());
        $phs = array_reverse($this->database->getReference($this->tablename)->orderByChild('date','time')->getValue());
        $currentPh = current(array_column($phs, 'ph'));
        $temperatures = array_reverse($this->database->getReference($this->tablename)->orderByChild('date', 'time')->getValue());
        $currentTemp = current(array_column($temperatures, 'temperature'));
        $turbidities = array_reverse($this->database->getReference($this->tablename)->orderByChild('date','time')->getValue());
        $currentTurb = current(array_column($turbidities, 'turbidity'));
        $levels = array_reverse($this->database->getReference($this->tablename)->orderByChild('date','time')->getValue());
        $currentLevel = current(array_column($levels, 'level'));
        return view('/parameters',['parameters' => $parameters,'currentPh' => $currentPh,'currentTemp'=>$currentTemp,'currentPh'=>$currentPh,'currentLevel' => $currentLevel, 'currentTurb' => $currentTurb]);
    }
}
