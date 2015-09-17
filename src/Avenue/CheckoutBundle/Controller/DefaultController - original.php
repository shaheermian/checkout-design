<?php

namespace Avenue\CheckoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("")
     * @Template()
     */
    public function indexAction()
    {
        $entity = new \stdClass();
        $entity->id = 1;

        $productTrial = new \stdClass();
        $productTrial->id = 1;

        $priceTrial = new \stdClass();
        $priceTrial->price = 100;

        $productStarter = new \stdClass();
        $productStarter->id = 2;

        $priceStarter = new \stdClass();
        $priceStarter->price = 100;

        $productPopular = new \stdClass();
        $productPopular->id = 3;

        $pricePopular = new \stdClass();
        $pricePopular->price = 100;

        $productMaximum = new \stdClass();
        $productMaximum->id = 4;

        $priceMaximum = new \stdClass();
        $priceMaximum->price = 349.95;

        $currentItem = new \stdClass();
        $currentItem->product = new \stdClass();
        $currentItem->product->id = 3;

        $form = $this->createFormBuilder()
            ->add('shippingAddress')
            ->add('shippingCity')
            ->add('shippingZip')
            ->getForm()
            ;

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
            'productTrial' => $productTrial,
            'priceTrial' => $priceTrial,
            'productStarter' => $productStarter,
            'priceStarter' => $priceStarter,
            'productPopular' => $productPopular,
            'pricePopular' => $pricePopular,
            'productMaximum' => $productMaximum,
            'priceMaximum' => $priceMaximum,
            'currentItem' => $currentItem,
            'quickpay_agreementid' => '1778',
            'quickpay_merchantid' => '713',
        );
    }

    /**
     * @Route("/meh", name="avenue_checkout_ajax_replaceproduct")
     */
    public function mehAction()
    {
    }

    /**
     * @Route("/mah", name="avenue_checkout_ajax_gatewayerror")
     */
    public function mahAction()
    {
    }
}
