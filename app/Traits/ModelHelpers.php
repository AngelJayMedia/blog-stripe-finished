<?php

namespace App\Traits;

trait ModelHelpers
{
    public function matches(self $model): bool
    {
        return $this->id() === $model->id();
    }
}
