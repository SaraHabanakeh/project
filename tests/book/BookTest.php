<?php

namespace App\Tests\Entity;

use App\Entity\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function testSetTitle(): void
    {
        $book = new Book();
        $title = 'Test Title';
        $book->setTitle($title);
        $this->assertEquals($title, $book->getTitle());
    }

    public function testSetAuthor(): void
    {
        $book = new Book();
        $author = 'Test Author';
        $book->setAuthor($author);
        $this->assertEquals($author, $book->getAuthor());
    }

    public function testSetIsbn(): void
    {
        $book = new Book();
        $isbn = '1234567890';
        $book->setIsbn($isbn);
        $this->assertEquals($isbn, $book->getIsbn());
    }

    public function testSetImage(): void
    {
        $book = new Book();
        $image = 'book.jpg';
        $book->setImage($image);
        $this->assertEquals($image, $book->getImage());
    }
}
