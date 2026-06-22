<?php

namespace Bookboon\ApiModels;

use Bookboon\JsonLDClient\Attributes\JsonLDEntity;

#[JsonLDEntity(url: '/v1/books')]
class NanoBook extends Book
{
}
