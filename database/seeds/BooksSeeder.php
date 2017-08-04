<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sample penulis
        $author1 = Author::create(['name'=>'Mohammad Fuzil Adhim']);
        $author2 = Author::create(['name'=>'Salim A. Fillah']);
        $author3 = Author::create(['name'=>'Aam Amirudin']);
        //Sample buku
        $book1 = Book::create(['title'=>'Kupinang Engkau Dengan Hamdalah','amounth'=>3,'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Jalan cinta para pejuang','amounth'=>2,'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Membingkai surga dalam rumah tangga','amounth'=>4,'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Cinta & Rumah tangga muslim','amounth'=>3,'author_id'=>$author3->id]);
    }
}
