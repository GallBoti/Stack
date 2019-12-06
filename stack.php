<?php

	class stack
	{

		protected $stack;
		protected $limit;

		public function __construct($limit = 7, $default = [])
		{
			$this->stack = $default;
			$this->limit = $limit;
		}

		public function stackPush($item)
		{
			if (!$this->stackIsFull())
			{
				return array_unshift($this->stack, $item);
			}
			else
			{
				return $this->stackIsFullWarningDisplay();
			}
		}

		public function stackIsEmpty()
		{
			return ($this->stackDepth() == 0);
		}

		public function stackIsEmptyWarningDisplay()
		{
			return print("<p>Stack is empty</p>");
		}

		public function stackIsFull()
		{
			return ($this->stackDepth() > $this->limit);
		}

		public function stackIsFullWarningDisplay()
		{
			return print("<p>Stack is full</p>");
		}

		public function stackPop()
		{
			if ($this->stackIsEmpty())
			{
				return $this->stackIsEmptyWarningDisplay();
			}
			else
			{
				return array_shift($this->stack);
			}
		}

		public function stackTop()
		{
			return current($this->stack);
		}

		public function stackDisplay()
		{
			return print(implode(', ', $this->stack));
		}

		public function stackToJson()
		{
			return json_encode($this->stack);
		}

		public function stackDepth()
		{
			return count($this->stack);
		}

		public function stackLimit()
		{
			return $this->limit;
		}

		public function stackDestroy()
		{
			unset($this->stack);
			return true;
		}

	}