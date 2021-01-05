<?php

namespace Frameshort\Controllers;

class Portfolio {
        
    /**
     * Show portfolio
     *
     * @param  object $Response
     * @param  array $Binded
     * @return void
     */
    public function Index(\Frameshort\Response $Response, array $Binded = []): void {
        $Response->load("portfolio", [ "components.headers" => true ]);
        return;
    }

}

?>