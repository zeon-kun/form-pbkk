<?php

namespace App\Http\Form\Domain\Service\Repository;

use App\Http\Form\Domain\Models\Pengguna;

interface PenggunaRepositoryInterface
{
    public function persist(Pengguna $user);
    public function getById(int $user_id): ?Pengguna;
}
