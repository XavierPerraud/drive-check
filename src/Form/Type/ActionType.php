<?php
namespace App\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ActionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('store', ChoiceType::class, [
                'label' => 'Magasin',
                'choices' => [
                    'Auchan' => 'auchan',
                    'Carrefour' => 'carrefour',
                    //'Super U' => 'super_u',
                ],
            ])
            ->add('storeId', IntegerType::class, [
                'label' => 'Id Magasin',
            ])
        ;
    }
}