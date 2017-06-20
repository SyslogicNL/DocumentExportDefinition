<?php
namespace DocumentExportDefinition\Section\Data;

use DocumentExportDefinition\Section\AbstractDataDefinition;
use JMS\Serializer\Annotation as Serializer;

class TOCDefinition extends AbstractDataDefinition
{
    /**
     * @Serializer\VirtualProperty
     */
	public function getType()
	{
		return 'TOCDefinition';
	}
}
