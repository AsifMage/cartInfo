Basic Magento Functions to get Cart Information 
Total items added in cart 
<?php 
Mage::getModel(‘checkout/cart’)->getQuote()->getItemsCount(); 
Mage::getSingleton(‘checkout/session’)->getQuote()->getItemsCount(); 
?> 
Total Quantity added in cart 
<?php 
Mage::getModel(‘checkout/cart’)->getQuote()->getItemsQty(); 
Mage::getSingleton(‘checkout/session’)->getQuote()->getItemsQty(); 
?> 
Sub Total for item added in cart 
<?php 
Mage::getModel(‘checkout/cart’)->getQuote()->getSubtotal(); 
Mage::getSingleton(‘checkout/session’)->getQuote()->getSubtotal(); 
?> 
Grand total for item added in cart 
<?php 
Mage::helper(‘checkout’)->formatPrice(Mage::getModel(‘checkout/cart’)->getQuote()->getGrandTotal()); 
Mage::helper(‘checkout’)->formatPrice(Mage::getSingleton(‘checkout/session’)->getQuote()->getGrandTotal()); 
?> 
Get products id, name, price, quantity, etc. present in your cart 
<?php 
// $items = Mage::getModel(‘checkout/cart’)->getQuote()->getAllItems(); 
$items = Mage::getSingleton(‘checkout/session’)->getQuote()->getAllItems(); 
foreach($items as $item) { 
echo ‘ID: ‘.$item->getProductId().'<br />'; 
echo ‘Name: ‘.$item->getName().'<br />'; 
echo ‘Sku: ‘.$item->getSku().'<br />'; 
echo ‘Quantity: ‘.$item->getQty().'<br />'; 
echo ‘Price: ‘.$item->getPrice().'<br />'; 
echo “<br />”; 
} 
?> 
Get number of items in cart and total quantity in cart 
<?php 
$totalItems = Mage::getModel(‘checkout/cart’)->getQuote()->getItemsCount(); 
$totalQuantity = Mage::getModel(‘checkout/cart’)->getQuote()->getItemsQty(); 
?>
