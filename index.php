<?php
include 'vendor/autoload.php';

use Abaygar\StudentManagement\Model\StudentModel;

$student = new StudentModel;
$student->id = 2024626007;
$student->fullname = "Abaygar, Anthea Jane";
$student->yearlevel = "First Year";
$student->course = "BSIT";
$student->section = "A";

$student->displayInfo();

