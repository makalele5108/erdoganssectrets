<?php

namespace Alba\Bundle\Form;

use Alba\Bundle\Entity\Rooms;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Order_infoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('lastname')->add('email')->add('place')->add('city')->add('zipcode')->add('country')->add('phoneNumber')->add('arrival')->add('departure')->add('creditcard')->add('cardOwner')->add('kindPayment')
            ->add('rooms', EntityType::class,
                [
                    'label' => 'kies kamer',
                    'choice_label' => function ($rooms){
                        return $rooms->getName();
                    },
                    'class' => Rooms::class
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Alba\Bundle\Entity\Order_info'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'alba_bundle_order_info';
    }


}
