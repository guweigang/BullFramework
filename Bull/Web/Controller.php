<?php
/**
 * 
 * A page controller.
 * 
 * @package Bull.Web
 * 
 */
class Bull_Web_Controller
{
    /**
     * 
     * The action to perform, typically discovered from the params.
     * 
     * @var string
     * 
     */
    protected $action;
    
    /**
     * 
     * The context of the request environment.
     * 
     * @var Context
     * 
     */
    protected $context;
    
    /**
     * 
     * Collection point for data, typically for rendering the page.
     * 
     * @var StdClass
     * 
     */
    protected $data;
    
    /**
     * 
     * The page format to render, typically discovered from the params.
     * 
     * @var string
     * 
     */
    protected $format;
    
    /**
     * 
     * Path-info parameters, typically from the route.
     * 
     * @var array
     * 
     */
    protected $params;
    
    /**
     * 
     * A data transfer object for the eventual HTTP response.
     * 
     * @var Response
     * 
     */
    protected $response;

    /**
     *
     * View Object
     *
     * @var null | Bull_View_Abstract
     *
     */
    protected $view;

    /**
     *
     * View file
     *
     * @var string
     *
     */
    protected $viewfile = "";

    /**
     *
     * Default action.
     *
     * @var string
     *
     */
    protected $defaction = "index";

    /**
     * 
     * Constructor.
     * 
     * @param Context $context The request environment.
     * 
     * @param Response $response A response transfer object.
     * 
     * @param array $params The path-info parameters.
     * 
     */
    public function __construct($context, array $params = array())
    {
        $this->preConstruct();
        
        $this->context  = $context;
        $this->response = new Bull_Web_Response();
        $this->params   = $params;
        $this->data     = new StdClass();
        $this->action   = isset($this->params['action'])
                        ? $this->params['action']
                        : null;
        $this->action   = $this->action === null
                        ? $this->defaction
                        : $this->action; 
        $this->format   = isset($this->params['format'])
                        ? $this->params['format']
                        : null;
        $this->view     = new Bull_View_Twig();
        
        $this->postConstruct();
    }

    protected function preConstruct() {}

    protected function postConstruct() {}
    
    /**
     * Getters
     * -------
     */
    
    /**
     * 
     * Returns the action, typically discovered from the params.
     * 
     * @return string
     * 
     */
    public function getAction()
    {
        return $this->action;
    }
    
    /**
     * 
     * Returns the Context object.
     * 
     * @return Context
     * 
     */
    public function getContext()
    {
        return $this->context;
    }
    
    /**
     * 
     * Returns the data collection object.
     * 
     * @return StdClass
     * 
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * 
     * Returns the page format, typically discovered from the params.
     * 
     * @return StdClass
     * 
     */
    public function getFormat()
    {
        return $this->format;
    }
    
    /**
     * 
     * Returns the params.
     * 
     * @return array
     * 
     */
    public function getParams()
    {
        return $this->params;
    }
    
    /**
     * 
     * Returns the Response object.
     * 
     * @return Response
     * 
     */
    public function getResponse()
    {
        return $this->response;
    }
    
    /* ====================The Execution Cycle==================== */
    
    /**
     * 
     * Executes the action and all hooks:
     * 
     * - calls `preExec()`
     * 
     * - calls `preAction()`
     * 
     * - calls `action()` to find and invoke the action method
     * 
     * - calls `postAction()`
     * 
     * - calls `preRender()`
     * 
     * - calls `render()` to generate a presentation (does nothing by default)
     * 
     * - calls `postRender()`
     * 
     * - calls `postExec()` and then returns the Response transfer object
     * 
     * @return Response
     * 
     */
    public function exec()
    {
        // prep
        $this->preExec();
        
        // the action cycle
        $this->preAction();
        $this->action();
        $this->postAction();

        if ($this->view instanceof Bull_View_Abstract) {
            // the render cycle
            $this->preRender();
            $this->render();
            $this->postRender();
        } else {
            $content = ob_get_clean();
            $this->response->setContent($content);
        }
        // done
        
        $this->postExec();
        return $this->response;
    }
    
    /**
     * 
     * Runs at the beginning of `exec()` before `preAction()`.
     * 
     * @return void
     * 
     */
    public function preExec()
    {
    }
    
    /**
     * 
     * Runs after `preExec()` and before `action()`.
     * 
     * @return void
     * 
     */
    public function preAction()
    {
    }
    
    /**
     * 
     * Determines the action method, then invokes it.
     * 
     * @return void
     * 
     */
    protected function action()
    {
        $method = 'action' . ucfirst($this->action);
        if (! method_exists($this, $method)) {
            throw new Bull_Web_Exception_NoMethodForAction($this->action);
        }
        $this->invokeMethod($method);
    }
    
    /**
     * 
     * Invokes a method by name, matching method params to `$this->params`.
     * 
     * @param string $name The method name to execute, typcially an action.
     * 
     * @return void
     * 
     */
    protected function invokeMethod($name)
    {
        $args = array();
        $method = new ReflectionMethod($this, $name);
        foreach ($method->getParameters() as $param) {
            if (isset($this->params[$param->name])) {
                $args[] = $this->params[$param->name];
            } elseif ($param->isDefaultValueAvailable()) {
                $args[] = $param->getDefaultValue();
            } else {
                $args[] = null;
            }
        }
        $method->invokeArgs($this, $args);
    }
    
    /**
     * 
     * Runs after `action()` and before `preRender()`.
     * 
     * @return void
     * 
     */
    public function postAction()
    {
    }
    
    /**
     * 
     * Runs after `postAction()` and before `render()`.
     * 
     * @return void
     * 
     */
    public function preRender()
    {
    }
    
    /**
     * 
     * Runs after `render()` and before `postExec()`.
     * 
     * @return void
     * 
     */
    public function postRender()
    {
    }
    
    /**
     * 
     * Runs at the end of `exec()` after `postRender()`.
     * 
     * @return mixed
     * 
     */
    public function postExec()
    {
    }

    public function setView($viewfile)
    {
        $this->viewfile = $viewfile;
    }

    public function disableView()
    {
        $this->view = null;
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
            $path = str_replace("_" , DIRECTORY_SEPARATOR, $class);
            $this->view->setPath(ROOT . DIRECTORY_SEPARATOR . $path);
            
            $content = $this->view->render( $this->viewfile !== "" ? $this->viewfile : $this->action );
            $this->response->setContent($content);
        }
        $this->response->setContentType($this->view->getContentType());
    }
}
