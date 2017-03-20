<?php

class P
{
	const RULE = 'P';

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
	const RULE = 'A';

	public function show()
	{
		printf("self:   %s\n", self::RULE);
		printf("static: %s\n", static::RULE);
		printf("parent: %s\n", parent::RULE);
	}
}

class B extends P
{
	const RULE = 'B';

	public function show()
	{
		parent::show();
	}
}

class C extends P
{
	const RULE = 'C';
}

$p = new P;
print("Class P:\n");
$p->show();

$a = new A;
print("\nClass A:\n");
$a->show();

$b = new B;
print("\nClass B:\n");
$b->show();

$c = new C;
print("\nClass C:\n");
$c->show();
