# Decorator
In plain words
> Decorator pattern lets you dynamically change the behavior of an object at run time by wrapping them in an object of a decorator class.
Real world example

Example 1: <br>
Imagine you run a car service shop offering multiple services. Now how do you calculate the bill to be charged? You pick one service and dynamically keep adding to it the prices for the provided services till you get the final cost. Here each type of service is a decorator.
<br><br>Example 2<br>
Imagine you run a coffee shop where people can order different variations. For example: 
1) One customer might order for just a simple/ordinary black coffee without anything.
2) Another customer might order for a coffee decorated with only milk. (i.e only milk is added)
3) Another customer might order for a coffee decorated with both milk and vanilla flavour.

Basically, the simple coffee is the starting point. The simple coffee object is being wrapped/decorated with the subsequent `MilkCoffee` and `VanillaCoffee` classes

