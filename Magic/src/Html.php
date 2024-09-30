<?php

declare(strict_types=1);

namespace Magic\src;

final class Html
{
    protected $attributes = [];
    protected $tag;
    protected $content;

    public function __construct(string $tag, $content = null,array $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function render(): string
    {
        $result = "<{$this->tag} {$this->renderAttributes()}>";

        if ($this->content !== null) {
            $result .= $this->content;

            $result .= "</{$this->tag}>";
        }

        return $result;
    }
    public static function __callStatic($method, $arguments = [])
    {
        $content = $arguments[0] ?? null;

        $attributes = $arguments[1] ?? [];

        return new Html($method, $content, $attributes);

    }
    public function __call($method, $arguments = [])
    {
        if (! isset($arguments[0])) {
            throw new \Exception("No se ha proporcionado un valor para el atributo {$method}");
        }

        $this->attributes[$method] = $arguments[0];

        return $this;
    }

    private function renderAttributes()
    {
        $result = '';

        foreach ($this->attributes as $name => $value) {
            $result .= sprintf('%s="%s"', $name, $value);
        }

        return $result;
    }
}