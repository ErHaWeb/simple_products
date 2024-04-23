<?php

declare(strict_types=1);

namespace ErHaWeb\SimpleProducts\Domain\Model;


/**
 * This file is part of the "Simple Products" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Eric Harrer <info@eric-harrer.de>, eric-harrer.de
 */

/**
 * Product
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * This is the product title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title;

    /**
     * This is the slug generated based on the title
     *
     * @var string
     */
    protected $slug;

    /**
     * This is the product description
     *
     * @var string
     */
    protected $description;

    /**
     * This is the price
     *
     * @var float
     */
    protected $price;

    /**
     * Images of the product
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $images;

    /**
     * Arbitrary files to download for this product
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $downloads;

    /**
     * category
     *
     * @var int
     */
    protected $category;

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Sets the slug
     *
     * @param string $slug
     * @return void
     */
    public function setSlug(string $slug)
    {
        $this->slug = $slug;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     *
     * @param float $price
     * @return void
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $images)
    {
        $this->images = $images;
    }

    /**
     * Returns the downloads
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getDownloads()
    {
        return $this->downloads;
    }

    /**
     * Sets the downloads
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $downloads
     * @return void
     */
    public function setDownloads(\TYPO3\CMS\Extbase\Domain\Model\FileReference $downloads)
    {
        $this->downloads = $downloads;
    }

    /**
     * Returns the category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param int $category
     * @return void
     */
    public function setCategory(int $category)
    {
        $this->category = $category;
    }
}
