<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

trait RESTActions {


    public function all()
    {
        $m = self::MODEL;
        return $this->respond(Response::HTTP_OK, $m::all());
    }

    public function get($id)
    {
        $m = self::MODEL;
        $model = $m::find($id);
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $model);
    }

    public function add(Request $request)
    {
        $m = self::MODEL;
        $this->validate($request, $m::$rules);
        return $this->respond(Response::HTTP_CREATED, $m::create($request->all()));
    }

    public function put(Request $request, $id)
    {
        $m = self::MODEL;
        $this->validate($request, $m::$rules);
        $model = $m::find($id);
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        $model->update($request->all());
        return $this->respond(Response::HTTP_OK, $model);
    }

    public function remove($id)
    {
        $m = self::MODEL;
        if(is_null($m::find($id))){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        $m::destroy($id);
        return $this->respond(Response::HTTP_NO_CONTENT);
    }

    protected function respond($status, $data = [])
    {
        return response()->json($data, $status);
    }

    public function loginAdmin(Request $request)
    {
        $m = self::MODEL;
        $model = $m::where('username', '=', $request['username'])->get();

        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        } else {
            if (hash::check($request['password'], $model[0]['password'])) {
                return $this->respond(Response::HTTP_OK, $model);
            } else {
                return $this->respond(Response::HTTP_NOT_FOUND);
            }
        }
    }

    public function loginPegawai(Request $request)
    {
        $m = self::MODEL;
        $model = $m::where('username', '=', $request['username'])->get();

        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        } else {
            if (hash::check($request['kode_unik'], $model[0]['kode_unik'])) {
                return $this->respond(Response::HTTP_OK, $model);
            } else {
                return $this->respond(Response::HTTP_NOT_FOUND);
            }
        }
    }
}
