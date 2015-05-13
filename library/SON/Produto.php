<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 12/05/2015 - 21:21
 */

namespace SON;


class Produto implements CategoriaAwareInterface{

    private $categoria;

    public function setCategoria(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }
}