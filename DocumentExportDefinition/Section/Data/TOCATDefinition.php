<?php
namespace DocumentExportDefinition\Section\Data;

use DocumentExportDefinition\Section\AbstractDataDefinition;
use JMS\Serializer\Annotation as Serializer;

class TOCATDefinition extends AbstractDataDefinition
{
    /**
     * @Serializer\SerializedName("value")
     * @Serializer\Type("array")
     * @var array
     */
    protected $value;

    /**
     * @Serializer\SerializedName("title")
     * @Serializer\Type("string")
     * @var string
     */
    protected $title;

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("objectType")
     * @Serializer\Type("string")
     * @return string
     */
	public function getType()
	{
		return 'TOCDefinition';
	}

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
