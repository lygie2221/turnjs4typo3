<?php
namespace Te\Turnjs4typo3\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Tobias Eichelbrönner <newsletter@lygie.de>
 */
class DocumentControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Te\Turnjs4typo3\Controller\DocumentController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Te\Turnjs4typo3\Controller\DocumentController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllDocumentsFromRepositoryAndAssignsThemToView()
    {

        $allDocuments = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $documentRepository = $this->getMockBuilder(\Te\Turnjs4typo3\Domain\Repository\DocumentRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $documentRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDocuments));
        $this->inject($this->subject, 'documentRepository', $documentRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('documents', $allDocuments);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDocumentToView()
    {
        $document = new \Te\Turnjs4typo3\Domain\Model\Document();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('document', $document);

        $this->subject->showAction($document);
    }
}
