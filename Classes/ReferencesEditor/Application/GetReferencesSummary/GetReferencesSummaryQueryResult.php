<?php

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

declare(strict_types=1);

namespace Neos\Neos\Ui\ReferencesEditor\Application\GetReferencesSummary;

use Neos\ContentRepository\Core\Projection\ContentGraph\PropertyCollection;
use Neos\Flow\Annotations as Flow;
use Psr\Http\Message\UriInterface;

/**
 * @internal
 */
#[Flow\Proxy(false)]
final class GetReferencesSummaryQueryResult implements \JsonSerializable
{
    public function __construct(
        public readonly array $references,
        public readonly ?array $propertySchema,
        public readonly ?array $constraints,
        /**
         * Names of the node types that can be referenced according to the constraints.
         * Null, if the reference allows every node type.
         *
         * @var list<string>|null
         */
        public readonly ?array $allowedNodeTypes = null
    ) {
    }

    public function jsonSerialize(): mixed
    {
        $result = get_object_vars($this);
        return $result;
    }
}
