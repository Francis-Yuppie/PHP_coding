 <?php
/**
 * 
 */
class Assignment
{
   public function evenNumbers($range=['start'=>0,'stop'=>100,'result'=>'sum','type'=>'even'],$answer = null)
   {
      if(is_array($range)){
         if(!is_int($range['start']) || !is_int($range['stop'])){
            return "The function only accepts integers";
         }elseif($range['start']>$range['stop']){
            return 'Start number can not be grater than stop number';
         }else{
         for($i=$range['start']; $i<=$range['stop']; $i++){
               if($this->comparison($i, $range['type'])){
                  if($range['result']==='sum'){
                     $answer += $i;
                  }elseif($range['result']==='list'){
                     $answer .= $i." ";
                  }elseif($range['result']==='array'){
                     $answer[] = $i;
                  }else{
                     return 'Unknown results';
                     exit();
                  }
               }
         }
         return $answer;
        }
      }
      return 'Range provided is invalid';      
     }
     protected function comparison($i,$type,$answer = 0){
      if($i%2==0 && $type ==='even'){
        return true; 
      }elseif($i%2!==0 && $type ==='odd'){
       return true;
     }else{
      for($j=2;$j<=$i/2;$j++){
        if($i%$j==0){
          $answer++;
         break;
        }
      }
       return ($answer==0 && $type === 'prime') ? true : false;
     }
   }
}



