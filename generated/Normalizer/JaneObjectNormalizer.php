<?php

namespace Mobility\Normalizer;

use Mobility\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Mobility\\Model\\Address' => 'Mobility\\Normalizer\\AddressNormalizer', 'Mobility\\Model\\ConnectionState' => 'Mobility\\Normalizer\\ConnectionStateNormalizer', 'Mobility\\Model\\ConnectionStatus' => 'Mobility\\Normalizer\\ConnectionStatusNormalizer', 'Mobility\\Model\\ConnectionStatusResponse' => 'Mobility\\Normalizer\\ConnectionStatusResponseNormalizer', 'Mobility\\Model\\Device' => 'Mobility\\Normalizer\\DeviceNormalizer', 'Mobility\\Model\\DeviceResponse' => 'Mobility\\Normalizer\\DeviceResponseNormalizer', 'Mobility\\Model\\NetworkRoaming' => 'Mobility\\Normalizer\\NetworkRoamingNormalizer', 'Mobility\\Model\\NetworkRoamingResponse' => 'Mobility\\Normalizer\\NetworkRoamingResponseNormalizer', 'Mobility\\Model\\NetworkUsage' => 'Mobility\\Normalizer\\NetworkUsageNormalizer', 'Mobility\\Model\\NetworkUsageResponse' => 'Mobility\\Normalizer\\NetworkUsageResponseNormalizer', 'Mobility\\Model\\PoolStatus' => 'Mobility\\Normalizer\\PoolStatusNormalizer', 'Mobility\\Model\\PoolStatusResponse' => 'Mobility\\Normalizer\\PoolStatusResponseNormalizer', 'Mobility\\Model\\ServerStatus' => 'Mobility\\Normalizer\\ServerStatusNormalizer', 'Mobility\\Model\\Session' => 'Mobility\\Normalizer\\SessionNormalizer', 'Mobility\\Model\\SessionStatusResponse' => 'Mobility\\Normalizer\\SessionStatusResponseNormalizer', 'Mobility\\Model\\User' => 'Mobility\\Normalizer\\UserNormalizer', 'Mobility\\Model\\UserResponse' => 'Mobility\\Normalizer\\UserResponseNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Mobility\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}