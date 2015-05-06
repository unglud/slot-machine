Contributing
============

If you've written a new function, or fixed a bug, your contribution is welcome!

Before proposing a pull request, check the following:

* Your code should follow the [PSR-2 coding standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) (and use [php-cs-fixer](https://github.com/fabpot/PHP-CS-Fixer) to fix inconsistencies).
* Unit tests should still pass after your patch
* As much as possible, add unit tests for your code
* If you add long list of random data, please split the list into several lines. This makes diffs easier to read, and facilitates core review.
* If you add new functional, please include documentation for it in the README. Don't forget to add a line about new method in the `@property` or `@method` phpDoc entries in [Generator.php](https://github.com/fzaninotto/Faker/blob/master/src/Faker/Generator.php#L6-L118) to help IDEs auto-complete your formatters.
* If you commit a new feature, be prepared to help maintaining it. Watch the project on GitHub, and please comment on issues or PRs regarding the feature you contributed.

Once your code is merged, it is available for free to everybody under the MIT License. Publishing your Pull Request on the repository means that you agree with this license for your contribution.

Thank you for your contribution! This package wouldn't be so great without you.
