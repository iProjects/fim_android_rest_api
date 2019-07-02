
<?php
  
class Singleton {
public static function getInstance() {
// Static variable $instance is not deleted when the function ends
static $instance;
// Second call to this function will not get into the if-statement,
// Because an instance of Singleton is now stored in the $instance
// variable and is persisted through multiple calls
if (!$instance) {
// First call to this function will reach this line,
// because the $instance has only been declared, not initialized
$instance = new Singleton();
} 
return $instance;
}
}
    
?> 

























