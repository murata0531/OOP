<?php 

    class School{
        
        private $level;
        private $totalUnits;
        private $lab;


        function setValues($name,$level,$totalUnits,$lab){
            $this->name = $name;
            $this->level = $level;
            $this->totalUnits = $totalUnits;
            $this->lab = $lab;
        }

        function pricePerUnit(){
            if($this->level == 'first_year'){
                return 550;

            }elseif($this->level == 'second_year'){
                return  630;
            }elseif($this->level == 'third_year'){
                return 470;
            }else{
                return 501;
            }
        }

        function totalUnitPrice(){
            return $this->pricePerUnit() * $this->totalUnits;
        }

        public function addOn(){
            if($this->lab == 'no lab'){
                return 0;
            }elseif($this->level == 'first_year' AND $this->lab == 'lab'){
                return 3359;

            }elseif($this->level == 'second_year' AND $this->lab == 'lab'){
                return 4000;

            }elseif($this->level == 'third_year' AND $this->lab == 'lab'){
                return 2890;

            }elseif($this->level == 'fourth_year' AND $this->lab == 'lab'){
                return 3555;
            }
        }
        
        public function totalTuition(){
            return $this->totalUnitPrice() + $this->addOn();
        }
            

    }

    // function calculate_tuition(){
    //     if($this->level == 'first_year' and $this->lab == 'lab'){
    //         $tuition = ($this->totalUnits * 550) + 3359;


    //     }elseif($this->level == 'first_year' and $this->lab == 'no_lab'){
    //         $tuition = $this->totalUnits *550;
    //     }
    //     if($this->level == 'second_year' and $this->lab == 'lab'){
    //         $tuition = ($this->totalUnits * 630) + 4000;


    //     }elseif($this->level == 'second_year' and $this->lab == 'no_lab'){
    //         $tuition = $this->totalUnits *630;
    //     }
    //     if($this->level == 'third_year' and $this->lab == 'lab'){
    //         $tuition = ($this->totalUnits * 470) + 2890;


    //     }elseif($this->level == 'third_year' and $this->lab == 'no_lab'){
    //         $tuition = $this->totalUnits *470;
    //     }
    //     if($this->level == 'fourth_year' and $this->lab == 'lab'){
    //         $tuition = ($this->totalUnits * 501) + 3555;


    //     }elseif($this->level == 'fourth_year' and $this->lab == 'no_lab'){
    //         $tuition = $this->totalUnits *501;
    //     }
       
    //     return $tuition;

    // }
    










?>