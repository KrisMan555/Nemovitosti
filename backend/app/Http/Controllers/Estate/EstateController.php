<?php

namespace App\Http\Controllers\Estate;

use App\Http\Controllers\Controller;
use App\Http\Requests\EstateRequest;
use App\Services\EstateService;
use App\Services\ImageService;

class EstateController extends Controller
{
    public function __construct(private EstateService $estateService, private ImageService $imageService){
    }

    public function getCount() {
        return $this->response($this->estateService->getCount(), 200);
    }

    public function getEstateCount(EstateRequest $request) {
        return $this->response(
            $this->estateService->search($request, true)
        );
    }

    public function getEstateReported(EstateRequest $request){
        return $this->respondWithPages(
            $this->estateService->getReported($request)
        );
    }

    public function getEstate($uuid) {
        $estate = $this->estateService->get($uuid);
        return $this->response($estate, 200);
    }
    
    public function getpatchEstate($uuid) {
        $estate = $this->estateService->getwithIDs($uuid);
        return $this->response($estate, 200);
    }

    public function deleteEstate($uuid) {
        $this->estateService->delete($uuid);
        return $this->respondSuccess('Smazáno', 200);
    }

    public function searchEstate(EstateRequest $request) {
        return $this->respondWithPages(
            $this->estateService->search($request)
        );
    }

    public function patchEstate($uuid,EstateRequest $request) {
        $req = (object) $request->all();
        $this->estateService->patch($uuid,(object)$req);
        return $this->respondSuccess('Aktualizováno', 201);
    }

    public function createEstate(EstateRequest $request) {
        $req = (object) $request->all();
        $id = $this->estateService->create((object)$req);
        return $this->response($id, 201);
    }
}
