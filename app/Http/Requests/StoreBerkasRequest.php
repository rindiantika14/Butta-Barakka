<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBerkasRequest extends FormRequest
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
            'blok_id' => 'required',
            'ktp' => 'required|file|mimes:jpg,jpeg,png|max:5000',
            'npwp' => 'required|file|mimes:jpg,jpeg,png|max:5000',
            'kk' => 'required|file|mimes:jpg,jpeg,png|max:5000',
            'surat_keterangan_kerja' => 'required|file|mimes:jpg,jpeg,png|max:5000',
            'slip_gaji' => 'required|file|mimes:jpg,jpeg,png|max:5000',
            'buku_rekening_koran' => 'required|file|mimes:jpg,jpeg,png|max:5000',
            'surat_keterangan_menikah' => 'required|file|mimes:jpg,jpeg,png|max:5000',
            'foto_3x4' => 'required|file|mimes:jpg,jpeg,png|max:5000',
        ];
    }
}
