<?php

declare(strict_types=1);

namespace Framework\Http;

use Psr\Http\Message\StreamInterface;

class Stream implements StreamInterface
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContents(): string
    {
        return $this->content;
    }

    public function __toString()
    {
        $this->getContents();
    }

    public function getSize()
    {
        return mb_strlen($this->content);
    }

    public function write($string)
    {
        $this->content .= $string;
    }

    public function close(){}
    public function detach(){}
    public function tell(){}
    public function eof(){}
    public function isSeekable(){}
    public function seek($offset, $whence = SEEK_SET){}
    public function rewind(){}
    public function isWritable(){}
    public function isReadable(){}
    public function read($length){}
    public function getMetadata($key = null){}
}