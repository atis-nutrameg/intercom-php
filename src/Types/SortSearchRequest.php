<?php

namespace Intercom\Types;

use Intercom\Core\Json\JsonSerializableType;
use Intercom\Core\Json\JsonProperty;

/**
 * Sorting options for Search Requests.
 */
class SortSearchRequest extends JsonSerializableType
{
    /**
     * @var ?string $field The accepted field that you want to sort on.
     */
    #[JsonProperty('field')]
    private ?string $field;

    /**
     * @var ?string $order The accepted order you can use to define how you want to sort the value.
     */
    #[JsonProperty('order')]
    private ?string $order;

    /**
     * @param array{
     *   field?: ?string,
     *   order?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->field = $values['field'] ?? null;
        $this->order = $values['order'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * @param ?string $value
     */
    public function setField(?string $value = null): self
    {
        $this->field = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * @param ?string $value
     */
    public function setOrder(?string $value = null): self
    {
        $this->order = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
