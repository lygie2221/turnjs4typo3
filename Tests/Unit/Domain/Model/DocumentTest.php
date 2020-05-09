<?php
namespace Te\Turnjs4typo3\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Tobias Eichelbrönner <newsletter@lygie.de>
 */
class DocumentTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Te\Turnjs4typo3\Domain\Model\Document
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Te\Turnjs4typo3\Domain\Model\Document();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getImagesReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImages()
        );
    }

    /**
     * @test
     */
    public function setImagesForFileReferenceSetsImages()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImages($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'images',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSettingsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSettings()
        );
    }

    /**
     * @test
     */
    public function setSettingsForStringSetsSettings()
    {
        $this->subject->setSettings('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'settings',
            $this->subject
        );
    }
}
