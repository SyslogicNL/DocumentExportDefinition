<?php
namespace DocumentExportDefinition\Section\Html;

use DocumentExportDefinition\Section\AbstractDataDefinition;
use JMS\Serializer\Annotation as Serializer;

class HtmlDefinition extends AbstractDataDefinition
{
	/**
	 * @Serializer\SerializedName("images")
	 * @Serializer\Type("array<string,DocumentExportDefinition\Section\Html\HtmlImageDefinition>")
	 * @var array
	 */
	protected $images = [];

	/**
	 * @Serializer\SerializedName("useStrictStyles")
	 * @Serializer\Type("boolean")
	 */
	protected $useStrictStyles = true;

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("objectType")
     * @Serializer\Type("string")
     * @return string
     */
	public function getType()
	{
		return 'HtmlDefinition';
	}

	/**
	 * @param HtmlImageDefinition $image
	 */
	public function addImage(HtmlImageDefinition $image)
	{
		$this->images[$image->getFileId()] = $image;
	}

	/**
	 * @return array
	 */
	public function getImages()
	{
		return $this->images;
	}

    /**
     * @param $useStrictStyles
     */
    public function setUseStrictStyles($useStrictStyles)
	{
		$this->useStrictStyles = $useStrictStyles;
	}

    /**
     * @return bool
     */
    public function getUseStrictStyles()
	{
		return $this->useStrictStyles;
	}
}
