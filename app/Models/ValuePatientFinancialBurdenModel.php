<?php

namespace App\Models;

use CodeIgniter\Model;

class ValuePatientFinancialBurdenModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'valuepatientfinancialburden';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields = ["id", "MODULE1STUDYBURDEN","General_Information","Therapeutic_Area", "protocol_information", "condition_burden_by_therapeutic_area", "Study_type", "Participant", "Clinic_visit_frequency_during_treatment", "Clinic_visit_frequency_during_follow_up", "Study_duration", "Number_of_visits_per_study", "Procedures", "Invasive_procedures", "Hospitalisation_AND_Overnight_stay", "Questionnaire_and_Diary_usage", "Average_time_spent_in_clinic_per_visit", "Long_term_follow_up_visits", "Participant_information", "Age", "Care_giver_or_child_care_support_required", "Clinic_visit_travel_distance_round_trip", "Average_travel_time_per_clinic_visit_round_trip", "MODULE_2_COST_AND_PAYMENTS", "Compensation_method", "Participation_stipend", "Lost_income", "Reimbursement", "Expense_amounts_USD", "Travel_accomodation", "Patient_support_expenses", "Stipend_amounts_per_visit_USD", "Stipend_amounts_per_visit_USD_select","Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD","Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect",
     "active", "created_at", "modify_at", "deleted", "created_by", "deleted_at", "deleted_by"];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'modify_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];


}
