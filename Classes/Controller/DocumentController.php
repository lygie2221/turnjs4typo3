<?php
namespace Te\Turnjs4typo3\Controller;


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
 * DocumentController
 */
class DocumentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * documentRepository
     * 
     * @var \Te\Turnjs4typo3\Domain\Repository\DocumentRepository
     * @inject
     */
    protected $documentRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
     //   $documents = $this->documentRepository->findAll();
      //  $this->view->assign('documents', $documents);


        $pidList = $this->configurationManager->getConfiguration(
            \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK
        )['persistence']['storagePid'];


        if(empty($pidList)){


            $pid=$GLOBALS['TSFE']->id;

            $objectManager =
                \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
            $defaultQuerySettings =
                $objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
            $defaultQuerySettings->setStoragePageIds([$pid]);

            $this->documentRepository->setDefaultQuerySettings($defaultQuerySettings);
        }

        $documents = $this->documentRepository->findAll();
        $this->view->assign('documents', $documents);

    }

    /**
     * action show
     * 
     * @param \Te\Turnjs4typo3\Domain\Model\Document $document
     * @return void
     */
    public function showAction(\Te\Turnjs4typo3\Domain\Model\Document $document)
    {
        $this->view->assign('document', $document);
    }
}
