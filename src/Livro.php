<?php
namespace Exercicio;
abstract class Livro {
    private string $titulo;
    private string $autor;
    private int $paginas = 0;

    public function formataTitulo(){
        $str =  "<strong>".$this->getTitulo()."</strong>";
        $str = mb_strtoupper($str);
        return $str;
        
    }
    public function getTitulo(): string    
    {
        return $this->titulo;
    }
    
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }

    public function getPaginas(): int
    {
        return $this->paginas;
    }

    public function setPaginas(int $paginas)
    {
        $this->paginas = $paginas;
    }
}