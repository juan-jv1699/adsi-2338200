<?php
class Load {
    public function view($nombre_vista, $data = null, $rol=null ) {
    // if( is_array($data) ){
    //     extract($data);
    // }
    include 'views/' . $nombre_vista;
    }
}