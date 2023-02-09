<?php

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("ALL")
 */
class ItemImage
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $id;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $itemId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $position;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $width;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $height;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $size;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $documentUploadPreviewWidth;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $documentUploadPreviewHeight;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $type;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $fileType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $path;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $storageProviderId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $md5Checksum;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $md5ChecksumOriginal;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $cleanImageName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $url;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $urlMiddle;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $urlPreview;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $urlSecondPreview;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $createdAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $updatedAt;

    /**
     * @var ItemImageName[]|array
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Item\ItemImageName>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $names;

    /**
     * @var ItemImageAvailability[]|array
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Item\ItemImageAvailability>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $availabilities;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return ItemImage
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     *
     * @return ItemImage
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return ItemImage
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return ItemImage
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return ItemImage
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return ItemImage
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentUploadPreviewWidth()
    {
        return $this->documentUploadPreviewWidth;
    }

    /**
     * @param int $documentUploadPreviewWidth
     *
     * @return ItemImage
     */
    public function setDocumentUploadPreviewWidth($documentUploadPreviewWidth)
    {
        $this->documentUploadPreviewWidth = $documentUploadPreviewWidth;

        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentUploadPreviewHeight()
    {
        return $this->documentUploadPreviewHeight;
    }

    /**
     * @param int $documentUploadPreviewHeight
     *
     * @return ItemImage
     */
    public function setDocumentUploadPreviewHeight($documentUploadPreviewHeight)
    {
        $this->documentUploadPreviewHeight = $documentUploadPreviewHeight;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return ItemImage
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param string $fileType
     *
     * @return ItemImage
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return ItemImage
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getStorageProviderId()
    {
        return $this->storageProviderId;
    }

    /**
     * @param string $storageProviderId
     *
     * @return ItemImage
     */
    public function setStorageProviderId($storageProviderId)
    {
        $this->storageProviderId = $storageProviderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getMd5Checksum()
    {
        return $this->md5Checksum;
    }

    /**
     * @param string $md5Checksum
     *
     * @return ItemImage
     */
    public function setMd5Checksum($md5Checksum)
    {
        $this->md5Checksum = $md5Checksum;

        return $this;
    }

    /**
     * @return string
     */
    public function getMd5ChecksumOriginal()
    {
        return $this->md5ChecksumOriginal;
    }

    /**
     * @param string $md5ChecksumOriginal
     *
     * @return ItemImage
     */
    public function setMd5ChecksumOriginal($md5ChecksumOriginal)
    {
        $this->md5ChecksumOriginal = $md5ChecksumOriginal;

        return $this;
    }

    /**
     * @return string
     */
    public function getCleanImageName()
    {
        return $this->cleanImageName;
    }

    /**
     * @param string $cleanImageName
     *
     * @return ItemImage
     */
    public function setCleanImageName($cleanImageName)
    {
        $this->cleanImageName = $cleanImageName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return ItemImage
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlMiddle()
    {
        return $this->urlMiddle;
    }

    /**
     * @param string $urlMiddle
     *
     * @return ItemImage
     */
    public function setUrlMiddle($urlMiddle)
    {
        $this->urlMiddle = $urlMiddle;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlPreview()
    {
        return $this->urlPreview;
    }

    /**
     * @param string $urlPreview
     *
     * @return ItemImage
     */
    public function setUrlPreview($urlPreview)
    {
        $this->urlPreview = $urlPreview;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlSecondPreview()
    {
        return $this->urlSecondPreview;
    }

    /**
     * @param string $urlSecondPreview
     *
     * @return ItemImage
     */
    public function setUrlSecondPreview($urlSecondPreview)
    {
        $this->urlSecondPreview = $urlSecondPreview;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return ItemImage
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     *
     * @return ItemImage
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return array|ItemImageName[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param array|ItemImageName[] $names
     *
     * @return ItemImage
     */
    public function setNames($names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * @return array|ItemImageAvailability[]
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * @param array|ItemImageAvailability[] $availabilities
     *
     * @return ItemImage
     */
    public function setAvailabilities($availabilities)
    {
        $this->availabilities = $availabilities;

        return $this;
    }

}