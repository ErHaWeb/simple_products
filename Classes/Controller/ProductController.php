<?php

declare(strict_types=1);

namespace ErHaWeb\SimpleProducts\Controller;


/**
 * This file is part of the "Simple Products" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Eric Harrer <info@eric-harrer.de>, eric-harrer.de
 */

/**
 * ProductController
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * productRepository
     *
     * @var \ErHaWeb\SimpleProducts\Domain\Repository\ProductRepository
     */
    protected $productRepository;
    public function __construct()
    {
    }

    /**
     * @param \ErHaWeb\SimpleProducts\Domain\Repository\ProductRepository $productRepository
     */
    public function injectProductRepository(\ErHaWeb\SimpleProducts\Domain\Repository\ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \ErHaWeb\SimpleProducts\Domain\Model\Product $product
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\ErHaWeb\SimpleProducts\Domain\Model\Product $product): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('product', $product);
        return $this->htmlResponse();
    }
}
