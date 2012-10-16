<?php

namespace MyDesignersBestFriend;

use \Mustache;
use \Symfony\Component\Yaml\Yaml;

class MyDesignersBestFriend
{
  // Properties
  // ----------

  public $viewName;

  public $rawView;

  public $parsedView;

  public $layoutName;

  public $rawLayout;

  public $parsedLayout;

  public $title;

  public $content;

  public $layoutVars;

  public $viewVars;

  public $headers;

  public $statusCode;


  public function __construct()
  {
    print_r($this);

  }

  public function dispatch($view = '')
  {
    // Trying to retrieve view file corresponding to $view parameter
    try {
      $this->loadView($view);
    } catch (ErrorException $e) {

    }

    // Trying to retrieve a file with name $view.yml in /Data directory
    $this->loadData();

    // Rendering
    $this->render();
  }

  private function loadLayout($name = '')
  {

  }

  private function parseLayout()
  {
    // Using $this->content and $this->layoutVars to compile layout file content with mustache
  }

  private function loadView($view = '')
  {

  }

  private function parseView()
  {
    // Using data to compile given view with Mustache and storing it in $this->content
  }

  private function loadData()
  {

  }

  private function handleError()
  {

  }

  private function render()
  {
    // Trying to retrieve specified layout file
    try {
      $this->loadLayout($this->layoutName);
    } catch (ErrorException $e) {

    }

    // compiling view file with mustache, adding data if needs be
    $this->parseView();

    // compiling layout file
    $this->parseLayout();

    // Setting html headers

    // Returning html
  }
}
