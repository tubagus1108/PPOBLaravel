<?php
namespace App\Http\Controllers\Provaider;
use Illuminate\Support\Facades\Storage;

class JsnGetLayanan{
    public function getSearchNumber($number,$kode = 0){
		if($kode == 0){$kodeRequst = 'Operator';}
		elseif($kode != 0){$kodeRequst = $kode;}
		$number = $this->getOperator($number);
		$data = $this->getJson();
        // return $data;
	 	$values = '';
        foreach($data->$kodeRequst as $item => $value)
        {
            $items = (string)array_search($number, $data->$kodeRequst->$item);
            if($items != null)
            {
                $values = $item;
                break;
            }
            // dd($values);
        }
		return $values;
	}
    public function getOperator($number)
    {
        $pecah = str_split($number);
        if($pecah[0] == '6' && $pecah[1] == '2'){
            $number = '08'.$pecah[3].$pecah[4];
        }else if($pecah[0] == '+' && $pecah[1] == '6' && $pecah[2]== '2'){
            $number = '08'.$pecah[4].$pecah[5];
        }else if($pecah[0] == '0' && $pecah[1] == '8'){
            $number = substr($number,0,4);
        }else{
            return false;
        }
        return $number;
    }
    public function getJson()
    {
        $urljsn = Storage::disk('local')->get('jsn.json');
        $data = json_decode($urljsn);
        return $data;
    }
}