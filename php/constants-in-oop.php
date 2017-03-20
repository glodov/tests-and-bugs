<?php

class P
{
	const RULE = 'x * x';

	public function show()
	{
		printf("self:   %s\n", self::RULE);
		printf("static: %s\n", static::RULE);

		$p = get_parent_class($this);
		if ($p) {
			printf("parent: %s\n", parent::RULE);
		} else {
			print("parent: NONE\n");
		}
	}
}

class A extends P
{
	const RULE = '2 * n';
}

$p = new P;
print("Class P:\n");
$p->show();

$a = new A;
print("Class A:\n");
$a->show();