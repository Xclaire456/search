   <?php
   $items = ['Produk A', 'Produk B', 'Artikel C', 'Artikel D'];

   function searchItems($query) {
       global $items;
       return array_filter($items, function($item) use ($query) {
           return stripos($item, $query) !== false;
       });
   }
   ?>
   