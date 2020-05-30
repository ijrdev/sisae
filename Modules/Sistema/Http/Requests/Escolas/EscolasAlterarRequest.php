<?php

namespace Modules\Sistema\Http\Requests\Escolas;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Modules\Sistema\Entities\Models\Repositories\EscolasRepository;

class EscolasAlterarRequest extends FormRequest
{
    private $escolasRepository;

    public function __construct(EscolasRepository $escolasRepository)
    {
        $this->escolasRepository = $escolasRepository;
    }

    public function rules()
    {
        Validator::extend('check_email', function($attribute, $value, $parameters)
        {
            $escolas = $this->escolasRepository->getAllEscolas();
            $escola  = $this->escolasRepository->getEscola($this->id_escola);
        
            if($this->email_escola == $escola->email_escola)
            {
                return true;
            }
            else
            {
                foreach($escolas as $escola)
                {
                    if($this->email_escola == $escola->email_escola)
                    {
                        return false;
                    }
                }
                
                return true;
            }
        });

        return [
            'id_escola'       => 'required',
            'nome_escola'     => 'required|min:10|max:50',
            'telefone_escola' => 'required|min:14',
            'endereco_escola' => 'required|min:10|max:50',
            'email_escola'    => 'required|check_email|email:rfc,dns,filter',
            'status_escola'   => 'required'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'email_escola.check_email' => 'Email já cadastrado no sistema.'
        ];
    }
}
