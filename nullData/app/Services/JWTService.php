<?php

namespace App\Services;

use JWTAuth;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;

class JWTService
{
    /**
     * @param User $user
     *
     * @return array
     */
    public function generate(User $user) : array
    {
        try {
            if (!$token = JWTAuth::fromUser($user)) {
                return [
                    'error' => 'invalid_credentials',
                ];
            }
        } catch (JWTException $e) {
            return [
                'error' => 'could_not_create_token',
            ];
        }

        return [
            'token' => $token,
        ];
    }

    /**
     * @param $token
     */
    public function invalidate($token)
    {
        JWTAuth::invalidate($token);
    }
}
