<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class Mod extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '%';
    }
}