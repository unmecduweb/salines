<?php
namespace LL\CoreBundle\Listener;
/**
 * This is to show admin menu on each views when user is granted admin
 *
 * @author jona
 */
class AdminMenu 
{
    
    private $security;
    private $twig;
    private $adminEntities;
    private $adminMenu;
    
    public function __construct(\Symfony\Component\Security\Core\SecurityContext $security,\Twig_Environment $twig,$adminEntities,$adminMenu) 
    {
        $this->security = $security;
        $this->twig = $twig;
        $this->adminEntities = $adminEntities;
        $this->adminMenu = $adminMenu;
    }
    
    public function showMenu(\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
//        if ($event->isMasterRequest() && $this->security->isGranted('ROLE_ADMIN'))
//        {
            $response = $event->getResponse();
            $menu = $this->twig->render('LLCoreBundle::menu.html.twig',['adminEntities'=>$this->adminEntities,'adminMenu'=>$this->adminMenu]);
            
            if (preg_match('#<html#', $response->getContent()))
            {
                $response->setContent(preg_replace('#(<body[ a-zA-Z0-9\"\'=_-]*>)#', '$1'.$menu, $response->getContent()));
            }
            
            
            return $response;
//        }
        
        
    }

}
