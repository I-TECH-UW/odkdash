<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SpiV3Controller extends AbstractActionController
{

    public function indexAction()
    {
        $odkFormService = $this->getServiceLocator()->get('OdkFormService');
        $allSubmissions = $odkFormService->getAllSubmissions();        
        return new ViewModel(array(
                                   'allSubmissions' => $allSubmissions,
                                   ));
    }

    public function printAction()
    {
        
        $id = ($this->params()->fromRoute('id'));
        $odkFormService = $this->getServiceLocator()->get('OdkFormService');
        $formData = $odkFormService->getFormData($id);
        
        $viewModel = new ViewModel(array('formData' => $formData));
        
        $viewModel->setTerminal(true);
        return $viewModel;
    }

    public function exportAction()
    {
        
        $odkFormService = $this->getServiceLocator()->get('OdkFormService');
        $allSubmissions = $odkFormService->getAllSubmissions('ASC');
        
        $viewModel = new ViewModel(array('allSubmissions' => $allSubmissions));
        
        $viewModel->setTerminal(true);
        return $viewModel;
    }

    public function approveStatusAction(){
        $request = $this->getRequest();                
         if ($request->isPost()) {
            $params = $request->getPost();
            $odkFormService = $this->getServiceLocator()->get('OdkFormService');
            $result= $odkFormService->approveFormStatus($params['id']);
            $viewModel = new ViewModel(array(
                        'result' => $result
                    ));
            $viewModel->setTerminal(true);
            return $viewModel;
        }
    }
}

