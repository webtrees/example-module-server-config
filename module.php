<?php

/**
 * An example module to modify PHP and database configuration.
 */

declare(strict_types=1);

namespace ExampleNamespace;

// Unlike the other examples, this one has a separate file for the class definition.
// This is because the constructor has some dependencies, so we must create it
// with "app(CustomModule::class)" rather than "new CustomModule()".
// This means we can't use an anonymous class, and our coding standards
// mean that the class needs to go in its own file.
// For simple modules, it might be easier to declare the class here.
use Fisharebest\Webtrees\Webtrees;

require __DIR__ . '/ExampleModuleServerConfig.php';

return Webtrees::make(ExampleModuleServerConfig::class);
