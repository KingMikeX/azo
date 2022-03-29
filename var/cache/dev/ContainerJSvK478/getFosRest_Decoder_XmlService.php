<?php

namespace ContainerJSvK478;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Decoder_XmlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_rest.decoder.xml' shared service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/XmlDecoder.php';

        return $container->privates['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }
}
