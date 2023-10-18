<?php

namespace App\Http\Form\Infrastructure\Repository;

use App\Http\Form\Domain\Models\Pengguna;
use App\Http\Form\Domain\Service\Repository\PenggunaRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PenggunaRepository implements PenggunaRepositoryInterface
{
    public function persist(Pengguna $user)
    {
        $data = $this->createPayload($user);
        DB::table('users')->upsert(
            $data,
            'id'
        );
    }

    public function getById(int $user_id): ?Pengguna
    {
        // TODO: Implement getById() method.
    }

    private function createPayload(Pengguna $user)
    {
        return [
            'id' => $user->getId(),
            'dosen' => $user->getName(),
            'judul' => $user->getEmail(),
            'status' => $user->getStatus()->value,
        ];
    }
}
