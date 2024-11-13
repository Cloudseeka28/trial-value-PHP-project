<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ValuePatientFinancialBurdenModel;
use App\Models\financialburdencalculatorModel;


class Home extends BaseController
{
    public function index()
    { 
       
       
         return view('home/index');
    }
    public function save(){

       $condition_burden_by_therapeutic_area = $this->request->getVar('condition_burden_by_therapeutic_area');
       $Study_type = $this->request->getVar('Study_type');
       $Participant = $this->request->getVar('Participant');
       $Clinic_visit_frequency_during_treatment = $this->request->getVar('Clinic_visit_frequency_during_treatment');
       $Clinic_visit_frequency_during_follow_up = $this->request->getVar('Clinic_visit_frequency_during_follow_up');
       $Study_duration = $this->request->getVar('Study_duration');
       $Number_of_visits_per_study = $this->request->getVar('Number_of_visits_per_study');
       $Procedures = $this->request->getVar('Procedures');
       $Invasive_procedures = $this->request->getVar('Invasive_procedures');
       $Hospitalisation_AND_Overnight_stay = $this->request->getVar('Hospitalisation_AND_Overnight_stay');
       $Questionnaire_and_Diary_usage = $this->request->getVar('Questionnaire_and_Diary_usage');
       $Average_time_spent_in_clinic_per_visit = $this->request->getVar('Average_time_spent_in_clinic_per_visit');
       $Long_term_follow_up_visits = $this->request->getVar('Long_term_follow_up_visits');
       $Participant_information = $this->request->getVar('Participant_information');
       $Age = $this->request->getVar('Age');
       $Care_giver_or_child_care_support_required = $this->request->getVar('Care_giver_or_child_care_support_required');
       $Clinic_visit_travel_distance_round_trip = $this->request->getVar('Clinic_visit_travel_distance_round_trip');
       $Average_travel_time_per_clinic_visit_round_trip = $this->request->getVar('Average_travel_time_per_clinic_visit_round_trip');
       $MODULE_2_COST_AND_PAYMENTS = $this->request->getVar('MODULE_2_COST_AND_PAYMENTS');
       $Compensation_method = $this->request->getVar('Compensation_method');
       $Participation_stipend = $this->request->getVar('Participation_stipend');
       $Lost_income = $this->request->getVar('Lost_income');
       $Reimbursement = $this->request->getVar('Reimbursement');
       $Expense_amounts_USD = $this->request->getVar('Expense_amounts_USD');
       $Travel_accomodation = $this->request->getVar('Travel_accomodation');
       $Patient_support_expenses = $this->request->getVar('Patient_support_expenses');
       $Stipend_amounts_per_visit_USD = $this->request->getVar('Stipend_amounts_per_visit_USD');
       $Stipend_amounts_per_visit_USD_select = $this->request->getVar('Stipend_amounts_per_visit_USD_select');
       $Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD = $this->request->getVar('Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD');
       $Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect = $this->request->getVar('Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect');
       $General_Information = $this->request->getVar('General_Information');
       $Therapeutic_Area = $this->request->getVar('Therapeutic_Area');
       $ValuePatientFinancialBurdenModel = new ValuePatientFinancialBurdenModel();
        $form_data = [
            "condition_burden_by_therapeutic_area"=>$condition_burden_by_therapeutic_area,
            "General_Information"=>$General_Information,
            "Therapeutic_Area"=>$Therapeutic_Area,
            "Study_type"=>$Study_type,
            "Participant"=>$Participant,
            "Clinic_visit_frequency_during_treatment"=>$Clinic_visit_frequency_during_treatment,
            "Clinic_visit_frequency_during_follow_up"=>$Clinic_visit_frequency_during_follow_up,
            "Study_duration"=>$Study_duration,
            "Number_of_visits_per_study"=>$Number_of_visits_per_study,
            "Procedures"=>$Procedures,
            "Invasive_procedures"=>$Invasive_procedures,
            "Hospitalisation_AND_Overnight_stay"=>$Hospitalisation_AND_Overnight_stay,
            "Questionnaire_and_Diary_usage"=>$Questionnaire_and_Diary_usage,
            "Average_time_spent_in_clinic_per_visit"=>$Average_time_spent_in_clinic_per_visit,
            "Long_term_follow_up_visits"=>$Long_term_follow_up_visits,
            "Participant_information"=>$Participant_information,
            "Age"=>$Age,
            "Care_giver_or_child_care_support_required"=>$Care_giver_or_child_care_support_required,
            "Clinic_visit_travel_distance_round_trip"=>$Clinic_visit_travel_distance_round_trip,
            "Average_travel_time_per_clinic_visit_round_trip"=>$Average_travel_time_per_clinic_visit_round_trip,
            "MODULE_2_COST_AND_PAYMENTS"=>$MODULE_2_COST_AND_PAYMENTS,
            "Compensation_method"=>$Compensation_method,
            "Participation_stipend"=>$Participation_stipend,
            "Lost_income"=>$Lost_income,
            "Reimbursement"=>$Reimbursement,
            "Expense_amounts_USD"=>$Expense_amounts_USD,
            "Travel_accomodation"=>$Travel_accomodation,
            "Patient_support_expenses"=>$Patient_support_expenses,
            "Stipend_amounts_per_visit_USD_select"=>$Stipend_amounts_per_visit_USD_select,
            "Stipend_amounts_per_visit_USD"=>$Stipend_amounts_per_visit_USD,
            "Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD"=>$Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD,
            "Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect"=>$Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect,
           
        ];
        $ValuePatientFinancialBurdenModel->insert($form_data);
       $insertId= $ValuePatientFinancialBurdenModel->getInsertID();
      $data=   $this->cal($form_data,$insertId);

        $this->session->setFlashdata('success', "Inserted successfully");

        return json_encode($data);
     //  return redirect()->to('/');
    }

