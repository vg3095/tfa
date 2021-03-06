<?php
/**
 * @file \Drupal\tfa\Routing\TfaRouteSubscriber
 * Contains class implementation for \Drupal\tfa\Routing\TfaRouteSubscriber
 */

namespace Drupal\tfa\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;


/**
 * Listens to the dynamic route events.
 *
 * Class TfaRouteSubscriber
 * @package Drupal\tfa\Routing
 */
class TfaRouteSubscriber extends RouteSubscriberBase {

  /**
   * Overrides user.login route with our custom login form.
   *
   * @param \Symfony\Component\Routing\RouteCollection $collection
   */
  public function alterRoutes(RouteCollection $collection){
    //Change path of user login to our overridden TFA login form.
    if ($route = $collection->get('user.login')){
      //$route->setPath('/tfalogin');
      $route->setDefault('_form', '\Drupal\tfa\Form\TfaLoginForm');
    }

  }

}