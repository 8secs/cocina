<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 30/1/15
 * Time: 12:54
 */

class ChefProductForm extends Form{

    public function __construct($controller, $name){

        $product = new Product();

        $title = new TextField('Title', _t('Product.PAGETITLE', 'Product Title'));
        $urlSegment = new TextField('URLSegment', 'URL Segment');
        $menuTitle = new TextField('MenuTitle', 'Navigation Title');
        $sku = TextField::create('InternalItemID', _t('Product.CODE', 'Product Code/SKU'), '', 30);
        $categories = DropdownField::create('ParentID', _t("Product.CATEGORY", "Category"), $product->categoryoptions())
            ->setDescription(_t("Product.CATEGORYDESCRIPTION", "This is the parent page or default category."));
        $otherCategories = ListBoxField::create('ProductCategories', _t("Product.ADDITIONALCATEGORIES", "Additional Categories"),
            ProductCategory::get()
                ->filter("ID:not", $product->getAncestors()->map('ID', 'ID'))
                ->map('ID', 'NestedTitle')->toArray()
        )->setMultiple(true);
        $model = TextField::create('Model', _t('Product.MODEL', 'Model'), '', 30);
        $featured = CheckboxField::create('Featured', _t('Product.FEATURED', 'Featured Product'));
        $allow_purchase = CheckboxField::create('AllowPurchase', _t('Product.ALLOWPURCHASE', 'Allow product to be purchased'), 1, 'Content');
        $price = TextField::create('BasePrice', _t('Product.PRICE', 'Price'))
            ->setDescription(_t('Product.PRICEDESC', "Base price to sell this product at."))
            ->setMaxLength(12);
        $image = UploadField::create('Image', _t('Product.IMAGE', 'Product Image'));
        $content = new HtmlEditorField('Content', 'Content');


        $fields = new FieldList();
        $fields->add($title);
        //$fields->add($urlSegment);
        //$fields->add($menuTitle);
        //$fields->add($sku);
        $fields->add($categories);
        //$fields->add($otherCategories);

        $fields->add($model);
        $fields->add($featured);
        $fields->add($allow_purchase);
        $fields->add($price);
        $fields->add($image);
        $fields->add($content);

        //$fields = $product->getFrontEndFields();

        $actions = new FieldList(
            new FormAction('submit',_t("ChefProductForm.ADDPRODUCT",'Add product'))
        );

        $requiredFields = new RequiredFields(array(
            'Title',
            'Model',
            'Price'
        ));

        parent::__construct($controller, $name, $fields, $actions, $requiredFields);

    }

    public function submit($data, $form, $request){
        Debug::show("saveproduct");
        return print_r($data);
    }

} 