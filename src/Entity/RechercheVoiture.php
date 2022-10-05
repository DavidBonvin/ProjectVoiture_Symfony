<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

class RechercheVoiture {
  /**
   * @Assert\LessThanOrEqual(propertyPath="maxAnne", message="Doit être plus petit que l'année Max")
   */
  private $minAnee;
  /**
   * @Assert\GreaterThanOrEqual(propertyPath="minAnee", message="Doit être plus grand que l'année Min")
   */
  private $maxAnne;
  



  /**
   * Get the value of minAnee
   */ 
  public function getMinAnee()
  {
    return $this->minAnee;
  }

  /**
   * Set the value of minAnee
   *
   * @return  self
   */ 
  public function setMinAnee($minAnee)
  {
    $this->minAnee = $minAnee;

    return $this;
  }

  /**
   * Get the value of maxAnne
   */ 
  public function getMaxAnne()
  {
    return $this->maxAnne;
  }

  /**
   * Set the value of maxAnne
   *
   * @return  self
   */ 
  public function setMaxAnne($maxAnne)
  {
    $this->maxAnne = $maxAnne;

    return $this;
  }
}
