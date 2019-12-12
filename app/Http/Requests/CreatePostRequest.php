<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
        return [
            'title'=> ['required','min:5',new Uppercase()],
            'description'=>'required',
            'file'=>['max:1000','mimes:jpg,png,jpeg']
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'لطفا عنوان مطلب خود را انتخاب کنید',
            'title.min'=>'تعداد کارکتر های عنوان شما باید حداقل  5 باشد',
            'description.required'=>'لطفا توضیحات مطلب را انتخاب کینید',
            'file.max'=>'حجم فایل باید کم تر از 1 مگابایت باشد',
            'file.mimes'=>'فایل شما باید از جنس png یا jpg یا jpeg باشد',
        ];

    }
}
