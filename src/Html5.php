<?php

declare(strict_types=1);

namespace PhpDocumentor\Html5;

use PhpDocumentor\Contracts\Specification\SpecificationInterface;

class Html5 implements SpecificationInterface
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Html 5';
    }

    /**
     * @return array
     */
    public function getElements(): array
    {
        // TODO: Implement getElements() method.
    }

    /**
     * @param string $name
     * @return array
     */
    public function getRules(string $name): array
    {
        // TODO: Implement getRules() method.
    }

    /**
     * @return bool
     */
    public function supportUserElements(): bool
    {
        return true;
    }
}
