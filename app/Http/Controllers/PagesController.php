<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
  public function home()
    {
        $data=[
          'name'=>'Noiro',
          'age'=>'Immortal'
        ];
        return view('welcome')->with($data);
    }
    public function profile() {

      $data=[
          'Username'=>"noiro.88"

      ];
      return view('profile')->with($data);
    }
public function create(){

      return view('create');
}
    public function store(Request $request)
    {
     $student=new Student();
     $student->name= $request->name;
     $student->address= $request->address;
     $student->dob= $request->date;
$img=Image::make($request->file('image'));
$filename=$request->file('image')->getClientOriginalName();
$img->save('storage/image/'.$filename);
$student->image=$filename;
     $student->save();
    return redirect('/list');


    }
    public function list(){
      $students=Student::orderBy('name')->get();
      return view('list')->with('students',$students);


//      $data=[
//
//          'students'=>$students
//      ];
//      return view('list')=>()
    }
    public function edit($id){
      $student=Student::find($id);
//      return $id;

return view('update')->with('student',$student);
    }
    public function update(Request $request){

$student= Student::where('id', $request->id)->first();
        $student->name= $request->name;
        $student->address= $request->address;
        $student->dob= $request->date;
        $student->save();
        return redirect('list');
    }
}

