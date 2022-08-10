<?php

    class Employee{
        //properties (1);
        private $civil_status;
        private $position;
        private $employment_status;
        private $work_hours;
        private $ot_pay;
        private $reg_pay;
        private $healthcare;
        private $tax;
        private $net_income;

        //method (2)
        public function __construct($civil_status, $position, $employment_status, $work_hours){
            $this->civil_status = $civil_status;
            $this->position = $position;
            $this->employment_status = $employment_status;
            $this->work_hours = $work_hours;
        }

        public function computeRegularPay(){
            if($this->work_hours > 40){
                if($this->position == "staff"){
                    if($this->employment_status == "contractual"){
                        return (300 / 8) * 40;
                }
                elseif($this->employement_status == "probationary"){
                    return (350 / 8) * 40;
                }
                elseif($this->employment_status == "regular"){
                        return (400 / 8) * 40;   
                }
            }elseif($this->position == "admin"){
                if($this->employment_status == "contractual"){
                    return (350 / 8) * 40;
                }
                elseif($this->employment_status == "probationary"){
                    return (400 / 8) * 40;
                }
                elseif($this->employment_status == "regular"){
                    return (500 / 8) * 40;
                }
            }
        }else{
            if($this->position == "staff"){
                if($this->employment_status == "contractual"){
                    return (300 / 8) * $this->work_hours;
                }                  
                elseif($this->employment_status == "probationary"){              
                    return (350 / 8) * $this->work_hours;
                }elseif($this->employment_status == "regular"){
                    return (400 / 8) * $this->work_hours;
                }
            }elseif($this->position == "admin"){
                if($this->employment_status == "contrctual"){
                    return(350 /8) * $this->work_hours;
                }
                elseif($this->emplotment_status == "probationary"){
                    return (400 / 8) * $this->work_hours;
                }
                elseif($this->employment_status == "regular"){
                    return(500 / 8) * $this->work_hours;
                }
            }
        } 
    }    

        public function computeOvertimePay(){
            if($this->work_hours > 40){
                $ot = $this->work_hours - 40;
            }else{
                return 0;
            }
            if($this->position == 'staff'){
                if($this->employment_status == 'contractual'){
                    return ($ot * 10);
                }elseif($this->employment_status == 'probationary'){
                    return ($ot * 25);
                }elseif($this->employment_status == 'regular'){
                    return ($ot * 30);
                }
            }elseif($this->position == 'admin'){
                if($this->employment_status == 'contractual'){
                    return ($ot * 15);
                }elseif($this->employment_status == 'probationary'){
                    return ($ot * 30);
                }elseif($this->employment_status == 'regular'){
                    return ($ot * 40);
               } 
            }
        }

        public function getHealthCare(){
            if($this->civil_status == 'single'){
                return 200;
            }elseif($this->civil_status == 'married'){
                return 75;
            }
        }

        public function computeTax($gross_income){
            if($this->civil_status == 'single'){
                if($gross_income <= 1000){
                    $tax = 0;
                }else{
                    $tax = $gross_income  * 0.05;
                } 
            }elseif($this->civil_status == 'married'){
                if($gross_income <= 1500){
                    $tax = 0;
                }else{
                    $tax = $gross_income * 0.03;
                }
            }
            return $tax;
        }


        public function computeNetIncom(){
            $this->ot_pay = $this->computeOvertimePay();
            $this->reg_pay = $this->computeRegularPay();
            $gross_income = $this->reg_pay + $this->ot_pay;

        //deduction
            $this->healthcare = $this->getHealthCare();
            $this->tax = number_format($this->computeTax($gross_income), 2);

        //Net
            $net_income = $gross_income - ($this->healthcare + $this->tax);
                return $net_income;
        }
        //Getter
        public function getRegPay(){
            return $this->reg_pay;
        }

        public function getTax(){
            return $this->tax;
        }

}


?>