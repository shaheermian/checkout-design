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

        /*$productTrial = new \stdClass();
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
        $priceMaximum->price = 349.95;*/
		
		$productSingle = new \stdClass();
		$productSingle->id = 1;
		$productSingle->name = 'SINGLE PRODUCT';
		$productSingle->listPrice = 384;
		$productSingle->listPricePre = (strpos($productSingle->listPrice,'.') > -1) ? ''.$this->pricePreDec($productSingle->listPrice).'' : ''.$productSingle->listPrice.'';
		$productSingle->listPricePost = (strpos($productSingle->listPrice,'.') > -1) ? ''.$this->pricePostDec($productSingle->listPrice).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productSingle->price = 130.95;
		$productSingle->pricePre = (strpos($productSingle->price,'.') > -1) ? ''.$this->pricePreDec($productSingle->price).'' : ''.$productSingle->price.'';
		$productSingle->pricePost = (strpos($productSingle->price,'.') > -1) ? ''.$this->pricePostDec($productSingle->price).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productSingle->shippingPrice = 45;
		$productSingle->shippingText = 'Priority Shipping';
		$productSingle->total = $productSingle->price + $productSingle->shippingPrice;
		
		$productBundleOffer = new \stdClass();
		$productBundleOffer->id = 2;
		$productBundleOffer->name = 'BUY 2 GET 1 FREE';
		$productBundleOffer->listPrice = 384;
		$productBundleOffer->listPricePre = (strpos($productBundleOffer->listPrice,'.') > -1) ? ''.$this->pricePreDec($productBundleOffer->listPrice).'' : ''.$productBundleOffer->listPrice.'';
		$productBundleOffer->listPricePost = (strpos($productBundleOffer->listPrice,'.') > -1) ? ''.$this->pricePostDec($productBundleOffer->listPrice).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productBundleOffer->price = 130.95;
		$productBundleOffer->pricePre = (strpos($productBundleOffer->price,'.') > -1) ? ''.$this->pricePreDec($productBundleOffer->price).'' : ''.$productBundleOffer->price.'';
		$productBundleOffer->pricePost = (strpos($productBundleOffer->price,'.') > -1) ? ''.$this->pricePostDec($productBundleOffer->price).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productBundleOffer->shippingPrice = 45;
		$productBundleOffer->shippingText = 'Priority Shipping';
		$productBundleOffer->total = $productBundleOffer->price + $productBundleOffer->shippingPrice;

		$productStarter = new \stdClass();
		$productStarter->id = 3;
		$productStarter->name = 'STARTER';
		$productStarter->listPrice = 157.90;
		$productStarter->listPricePre = (strpos($productStarter->listPrice,'.') > -1) ? ''.$this->pricePreDec($productStarter->listPrice).'' : ''.$productStarter->listPrice.'';
		$productStarter->listPricePost = (strpos($productStarter->listPrice,'.') > -1) ? ''.$this->pricePostDec($productStarter->listPrice).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productStarter->price = 78.95;
		$productStarter->pricePre = (strpos($productStarter->price,'.') > -1) ? ''.$this->pricePreDec($productStarter->price).'' : ''.$productStarter->price.'';
		$productStarter->pricePost = (strpos($productStarter->price,'.') > -1) ? ''.$this->pricePostDec($productStarter->price).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productStarter->shippingPrice = 0;
		$productStarter->shippingText = 'Free Priority Shipping';
		$productStarter->total = $productStarter->price + $productStarter->shippingPrice;
		
		$productLarge = new \stdClass();
		$productLarge->id = 4;
		$productLarge->name = 'LARGE';
		$productLarge->listPrice = 261.90;
		$productLarge->listPricePre = (strpos($productLarge->listPrice,'.') > -1) ? ''.$this->pricePreDec($productLarge->listPrice).'' : ''.$productLarge->listPrice.'';
		$productLarge->listPricePost = (strpos($productLarge->listPrice,'.') > -1) ? ''.$this->pricePostDec($productLarge->listPrice).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productLarge->price = 130.95;
		$productLarge->pricePre = (strpos($productLarge->price,'.') > -1) ? ''.$this->pricePreDec($productLarge->price).'' : ''.$productLarge->price.'';
		$productLarge->pricePost = (strpos($productLarge->price,'.') > -1) ? ''.$this->pricePostDec($productLarge->price).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productLarge->shippingPrice = 0;
		$productLarge->shippingText = 'Free Priority Shipping';
		$productLarge->total = $productLarge->price + $productLarge->shippingPrice;
		
		$productMaximum = new \stdClass();
		$productMaximum->id = 5;
		$productMaximum->name = 'MAXIMUM';
		$productMaximum->listPrice = 384;
		$productMaximum->listPricePre = (strpos($productMaximum->listPrice,'.') > -1) ? ''.$this->pricePreDec($productMaximum->listPrice).'' : ''.$productMaximum->listPrice.'';
		$productMaximum->listPricePost = (strpos($productMaximum->listPrice,'.') > -1) ? ''.$this->pricePostDec($productMaximum->listPrice).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productMaximum->price = 192;
		$productMaximum->pricePre = (strpos($productMaximum->price,'.') > -1) ? ''.$this->pricePreDec($productMaximum->price).'' : ''.$productMaximum->price.'';
		$productMaximum->pricePost = (strpos($productMaximum->price,'.') > -1) ? ''.$this->pricePostDec($productMaximum->price).'' : ''; //currently set to show nothing in the <sup> tag. You can change it to '00' if you want.
		$productMaximum->shippingPrice = 0;
		$productMaximum->shippingText = 'Free Priority Shipping';
		$productMaximum->total = $productMaximum->price + $productMaximum->shippingPrice;
		
		

        $currentItem = new \stdClass();
        $currentItem->product = new \stdClass();
        $currentItem->product->id = 5;

        $form = $this->createFormBuilder()
            ->add('shippingAddress')
            ->add('shippingCity')
            ->add('shippingZip')
            ->getForm()
            ;

        /*return array(
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
        );*/
		return array(
            'entity' => $entity,
            'form' => $form->createView(),
            'productSingle' => $productSingle,
            'productBundleOffer' => $productBundleOffer,
            'productStarter' => $productStarter,
            'productLarge' => $productLarge,
            'productMaximum' => $productMaximum,
            'currentItem' => $currentItem,
            'quickpay_agreementid' => '1778',
            'quickpay_merchantid' => '713',
        );
    }

    public function pricePreDec($price)
	{
		$price = number_format((float)$price, 2, '.', '');
		$brokenprice = array();
		$brokenprice = explode('.',$price, 2);
		//whether or not their is a decimal, we will always return the first element, we just check for decimal.
		if(sizeof($brokenprice) == 2)
			return ''.$brokenprice[0].'.';//returning as string as this will only be used for display
		else
			return ''.$brokenprice[0].'';//returning as string as this will only be used for display
	}
	public function pricePostDec($price)
	{
		$price = number_format((float)$price, 2, '.', '');
		$brokenprice = array();
		$brokenprice = explode('.',$price, 2);
		if(sizeof($brokenprice) == 2)
			return ''.$brokenprice[1].''; //returning as string as this will only be used for display
		else
			return '00'; //returning as string as this will only be used for display
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
