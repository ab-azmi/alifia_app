<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class KonselingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'psikolog_id' => 'required',
            'phone' => 'required|max:12',
            'gender' => 'required|in:1,2',
            'address' => 'required|max:255',
            'category' => 'required|in:1,2',
            'date' => 'nullable|date',
            'time' => 'nullable|date_format:H:i',
            'description' => 'required',
        ];
    }

    //perform manual validation after
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            //check if input date and time is not null
            if ($this->input('category') == 2) {

                if ($this->input('date') == null) {
                    $validator->errors()->add('date', 'Tanggal tidak boleh kosong');
                }

                if ($this->input('time') == null) {
                    $validator->errors()->add('time', 'Jam tidak boleh kosong');
                }

                if ($this->input('date') < date('Y-m-d')) {
                    $validator->errors()->add('date', 'Tanggal tidak boleh kurang dari hari ini');
                }

                //get psikolog from id
                $psikolog = \App\Models\Psikolog::find($this->input('psikolog_id'));

                $the_day = strtolower(date('l', strtotime($this->input('date'))));
                //check if date day is with in psikolog workdays list
                if (!strpos($psikolog->workdays, $the_day)) {
                    $validator->errors()->add('date', 'Psikolog tidak bekerja pada hari ini');
                }

                //check if time is within psikolog work hours
                if ($this->input('time') < $psikolog->start || $this->input('time') > $psikolog->end) {
                    $validator->errors()->add('time', 'Psikolog tidak bekerja pada jam ini');
                }
            }
        });
    }
}
