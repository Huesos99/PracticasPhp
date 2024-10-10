<?php

namespace Complements\Public;

class ArcherIndexTraits
{
    use CanShootArrow;
}

final class Knight
{
    use CanRide;
}

final class MountedArcher
{
    use CanRide;
    use CanShootArrow;
}

trait CanShootArrow
{
    public function shootArrow(): void
    {
        echo "dispara una flecha \n";
    }

    public function getArrows()
    {
        return $this->arrows ?? 50;
    }
}

trait CanRide
{
    public function move(): void
    {
        echo "monta a caballo \n";
    }
}

trait CanPerformBasicActions
{
    public function move(): void
    {
        echo "camina \n";
    }
}

$mountArcher = new MountedArcher();
$mountArcher->shootArrow();
echo "Tiene {$mountArcher->getArrows()} flechas \n";

