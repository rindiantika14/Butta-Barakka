<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlokRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tipe_rumah_id' => 'required',
            'nama_blok' => 'required|max:250',
            'spesifikasi' => 'required',
            'luas' => 'required',
            'toilet' => 'required',
            'kamar' => 'required',
            'harga' => 'required',
            'denah' => 'required|mimes:jpg,png,jpeg|max:5000',
            'status' => 'required',
        ];
    }
}
