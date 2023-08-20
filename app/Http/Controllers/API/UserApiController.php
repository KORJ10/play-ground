<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\Mapping\MappingService;
use App\Service\UserRepositoryInterface;

class UserApiController extends Controller
{
    protected $userRepository;
    protected $mappingService;

    public function __construct(UserRepositoryInterface $userRepository, MappingService $mappingService)
    {
        $this->userRepository = $userRepository;
        $this->mappingService = $mappingService;
    }

    public function index()
    {
        $users = $this->userRepository->getUsers();
        return ['users' => $users];
    }

    public function show($id)
    {
        $user = $this->userRepository->getOne($id);
        $userDto = $this->mappingService->mapToDto($user);

        return ['user' => $userDto];
    }
}

