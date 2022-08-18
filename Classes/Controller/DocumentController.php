<?php
namespace Te\Turnjs4typo3\Controller;


use Te\Turnjs4typo3\Domain\Model\Document;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

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
class DocumentController extends ActionController 	implements \TYPO3\CMS\Extbase\Mvc\Controller\ControllerInterface
{


    /**
     * documentRepository
     * 
     * @var \Te\Turnjs4typo3\Domain\Repository\DocumentRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $documentRepository = null;

    /**
     * @param \Te\Turnjs4typo3\Domain\Repository\DocumentRepository $documentRepository
     */
    public function injectDocumentRepository(\Te\Turnjs4typo3\Domain\Repository\DocumentRepository $documentRepository)
    {
        $this->documentRepository = $documentRepository;
    }

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


        if(array_key_exists("display",$this->settings) && $this->settings["display"] > 0){
            $this->view->assign('singlePid', $this->settings["display"]);
        }


        $this->view->assign('documents', $documents);

    }

    private function parseSetting($document){
        $settings=[];
        $keys=[
            "acceleration",
            "autoCenter",
            "direction",
            "display",
            "duration",
            "gradients",
            "height",
            "elevation",
            "page",
            "pages",
            "turnCorners",
            "when",
            "width",
            "zoom"
        ];
        foreach(array_values($keys) as $key){
            $getter='get'.ucfirst(strtolower($key));
            if(method_exists($document,$getter)) {
                if($document->$getter()){
                    $settings[$key] = str_replace(";",",",$document->$getter());
                }
            }
            $getter='is'.ucfirst(strtolower($key));
            if(method_exists($document,$getter)) {
                $settings[$key] = $document->$getter();
            }

        }
        return json_encode($settings);
    }

    /**
     * action show
     * 
     * @param Document $document
     * @return void
     */
    public function showAction(Document $document = null)
    {
        $this->view->assign('autosize', json_encode($document->isAutosize()));
        $this->view->assign('settings', $this->parseSetting($document));
        $this->view->assign('document', $document);
    }
}
