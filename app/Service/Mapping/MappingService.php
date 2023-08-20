<?php

namespace App\Service\Mapping;

use App\Models\User;
use App\Service\DTO\UserDtoService;

class MappingService
{
    public function mapToDto(User $user): UserDtoService
    {
        $userDto = new UserDtoService();
        $userDto->id = $user->id;
        $userDto->name = $user->name;
        $userDto->email = $user->email;

        return $userDto;
    }
}
