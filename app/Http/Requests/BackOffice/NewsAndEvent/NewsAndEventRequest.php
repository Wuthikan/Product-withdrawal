<?php

namespace DurianSoftware\Http\Requests\BackOffice\NewsAndEvent;

use Illuminate\Foundation\Http\FormRequest;

class NewsAndEventRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                $validate = [
                    'title' => 'required|unique:dim_news_events,title',
                    // 'description' => 'required',
                    'news_events_date' => 'required|date_format:d/m/Y',
                    'start_date' => 'required|date_format:d/m/Y H:i',
                    'end_date' => 'required|date_format:d/m/Y H:i'
                ];
                if (!$this->has('_image')) {
                    $validate['image'] ='required|image|mimes:jpeg,png,jpg|max:2048';
                }
                return $validate;
            case 'PUT':
                $id = $this->route('news_and_event');
                return [
                    'title' => 'required|unique:dim_news_events,title,'.$id,
                    // 'description' => 'required',
                    'news_events_date' => 'required',
                    'start_date' => 'required',
                    'end_date' => 'required'
                ];
            case 'PATCH':
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'title.required' => 'Please insert news-event title',
            'title.unique' => 'Title already exists',
            'description.required' => 'Please insert news-event description',
            'image.required' => 'Please insert news image',
            'news_events_date.required' => 'Please enter date event',
            'start_date.required' => 'Please enter date start',
            'end_date.required' => 'Please enter date end',
            'status.required' => 'Please enter news-event status',
        ];
    }
}
