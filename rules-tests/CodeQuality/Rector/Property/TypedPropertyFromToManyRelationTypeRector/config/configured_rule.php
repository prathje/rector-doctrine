<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

use Rector\Doctrine\CodeQuality\Rector\Property\TypedPropertyFromToManyRelationTypeRector;

use Rector\ValueObject\PhpVersionFeature;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(TypedPropertyFromToManyRelationTypeRector::class);

    $rectorConfig->phpVersion(PhpVersionFeature::UNION_TYPES);
};
