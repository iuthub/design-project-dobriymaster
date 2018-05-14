<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class answer extends Controller {
public function insertform(){
return view('vopros');
} 

public function insert(Request $request){
$id = $request->input('id');
$answer = $request->input('answer');
$sql = "INSERT INTO questions (id, name, email, question, answer)
VALUES ('', '', '', '', '$answer')";

//$data=array('id'=>$id,"answer"=>$answer);
//DB::table('questions')->insert($sql);

echo "Record inserted successfully.<br/>";
echo '<a href = "/vopros">Click Here</a> to go back.';

}
}


