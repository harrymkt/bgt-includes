# custom_menu

custom_menu object

This function could verify whether the items and the references are properly set in the current menu.

# bool verify_item_references()

## Parameters

None

## Return Value

True on successful verification, false otherwise.

## Remarks

This function could verify whether the items and the references are properly set in the current menu. This could be useful and also used in the object itself before the menu could run to verify whether the items and references are properly set, meaning the same length.

## Example

```
// Make a simple menu.
#include "custom_menu.bgt"

custom_menu menu;

void main()
{
menu.create("Example menu", true);
menu.add("item1", "i1");
menu.add("item2", "i2");
if (menu.verify_item_references())
{
// Items and references are properly set.
}
while(true)
{
menu.monitor();
wait(5);
if(key_pressed(KEY_RETURN))
{
alert("result", menu.get_current_ref());
exit();
}
}
}
```
