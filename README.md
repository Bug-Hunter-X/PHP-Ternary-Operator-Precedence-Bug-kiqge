# PHP Ternary Operator Precedence Bug

This repository demonstrates a subtle bug in PHP related to the precedence of the ternary operator (?:). When nested ternary operators are used, the order of evaluation might not be intuitive and can lead to unexpected results. The bug occurs when the logical flow of nested conditional statements is not clear and may differ from what a programmer might expect.

## Description

The primary issue lies in the evaluation order. The code snippet in `bug.php` uses nested ternary operators. The outer operator evaluates first, but the inner operator's condition is evaluated before the outer operator's consequent. This can create logical errors if not explicitly accounted for.  The solution `bugSolution.php` demonstrates how using parentheses for explicit grouping can clarify and correct the evaluation order.