<?php

namespace App\Http\Requests\Admin\Lecture;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLectureValidation extends FormRequest
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
            'subject_id' => ['required'],
            'lecture_name' => ['required'],
            'topic_name' => ['required'],
            'recommended_video' => ['required', 'url'],
            'class_note' => ['required', 'mimes:pdf'],
            'lecture_sheet' => ['required', 'mimes:pdf']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'subject_id.required' => 'subject is required',
            'recommended_video.url' => 'The :attribute need to be valid url',
            'class_note.mimes' => 'The :attribute must be a pdf file',
            'lecture_sheet.mimes' => 'The :attribute must be a pdf file'
        ];
    }
}