    public function cal($data,$insertId){
        $condition_burden_by_therapeutic_area = 1;
        if( $data['condition_burden_by_therapeutic_area']=='Medium'){
            $condition_burden_by_therapeutic_area = 2;
        }
        if( $data['condition_burden_by_therapeutic_area']=='High'){
            $condition_burden_by_therapeutic_area = 3;
        }
        $Study_type = 0;
        if( $data['Study_type']=='interventional'){
            $Study_type = 1;
        }
          $Participant = 1;
        if( $data['Study_type']=='Patient'){
            $Participant = 2;
        } 
         $Clinic_visit_frequency_during_treatment = 3;
        if( $data['Clinic_visit_frequency_during_treatment']=='Monthly'){
            $Clinic_visit_frequency_during_treatment = 2;
        } 
         if( $data['Clinic_visit_frequency_during_treatment']=='Quartely'){
            $Clinic_visit_frequency_during_treatment = 1;
        }
        $Clinic_visit_frequency_during_follow_up = 3;
        if( $data['Clinic_visit_frequency_during_follow_up']=='Monthly'){
            $Clinic_visit_frequency_during_follow_up = 2;
        } 
         if( $data['Clinic_visit_frequency_during_follow_up']=='Quartely'){
            $Clinic_visit_frequency_during_follow_up = 1;
        }  

           $Study_duration = 3;
        if( $data['Study_duration']<2){
            $Study_duration = 2;
        } 
         if( $data['Study_duration']<1){
            $Study_duration = 1;
        }   
        
        $Number_of_visits_per_study = 3;
        if( $data['Number_of_visits_per_study']<24){
            $Study_duration = 2;
        } 
         if( $data['Number_of_visits_per_study']<75){
            $Study_duration = 1;
        }  

         $Invasive_procedures = 3;
        if( $data['Invasive_procedures']=='One time invesive'){
            $Invasive_procedures = 2;
        } 
         if( $data['Invasive_procedures']=='NoN-invasive'){
            $Invasive_procedures = 1;
        }

        $Hospitalisation_AND_Overnight_stay = 3;
        if( $data['Hospitalisation_AND_Overnight_stay']=='2'){
            $Hospitalisation_AND_Overnight_stay = 2;
        } 
         if( $data['Hospitalisation_AND_Overnight_stay']=='1'){
            $Hospitalisation_AND_Overnight_stay = 1;
        }   
       
        $Questionnaire_and_Diary_usage = 3;
        if( $data['Questionnaire_and_Diary_usage']=='Medium'){
            $Questionnaire_and_Diary_usage = 2;
        } 
         if( $data['Questionnaire_and_Diary_usage']=='No'){
            $Questionnaire_and_Diary_usage = 1;
        }  
        
        $Average_time_spent_in_clinic_per_visit = 3;
        if( $data['Average_time_spent_in_clinic_per_visit']<2){
            $Study_duration = 1;
        } 
        if( $data['Average_time_spent_in_clinic_per_visit']<4){
            $Study_duration = 2;
        } 

           
        $Long_term_follow_up_visits = 2;
        if( $data['Long_term_follow_up_visits']=='Yes treatment option'){
            $Long_term_follow_up_visits = 1;
        } 
         if( $data['Long_term_follow_up_visits']=='No'){
            $Long_term_follow_up_visits = 3;
        } 
         $Age = 3;
        if( $data['Age']=='13-18'){
            $Age = 2;
        } 
         if( $data['Age']=='18-65'){
            $Age = 1;
        } 

        $Care_giver_or_child_care_support_required = 0;
        if( $data['Care_giver_or_child_care_support_required']=='Yes'){
            $Care_giver_or_child_care_support_required = 1;
        } 
        
        $Clinic_visit_travel_distance_round_trip = 1;
        if( $data['Clinic_visit_travel_distance_round_trip']=='10-30KM'){
            $Clinic_visit_travel_distance_round_trip = 2;
        } 
        if( $data['Clinic_visit_travel_distance_round_trip']=='>30KM'){
            $Clinic_visit_travel_distance_round_trip = 3;
        } 
        
        $Average_travel_time_per_clinic_visit_round_trip = 3;
        if( $data['Average_travel_time_per_clinic_visit_round_trip']==1){
            $Average_travel_time_per_clinic_visit_round_trip = 1;
        } 
        if( $data['Average_travel_time_per_clinic_visit_round_trip']==2){
            $Average_travel_time_per_clinic_visit_round_trip = 2;
        } 



        

        // Estimated Compensation 
       
        $Lostincome  =  $data['Number_of_visits_per_study']*($data['Average_time_spent_in_clinic_per_visit']+$data['Average_travel_time_per_clinic_visit_round_trip']) * $data['Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD'];
        $Stipend  = $data['Number_of_visits_per_study'] * $data['Stipend_amounts_per_visit_USD'];
        $EstimatedCompensationTotal = $Lostincome +$Stipend;

        // Estimated Reimbursement
        $Travelaccomodationexpense =  $data['Travel_accomodation'] *  $data['Number_of_visits_per_study'];
        $Patientsupportexpense =  $data['Patient_support_expenses'] *  $data['Number_of_visits_per_study'];
        $EstimatedReimbursementTotal = $Travelaccomodationexpense +$Patientsupportexpense;

        $BurdenImpact = $condition_burden_by_therapeutic_area + $Study_type +$Participant + $Clinic_visit_frequency_during_treatment +$Clinic_visit_frequency_during_follow_up+$Study_duration+$Number_of_visits_per_study+$Invasive_procedures+$Hospitalisation_AND_Overnight_stay+$Questionnaire_and_Diary_usage+$Average_time_spent_in_clinic_per_visit+$Long_term_follow_up_visits+$Age+$Care_giver_or_child_care_support_required+$Clinic_visit_travel_distance_round_trip+$Average_travel_time_per_clinic_visit_round_trip;
        $BurdenImpactRisk ="High";
        if($BurdenImpact < 14){
            $BurdenImpactRisk ="Low";
            }
            if($BurdenImpact < 29){
                $BurdenImpactRisk ="MEDIUM";
            }
        $form_data = [
            "condition_burden_by_therapeutic_area"=>$condition_burden_by_therapeutic_area,
            "Study_type"=>$Study_type,
            "Participant"=>$Participant,
            "Clinic_visit_frequency_during_treatment"=>$Clinic_visit_frequency_during_treatment,
            "Clinic_visit_frequency_during_follow_up"=>$Clinic_visit_frequency_during_follow_up,
            "Study_duration"=>$Study_duration,
            "Number_of_visits_per_study"=>$Number_of_visits_per_study,
            // "Procedures"=>$Procedures,
            "Invasive_procedures"=>$Invasive_procedures,
            "Hospitalisation_AND_Overnight_stay"=>$Hospitalisation_AND_Overnight_stay,
            "Questionnaire_and_Diary_usage"=>$Questionnaire_and_Diary_usage,
            "Average_time_spent_in_clinic_per_visit"=>$Average_time_spent_in_clinic_per_visit,
            "Long_term_follow_up_visits"=>$Long_term_follow_up_visits,
            // "Participant_information"=>$Participant_information,
            "Age"=>$Age,
            "Care_giver_or_child_care_support_required"=>$Care_giver_or_child_care_support_required,
            "Clinic_visit_travel_distance_round_trip"=>$Clinic_visit_travel_distance_round_trip,
            "Average_travel_time_per_clinic_visit_round_trip"=>$Average_travel_time_per_clinic_visit_round_trip,

            "Lostincome"=>$Lostincome,
            "Stipend"=>$Stipend,
            "EstimatedCompensationTotal"=>$EstimatedCompensationTotal,
            "Travelaccomodationexpense"=>$Travelaccomodationexpense,
            "Patientsupportexpense"=>$Patientsupportexpense,
            "EstimatedReimbursementTotal"=>$EstimatedReimbursementTotal,
            "BurdenImpact"=>$BurdenImpact,
            "BurdenImpactRisk"=>$BurdenImpactRisk,
            "valuepatientfinancialburden_id"=>$insertId,
            
           
        ];

        $financialburdencalculatorModel = new financialburdencalculatorModel();
        $financialburdencalculatorModel->insert($form_data);
        return array(
            "Lostincome"=>$Lostincome,
            "Stipend"=>$Stipend,
            "EstimatedCompensationTotal"=>$EstimatedCompensationTotal,
            "Travelaccomodationexpense"=>$Travelaccomodationexpense,
            "Patientsupportexpense"=>$Patientsupportexpense,
            "EstimatedReimbursementTotal"=>$EstimatedReimbursementTotal,
            "BurdenImpact"=>$BurdenImpact,
            "BurdenImpactRisk"=>$BurdenImpactRisk,
    );

    }

    public function contact(){ 
        echo view('home/contact');
    }
    
}
