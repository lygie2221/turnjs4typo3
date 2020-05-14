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
     * settings
     * 
     * @var string
     */
    protected $settings = '';

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
     * Returns the settings
     * 
     * @return string $settings
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Sets the settings
     * 
     * @param string $settings
     * @return void
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;
    }


}
