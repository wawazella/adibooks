<?php
namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Models\SubjectMaterial;

class SubjectMaterialController extends Controller
{
    public function index()
    {
        return view('subjectmaterials.index');
    }

}   
