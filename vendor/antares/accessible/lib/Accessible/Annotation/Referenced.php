<?php

namespace Accessible\Annotation;

/**
 * @Annotation
 * @Target("PROPERTY")
 * @Attributes({
 *   @Attribute("className", type="string"),
 *   @Attribute("propertyName", type="string")
 * })
 */
class Referenced extends AbstractAssociation
{

}
