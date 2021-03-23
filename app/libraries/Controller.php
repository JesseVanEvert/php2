<?php
  /*
   * Base Controller
   * Loads the models and views
   */
  class Controller {
    // Load model
    public function model($model){
      // Require model file
      require_once '../app/model/' . $model . '.php';

      // Instatiate model
      return new $model();
    }

    // Load dal
    public function dal($dal){
      // Require dal file
      require_once '../app/dal/' . $dal . '.php';

      // Instatiate dal
      return new $dal();
    }

    // Load dal
    public function bll($bll){
      // Require dal file
      require_once '../app/bll/' . $bll . '.php';

      // Instatiate dal
      return new $bll();
    }

    // Load view
    public function ui($ui, $data = []){
      // Check for ui file
      if(file_exists('../app/ui/' . $ui . '.php')){
        require_once '../app/ui/' . $ui . '.php';
      } else {
        // ui does not exist
        die('ui does not exist');
      }
    }
  }
