<?php
 
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class Karyawan_Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
 
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      //cek create atau update
        if ($this->method() == 'PATCH') {
          $nip_rule = 'required|string|size:5|unique:employees,nip'.$this->get('id');
        } else {
          $nip_rule = 'required|string|size:5|unique:employees,nip';
        }
        return [
          'nip'=>$nip_rule,
          'nama'=>'required|string|max:35|min:5',
          'tgl_lahir'=>'required|date',
          'gender'=>'required|in:L,P',
          'foto'=>'sometimes|image|max:500|mimes:jpg,jpeg,bmp,png,JPG,JPEG,PNG',
        ];
    }
}