<?php   
class Myclass
{
 public $font_size ="40px";
 public $font_color = "red";
 public $string_name = "Samsung TV";
 public function customize_print()
 {
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_name."</p>";
 }
}

?>