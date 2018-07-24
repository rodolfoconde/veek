<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{


    private $model;

    public function __construct(UserRepository $model)
    {
        $this->model        = $model;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data' => $this->model->all(), 'message'=>'Registros carregados com sucesso'], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        if (!$this->model->create($request->all())) {
            return response()->json(['data' => '', 'message'=>'Erro ao cadastrar usuário']);
        }

        return response()->json(['data' => $this->model->all(), 'message'=>'Usuário cadastrado com sucesso'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$this->model->find($id)) {
            return response()->json(['data' => '', 'message'=>'Usuário não encontrado'], 404);
        }

        if (!$this->model->find($id)) {
            return response()->json(['data' => '', 'message'=>'Usuário não encontrado'], 404);
        }
        return response()->json(['data' => $this->model->findOrFail($id), 'message'=>'Registro carregado com sucesso'], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        if (!$this->model->find($id)) {
            return response()->json(['data' => '', 'message'=>'Usuário não encontrado'], 404);
        }

        if (!$this->model->update($id, $request->all())) {
            return response()->json(['data' => '', 'message'=>'Erro ao atualizar usuário'], 404);
        }

        return response()->json(['data' => $this->model->find($id), 'message'=>'Usuário alterado com sucesso'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (!$this->model->find($id)) {
            return response()->json(['data' => '', 'message'=>'Usuário não encontrado'], 404);
        }

        if (!$this->model->delete($id)) {
            return response()->json(['data' => '', 'message'=>'Erro ao excluir usuário'], 404);

        }
        return response()->json(['data' => '', 'message'=>'Usuário excluído com sucesso'], 200);
    }
}
