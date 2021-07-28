<?php

namespace Engine\Service;

abstract class AbstractProvider 
{
		/**
		 *@var \Engine\Di\Di;
		 *
		 */
		protected $di;

		public function __construct (\Engine\Di\Di $di)
		{
				$this->di = $di;
		}

		abstract function init ();
}
?>
