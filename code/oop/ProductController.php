<?php

class ProductController extends AbstractController {

    private $productManager;
    private $validator;

    public function __construct(ProductManager $productManager, IFormValidator $validator) {
        $this->productManager = $productManager;
        $this->validator = $validator;
    }

    public function addPage() {
        if ($this->validator->verify()) {
            
            $product = new Product();
            $product->setNom($_POST['nom']);
            $product->setPrix($_POST['prix']);

            $this->productManager->add($product);
        }
        $this->render('/ajout.html');
    }

    public function catalogPage() {
        $velos = $this->productManager->list();
        $this->render('/catalog.html.php');
    }
}

?>