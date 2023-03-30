<?php  
   
  trait MyAssignment{
    public function calculateMean(){
      $oddRange = array_merge($this->range,['result'=>'sum','type'=>'odd']);
      $evenRange = array_merge($this->range,['result'=>'sum','type'=>'even']);
      $primeRange = array_merge($this->range,['result'=>'sum','type'=>'prime']);
      $total = $this->evenNumbers($oddRange) + 
      $this->evenNumbers($evenRange) + 
      $this->evenNumbers($primeRange);
      $mean = number_format($total/3,2);
      return ['sum'=>$total,'mean'=>$mean];
    }
    public function calculateMedian(){
      $oddRange = array_merge($this->range,['result'=>'array','type'=>'odd']);
      $evenRange = array_merge($this->range,['result'=>'array','type'=>'even']);
      $primeRange = array_merge($this->range,['result'=>'array','type'=>'prime']);
          //sorting the array
          
          //finding the median number of the array
          //$length is for even numbers && legth2 for odd numbers
          $odd = $this->evenNumbers($oddRange);
          $even =$this->evenNumbers($evenRange);
          $prime = $this->evenNumbers($primeRange);

          $countOdd = (count($odd) - 1);
          $countEven = (count($even) - 1);
          $countPrime = count($prime);

          if($countOdd %2 == 0 && $countEven %2 == 0){
            $median =(($countOdd + 1) + ($countOdd /2))/2 ;
            $median =(($countEven + 1) + ($countEven /2))/2;
          
          }/*($countEven %2 == 0){
            $median = ($countEven /2);

          }*/
          else{
             $median = ($countOdd - 1)/2;
             $median = ($countEven - 1)/2;
          }
          return $even[$median];

         /* if($lenght % 2 == 1 && $lenght2 % 2 == 1 && $lenght3 % 2 == 1){//if the lenght  is odd then the median is the middle number of the sorted array
             $median = $this->evenNumbers($oddRange)[(int)(($lenght-1)/2)];//median for even numbers
             $median2 = $this->evenNumbers($evenRange)[(int)(($lenght2-1)/2)];//median for odd numbers
             $median3 = $this->evenNumbers($primeRange)[(int)(($lenght2-1)/2)];
             return 'The median value for odd numbers is: '.$median;//' and the median value for even numbers is: '.$median2.' and for primes is '.$median3;
          }else{//if lenght is even  then the median is average of two middle numbers of the sorted array
             $median = ($this->evenNumbers($oddRange)[$lenght/2] + $this->evenNumbers($oddRange)[($lenght/2)-1])/2;
             $median2 =($this->evenNumbers($evenRange)[$lenght2 /2] + $this->evenNumbers($oddRange)[($lenght2 /2)-1])/2;
             $median3 =($this->evenNumbers($primeRange)[$lenght2 /2] + $this->evenNumbers($primeRange)[($lenght2 /2)-1])/2;
             return 'The median value for odd numbers is: '.$median;//' and the median value for even numbers is: '.$median2.' and for primes '.$median3;
          }*/
    }
     
  } 
?>