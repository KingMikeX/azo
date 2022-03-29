<?php
namespace App\Twig;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public String $username = 'Mike';

    public function getFilters()
    {
        return [
            new TwigFilter('loadUsername', [$this, 'loadUserName']),
        ];
    }

    public function formatPrice(float $number, int $decimals = 0, string $decPoint = '.', string $thousandsSep = ','): string{
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$'.$price;
        return $price;
    }

    public function laodUserName(){
        return $this->username;
    }
}