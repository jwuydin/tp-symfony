<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class testBlogBundleDocumentArticleHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = $value instanceof \MongoId ? (string) $value : $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['date'])) {
            $value = $data['date'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } elseif ($value instanceof \DateTime) { $return = $value; } else { $return = new \DateTime($value); }
            $this->class->reflFields['date']->setValue($document, clone $return);
            $hydratedData['date'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['titre'])) {
            $value = $data['titre'];
            $return = (string) $value;
            $this->class->reflFields['titre']->setValue($document, $return);
            $hydratedData['titre'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['auteur'])) {
            $value = $data['auteur'];
            $return = (string) $value;
            $this->class->reflFields['auteur']->setValue($document, $return);
            $hydratedData['auteur'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['contenu'])) {
            $value = $data['contenu'];
            $return = (string) $value;
            $this->class->reflFields['contenu']->setValue($document, $return);
            $hydratedData['contenu'] = $return;
        }
        return $hydratedData;
    }
}