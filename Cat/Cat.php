<?php

/**
 * Cat
 * 
 * The class cat is used to represent a basic cat, with a name,
 * a gender, an age etc... * 
 */
class Cat
{
    /**
     * Name
     *
     * Store the current object firstname value
     *
     * @var string
     */
    private $firstname;
    
    /**
     * Age
     *
     * Store the current object age value
     *
     * @var int
     */
    private $age;
    
    /**
     * Gender
     *
     * Store the current object gender value
     *
     * @var string
     */
    private $gender;

    /**
     * Color
     *
     * Store the current cats color value
     *
     * @var string
     */
    private $color;

    /**
     * Race
     *
     * Store the current cats race value
     *
     * @var string
     */
    private $race;

   
 

   

    /**
     * Get store the current object name value
     *
     * @return  string
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set store the current object name value
     *
     * @param  string  $firstname  Store the current object name value
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    private static $allowedGender = ['male', 'female'];
    

    /**
     * Get store the current object age value
     *
     * @return  int
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set store the current object age value
     *
     * @param  int  $age  Store the current object age value
     *
     * @return  self
     */ 
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    

    /**
     * Get store the current object gender value
     *
     * @return  string
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set store the current object gender value
     *
     * @param  string  $gender  Store the current object gender value
     *
     * @return  self
     */ 
    /**
     * Set gender
     *
     * Set the current gender value. The gender value will be inserted
     * only if it's 'male', 'female'
     *
     * @param string $gender The new gender
     *
     * @return $this
     */
    public function setGender(string $gender)
    {
        if (!in_array($gender, self::$allowedGender)) {
            throw new RuntimeException('Gender is not allowed');
        }
        
        $this->gender = $gender;
        return $this;
    }


    /**
     * Get store the current cats color value
     *
     * @return  string
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set store the current cats color value
     *
     * @param  string  $color  Store the current cats color value
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get store the current cats race value
     *
     * @return  string
     */ 
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set store the current cats race value
     *
     * @param  string  $race  Store the current cats race value
     *
     * @return  self
     */ 
    public function setRace(string $race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * From array
     * 
     * Create a new Cat instance from an array of value
     * 
     * @param array $definition The array of value
     * 
     * @return Cat
     */
    
    public static function fromArray(array $definition)
    {
        $cat = new Cat();
        $cat->setAge((int)$definition['age'] ?? '')
            ->setGender($definition['gender'] ?? '')
            ->setFirstname($definition['firstname'] ?? '')
            ->setRace((int)$definition['race'] ?? '')
            ->setColor($definition['color'] ?? '');
            
        
        return $cat;
    }
}
    if(empty($_POST['firstname']) || strlen($_POST['firstname']) < 3 || strlen($_POST['firstname']) >20 )
    {
        // display error
        echo 'Firstname needs at least 3 characters but not more than 20.';
        
        $ok = false;
    }

    if(empty($_POST['race']) || strlen($_POST['race']) < 3 || strlen($_POST['race']) >20 )
    {
        // display error
        echo 'Race needs at least 3 characters but not more than 20.';
        
        $ok = false;
    }
    
    if(empty($_POST['color']) || strlen($_POST['color']) < 3 || strlen($_POST['color']) >10 )
    {
        // display error
        echo 'Color needs at least 3 characters but not more than 10.';
        
        $ok = false;
    }

    if(empty($_POST['gender']) || !in_array($_POST['gender'], ['male', 'female']))
    {
        // display error
        echo 'please select a valid gender';
        
        $ok = false;
    }
    
    //- Age (int) 
    
    if(empty($_POST['age']))
    {
        // display error
        echo 'Enter valid age, please!';
        
        $ok = false;
    }
    
    if($ok)
    {
        echo 'everything is ok';
    }
    else
    {
        http_response_code(400);
        echo 'You have a problem. Contact the Administrator!';
    };
?>