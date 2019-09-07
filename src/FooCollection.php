<?php

namespace Example;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

 /**
  * @template-extends ArrayCollection<int,Foo>
  */
 class FooCollection extends ArrayCollection implements Collection
 {

 }