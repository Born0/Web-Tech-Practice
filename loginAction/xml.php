<?php
    $simplexml= new SimpleXMLElement('<?xml version="1.0"?><books/>');
    $book1= $simplexml->addChild('book');
    $book1->addChild("Booktitle", "The  Oz");
    $book1->addChild("PublicationDate", 1985);
    $book2= $simplexml->addChild('book');
    $book2->addChild("Booktitle", " Fox");
    $book2->addChild("PublicationDate", 1960);
    file_put_contents('books.xml', $simplexml->asXML());
?>