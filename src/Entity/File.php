<?php

namespace Paysera\DeliveryApi\MerchantClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class File extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->get('name');
    }
    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->set('name', $name);
        return $this;
    }
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->get('content');
    }
    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->set('content', $content);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->get('mime_type');
    }
    /**
     * @param string $mimeType
     * @return $this
     */
    public function setMimeType($mimeType)
    {
        $this->set('mime_type', $mimeType);
        return $this;
    }
    /**
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get('size');
    }
    /**
     * @param integer $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->set('size', $size);
        return $this;
    }
}
