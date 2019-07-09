<?php

// Creating the bundle class

namespace KnpU\LoremIpsumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use KnpU\LoremIpsumBundle\DependencyInjection\KnpULoremIpsumExtension;


class KnpULoremIpsumBundle extends Bundle
{
	// Create alias to use in config.yml, second the getContainerExtension() method
	// look at the bundle.php definition, the getContainerExtension() and overide it here
	// This one does the same thing as the parent method, but without that sanity check.
	public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new KnpULoremIpsumExtension();
        }

        return $this->extension;

    }

}