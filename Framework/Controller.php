<?php
class Framework_Controller extends Bull_Web_Controller
{
    /**
     *
     * Constructor.
     *
     * @return void
     *
     */
    public function __construct($context, array $params = array())
    {
        $this->preConstruct();
        parent::__construct($context, $params);
        $this->view = new Bull_View_Twig();
        $this->postConstruct();
    }
    
    /**
     * 
     * Renders the view into the response and sets the response content-type.
     * 
     * N.b.: If the response content is already set, the view will not be
     * rendered.
     * 
     * @return void
     * 
     */
    protected function render()
    {
        $this->view->setFormat($this->getFormat());
        if (! $this->response->getContent()) {
            // set data
            $data = (array) $this->getData();
            $this->view->setData($data);
            
            if ($this->context instanceof Bull_Web_Context) {
                // set accept headers
                $accept = $this->getContext()->getAccept();
                $this->view->setAccept($accept);                
            }
            
            // render view and set content
            $class = get_class($this);
            $path = ROOT . DIRECTORY_SEPARATOR . str_replace("_" , DIRECTORY_SEPARATOR, $class);
            $this->view->setPath(dirname($path));
            
            $viewfile = $this->viewfile !== "" ? strtolower($this->viewfile) : strtolower($this->action);
            $content = $this->view->render(basename($path).DIRECTORY_SEPARATOR.$viewfile);
            $this->response->setContent($content);
        }
        $this->response->setContentType($this->view->getContentType());
    }
}
