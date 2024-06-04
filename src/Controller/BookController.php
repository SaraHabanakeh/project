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

/**
 * Controller for managing book library actions.
 */
class BookController extends AbstractController
{
    /**
     * Display the list of books.
     *
     * @Route('library/', name='app_book')
     * 
     * @param BookRepository $bookRepository The book repository.
     * 
     * @return Response
     */
    public function index(BookRepository $bookRepository): Response
    {
        $books = $bookRepository->findAll();

        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);
    }

    /**
     * Create a new book.
     *
     * @Route('/library/create', name='book_new')
     * 
     * @param Request $request The HTTP request object.
     * @param ManagerRegistry $doctrine The doctrine manager registry.
     * 
     * @return Response
     */
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {
        $book = new Book();
        return $this->handleForm($request, $doctrine, $book, 'book/create.html.twig');
    }

    /**
     * Display a single book by its title.
     *
     * @Route('/library/{title}', name='show_book')
     * 
     * @param BookRepository $bookRepository The book repository.
     * @param string $title The title of the book.
     * 
     * @return Response
     * 
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If the book is not found.
     */
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

    /**
     * Edit a book by its title.
     *
     * @Route('/library/edit/{title}', name='edit_book')
     * 
     * @param Request $request The HTTP request object.
     * @param ManagerRegistry $doctrine The doctrine manager registry.
     * @param string $title The title of the book.
     * 
     * @return Response
     */
    public function edit(Request $request, ManagerRegistry $doctrine, string $title): Response
    {
        $bookRepository = $doctrine->getRepository(Book::class);
        $book = $bookRepository->findOneBy(['title' => $title]);
        return $this->handleForm($request, $doctrine, $book, 'book/edit.html.twig');
    }

    /**
     * Delete a book by its title.
     *
     * @Route('/library/delete/{title}', name='delete_book')
     * 
     * @param BookRepository $bookRepository The book repository.
     * @param ManagerRegistry $doctrine The doctrine manager registry.
     * @param string $title The title of the book.
     * 
     * @return Response
     */
    public function delete(BookRepository $bookRepository, ManagerRegistry $doctrine, string $title): Response
    {
        $book = $bookRepository->findOneBy(['title' => $title]);
        $entityManager = $doctrine->getManager();
        $entityManager->remove($book);
        $entityManager->flush();

        return $this->redirectToRoute('app_book');
    }

    /**
     * Display a list of books in JSON format (API).
     *
     * @Route('/api/library/books', name='show_books')
     * 
     * @param BookRepository $bookRepository The book repository.
     * 
     * @return Response
     */
    public function apiIndex(BookRepository $bookRepository): Response
    {
        $books = $bookRepository->findAll();

        return $this->json($books, Response::HTTP_OK, [], ['json_encode_options' => JSON_PRETTY_PRINT]);
    }

    /**
     * Display a single book by its ISBN in JSON format (API).
     *
     * @Route('api/library/book/{isbn}', name='book_by_isbn', methods={'GET'})
     * 
     * @param BookRepository $bookRepository The book repository.
     * @param int $isbn The ISBN of the book.
     * 
     * @return Response
     * 
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If the book is not found.
     */
    public function apiShow(BookRepository $bookRepository, int $isbn): Response
    {
        $book = $bookRepository->findOneBy(['isbn' => $isbn]);

        if (!$book) {
            throw $this->createNotFoundException('The book does not exist');
        }

        return $this->json($book);
    }

    /**
     * Handle the form submission for creating and editing books.
     *
     * @param Request $request The HTTP request object.
     * @param ManagerRegistry $doctrine The doctrine manager registry.
     * @param Book $book The book entity.
     * @param string $template The template to render.
     * 
     * @return Response
     */
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
