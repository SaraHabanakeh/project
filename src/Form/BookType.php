<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Form type for the Book entity.
 */
class BookType extends AbstractType
{
    /**
     * Build the form for the Book entity.
     *
     * @param FormBuilderInterface $builder The form builder interface.
     * @param array $options An array of options.
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class)
            ->add('author', TextType::class)
            ->add('isbn', TextType::class)
            ->add('image', TextType::class);
    }

    /**
     * Configure the options for the Book form.
     *
     * @param OptionsResolver $resolver The options resolver.
     *
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
