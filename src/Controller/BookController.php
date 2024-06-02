<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use App\Form\BookType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('library/', name: 'app_book')]
    public function index(BookRepository $bookRepository): Response
    {
        $books = $bookRepository->findAll();

        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/library/create', name: 'book_new')]
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {
        $book = new Book();
        return $this->handleForm($request, $doctrine, $book, 'book/create.html.twig');
    }

    #[Route('/library/{title}', name: 'show_book')]
    public function show(BookRepository $bookRepository, string $title): Response
    {
        $book = $bookRepository->findOneBy(['title' => $title]);

        if (!$book) {
            throw $this->createNotFoundException('The book does not exist');
        }

        return $this->render('book/one_book.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/library/edit/{title}', name: 'edit_book')]
    public function edit(Request $request, ManagerRegistry $doctrine, string $title): Response
    {
        $bookRepository = $doctrine->getRepository(Book::class);
        $book = $bookRepository->findOneBy(['title' => $title]);
        return $this->handleForm($request, $doctrine, $book, 'book/edit.html.twig');
    }

    #[Route('/library/delete/{title}', name: 'delete_book')]
    public function delete(BookRepository $bookRepository, ManagerRegistry $doctrine, string $title): Response
    {
        $book = $bookRepository->findOneBy(['title' => $title]);
        $entityManager = $doctrine->getManager();
        $entityManager->remove($book);
        $entityManager->flush();

        return $this->redirectToRoute('app_book');
    }

    #[Route('/api/library/books', name: 'show_books')]
    public function apiIndex(BookRepository $bookRepository): Response
    {
        $books = $bookRepository->findAll();

        return $this->json($books, Response::HTTP_OK, [], ['json_encode_options' => JSON_PRETTY_PRINT]);
    }

    #[Route('api/library/book/{isbn}', name: 'book_by_isbn', methods: ['GET'])]
    public function apiShow(BookRepository $bookRepository, int $isbn): Response
    {
        $book = $bookRepository->findOneBy(['isbn' => $isbn]);

        if (!$book) {
            throw $this->createNotFoundException('The book does not exist');
        }

        return $this->json($book);
    }

    private function handleForm(Request $request, ManagerRegistry $doctrine, Book $book, string $template): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            $entityManager->persist($book);
            $entityManager->flush();

            return $this->redirectToRoute('app_book');
        }

        return $this->render($template, [
            'form' => $form->createView(),
        ]);
    }
}
