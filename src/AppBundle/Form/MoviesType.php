<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MoviesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')->add('year')->add('rated')->add('released')->add('runtime')->add('genre')->add('director')->add('writer')->add('actors')->add('plot')->add('language')->add('country')->add('awards')->add('poster')->add('metascore')->add('imdbrating')->add('imdbvotes')->add('imdbid')->add('type')->add('response')->add('createdat')->add('updatedat')->add('imdbId');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Movies'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_movies';
    }


}
