<?php

namespace Frameshort\Controllers;

class HelpCenter {

    private $Projects;

    public function __construct() {
        $this->Projects = [ "frameshort", "YARPF" ];
    }
        
    /**
     * Show projects
     *
     * @param  object $Response
     * @param  array $Binded
     * @return void
     */
    public function Projects(\Frameshort\Response $Response, array $Binded = []): void {
        $Response->load("help-center/projects");
        return;
    }

    /**
     * Show project informations
     *
     * @param  object $Response
     * @param  array $Binded
     * @return void
     */
    public function Project(\Frameshort\Response $Response, array $Binded = []): void {
        $Project = $Binded["project-name"] ?? null;
        if (in_array($Project, $this->Projects)) {
            $Response->MarkdownLoad("help-center/markdown/{$Project}/index");
            return;
        }
        http_response_code(404);
        $Response->load("exceptions/not-found");
        return;
    }

    /**
     * Show project documentation
     *
     * @param  object $Response
     * @param  array $Binded
     * @return void
     */
    public function Documentation(\Frameshort\Response $Response, array $Binded = []): void {
        $Project = $Binded["project-name"] ?? null;
        if (in_array($Project, $this->Projects)) {
            $Response->MarkdownLoad("help-center/markdown/{$Project}/documentation");
            return;
        }
        http_response_code(404);
        $Response->load("exceptions/not-found");
        return;
    }

}

?>