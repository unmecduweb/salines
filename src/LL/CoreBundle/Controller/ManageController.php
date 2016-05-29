<?php

namespace LL\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ManageController extends Controller
{
      
    
    public function indexAction()
    {
        return $this->render('LLCoreBundle::index.html.twig');
    }
    
    public function viewAction($entityAlias, $id)
    {
        //Appel les paramètes du bundle présent ds config.yml
        $adminParams = $this->container->getParameter('ll_core.entities');
        //Récupère le tableau de valeur correspondant à l'entité listé
        $entityParams = $adminParams[$entityAlias];

        //Appel entityManager
        $em = $this->getDoctrine()->getManager();

        //Appel le repository de l'entité visionné
        $entityRepo = $em->getRepository($entityParams['class']);
        
      
        $entityEdit = $entityRepo->findOneBy(array('id' => $id, 'status'=>1));
        
        $output = array(
            'entity' => $entityView,
            'id' => $id,
            'entityAlias' => $entityAlias
        );
        
        return $this->render('LLCoreBundle:'.$entityParams['views'].':view.html.twig', $output);
    }
    
    
    
    public function listAction($entityAlias, Request $request) {


//        if (class_exists('LE\\AdminBundle\\Controller\\' . ucfirst($entity) . 'Controller') && method_exists('LE\\AdminBundle\\Controller\\' . ucfirst($entity) . 'Controller', 'listAction')) {
//            return $this->forward('LLCoreBundle:' . ucfirst($entity) . ':list', ['entity' => $entity, 'request' => $request]);
//        }
        
        //Appel les paramètes du bundle présent ds config.yml
        $adminParams = $this->container->getParameter('ll_core.entities');
        //Récupère le tableau de valeur correspondant à l'entité listé
        $entityParams = $adminParams[$entityAlias];

        //Appel entityManager
        $em = $this->getDoctrine()->getManager();

        //Appel le repository de l'entité visionné
        $entityRepo = $em->getRepository($entityParams['class']);
        //Appel la liste des items qui compose cette entité
        $entities = $entityRepo->findBy(array('status'=>1));
        

        if (null === $entities || !count($entities) && (isset($entityParams['unique']) && $entityParams['unique'] == true)) {
            $entity = new $entityParams['class'];
            $em->persist($entity);
            $em->flush();

            $entities = new \Doctrine\Common\Collections\ArrayCollection();
            $entities->add($entity);
        }

        return $this->render('LLCoreBundle:'.$entityParams['views'].':list.html.twig', [
            'entityAlias'=> $entityAlias,
            'entities' => $entities, 
            'entityParams' => $entityParams
        ]);
    }
    
    public function editAction($entityAlias, $id, Request $request) {
        
        //Appel les paramètes du bundle présent ds config.yml
        $adminParams = $this->container->getParameter('ll_core.entities');
        //Récupère le tableau de valeur correspondant à l'entité listé
        $entityParams = $adminParams[$entityAlias];

        //Appel entityManager
        $em = $this->getDoctrine()->getManager();

        //Appel le repository de l'entité visionné
        $entityRepo = $em->getRepository($entityParams['class']);
        
        if ($id != "undefined" && $id!==null  && $id!=='new') {
            $entityEdit = $entityRepo->findOneBy(array('id' => $id, 'status'=>1));
        } else {
            $entityEdit = new $entityParams['class'];
        }

        $form = $this->createForm(new $entityParams['form'], $entityEdit, array(
            'action' => $this->generateUrl('ll_edit_entity', ['entityAlias'=>$entityAlias, 'id' => $id])
        ));

        $form->handleRequest($request);
        //lorsqu'on envoit la modal
        if ($form->isValid()) {
            
            if($entityAlias=="production"){
                foreach ($entityEdit->getProductQuantity() as $key=>$product){
                    $entityEdit->getProductQuantity()[$key]->setProduction($entityEdit);

                }
            }
            
            $em->persist($entityEdit);
            $em->flush();

            $output = array(
                'type' => 'success',
                'textTrans' => "Modifié avec succès !",
                'success' => true,
            );
           
            // redirige sur la liste des entit"s
            $this->redirect($this->generateUrl('ll_list_entity', ['entityAlias' => $entityAlias]));
            
        } else {
            //AJAX VERSION
            if ($request->isXmlHttpRequest()) {
                $output = array(
                    'success' => true,
                    'form' => $this->renderView('LLCoreBundle:'.$entityParams['views'].':modal-edit-entity.html.twig', [
                        'form' => $form->createView(),
                        'entity' => $entityEdit,
                        'id' => $id
                    ])
                );
                
            }
        }

        if ($request->isXmlHttpRequest()) {
            $response = new Response();

            $response->headers->set('Content-Type', 'application/json');
            $response->setContent(json_encode($output));
            return $response;
        }else{
            $output = array(
                'form' => $form->createView(),
                'entity' => $entityEdit,
                'id' => $id,
                'entityAlias' => $entityAlias
            );
            
            return $this->render('LLCoreBundle:'.$entityParams['views'].':edit.html.twig', $output);
        }
    }

    public function deleteAction($entityAlias, $id)
    {
        //Appel les paramètes du bundle présent ds config.yml
        $adminParams = $this->container->getParameter('ll_core.entities');
        //Récupère le tableau de valeur correspondant à l'entité listé
        $entityParams = $adminParams[$entityAlias];

        //Appel entityManager
        $em = $this->getDoctrine()->getManager();

        //Appel le repository de l'entité visionné
        $entityRepo = $em->getRepository($entityParams['class']);
        
      
        $entityEdit = $entityRepo->find($id);

        $entityEdit->setStatus(0);
        
        $em->persist($entityEdit);
        $em->flush();

        $url = $this->generateUrl('ll_list_entity', ['entityAlias' => $entityAlias]);
        return $this->redirect($url);
    }
}
