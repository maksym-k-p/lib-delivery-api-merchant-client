<?php

namespace Paysera\DeliveryApi\MerchantClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class Project extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->get('id');
    }
    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->set('id', $id);
        return $this;
    }
    /**
     * @return string
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
}
