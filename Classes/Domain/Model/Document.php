<?php
namespace Te\Turnjs4typo3\Domain\Model;


/***
 *
 * This file is part of the "TurnJs4Typo3" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Tobias Eichelbrönner <newsletter@lygie.de>, LAMP solutions GmbH
 *
 ***/
/**
 * Document
 */
class Document extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {

        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();

    }

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $images = null;

    /**
     * name
     *
     * @var boolean
     */
    protected $autosize = true;

    /**
     * name
     *
     * @var boolean
     */
    protected $acceleration = true;

    /**
     * name
     *
     * @var boolean
     */
    protected $autocenter = false;

    /**
     * name
     *
     * @var string
     */
    protected $direction = 'ltr';//select, lrt,rtl

    /**
     * name
     *
     * @var string
     */
    protected $display = '';//select, double,single

    /**
     * name
     *
     * @var int
     */
    protected $duration = 600;

    /**
     * name
     *
     * @var boolean
     */
    protected $gradients = true;

    /**
     * name
     *
     * @var int
     */
    protected $height = 0;

    /**
     * name
     *
     * @var int
     */
    protected $elevation = 0;

    /**
     * name
     *
     * @var int
     */
    protected $page = 1;

    /**
     * name
     *
     * @var int
     */
    protected $pages = 0;

    /**
     * name
     *
     * @var string
     */
    protected $turncorners = 'bl,br';//select bl,br or tl,tr or bl,tr

    /**
     * name
     *
     * @var string
     */
    protected $when = '';//function

    /**
     * name
     *
     * @var int
     */
    protected $width = 0;

    /**
     * name
     *
     * @var int
     */
    protected $zoom = 0;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



    /**
     * Returns the Images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     *
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the Images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $images)
    {
        $this->images = $images;
    }

    /**
     * Removes a Images
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bildToRemove The UploadFile to be removed
     * @return void
     */
    public function removeImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove) {
        $this->Images->detach($imageToRemove);
    }

    /**
     * Adds a Images
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bildorbisplus
     * @return void
     */
    public function addImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
        $this->Images->attach($image);
    }

    /**
     * @return bool
     */
    public function isAutosize()
    {
        return $this->autosize;
    }

    /**
     * @param bool $autosize
     */
    public function setAutosize($autosize)
    {
        $this->autosize = $autosize;
    }


    /**
     * @return bool
     */
    public function isAcceleration()
    {
        return $this->acceleration;
    }

    /**
     * @param bool $acceleration
     */
    public function setAcceleration($acceleration)
    {
        $this->acceleration = $acceleration;
    }

    /**
     * @return bool
     */
    public function isAutocenter()
    {
        return $this->autocenter;
    }

    /**
     * @param bool $autoCenter
     */
    public function setAutocenter($autocenter)
    {
        $this->autocenter = $autocenter;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param string $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return bool
     */
    public function isGradients()
    {
        return $this->gradients;
    }

    /**
     * @param bool $gradients
     */
    public function setGradients($gradients)
    {
        $this->gradients = $gradients;
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
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * @param int $elevation
     */
    public function setElevation($elevation)
    {
        $this->elevation = $elevation;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param int $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    /**
     * @return string
     */
    public function getTurncorners()
    {
        return $this->turnCorners;
    }

    /**
     * @param string $turncorners
     */
    public function setTurncorners($turncorners)
    {
        $this->turncorners = $turncorners;
    }

    /**
     * @return string
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * @param string $when
     */
    public function setWhen($when)
    {
        $this->when = $when;
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
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getZoom()
    {
        return $this->zoom;
    }

    /**
     * @param int $zoom
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;
    }




}
